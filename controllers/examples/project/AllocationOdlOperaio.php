<?php
/**
 * Class PartRecord
 *
 * {ControllerResponsability}
 *
 * @package controllers\examples\db
 * @category Application Controller
 * @author  {AuthorName} - {AuthorEmail}
*/
namespace controllers\examples\Project;

use framework\Controller;
use framework\Model;
use framework\View;

use models\examples\Project\AllocationOdlOperaio as PartRecordModel;
use views\examples\Project\AllocationOdlOperaio as PartRecordView;
use framework\components\Record;
use models\beans\BeanOdl;
use framework\BeanAdapter;
use controllers\examples\cms\NavigationBar;

class AllocationOdlOperaio extends Controller
{
    protected $view;
    protected $model;


    public function __construct(View $view=null, Model $model=null)
    {
        $this->view = empty($view) ? $this->getView() : $view;
        $this->model = empty($model) ? $this->getModel() : $model;
        parent::__construct($this->view,$this->model);
    }


    protected function autorun($parameters = null)
    {
        $navigation = new NavigationBar();
        $navigation->view->loadCustomTemplate("templates/examples/cms/navigation_bar_progetto");
        $this->bindController($navigation);

        // Builds select options values
        $this->model->makeMeausurementUnitCodeList($this->view);

        // Creates a record component instance
        $record = new Record();

        // Customizes the record components
        $record->setName("PartManagerRecord");
        $record->registerPkUrlParameter("IDOperaio");

        // Optionals setting
        $record->registerActionName($record::ADD, "aggiungi");
        $record->registerActionName($record::UPDATE, "modifica");
        $record->registerActionName($record::DELETE, "elimina");
        $record->registerActionName($record::CLOSE, "chiudi");

        // Gets the current record
        $currentRecord = $record->getCurrentRecord();

        // Sets history back for buttons close and delete
        $historyBack = $record->getControllerHistoryBack("../../Homepage");
        $record->redirectAfterClose = $historyBack;

        // Sets disallow mode
        $record->disallowMode = $record::DISALLOW_MODE_WITH_HIDE;
        $record->disallowAction($record::DELETE);
        $record->disallowAction($record::UPDATE);

        // Creates BeanAclActions, its BeanAdapter and select the
        // current record
        $bean = new BeanOdl();
        $beanAdapter = new BeanAdapter($bean);
        $beanAdapter->select($currentRecord);

        // Handles form submission and updates the bean attributes
        // with posted data
        if ($record->isSubmitted()){
            $this->model->setBeanWithPostedData($bean);
        }

        // Initializes record component with BeanAdapter
        // (and automatically with its managed Bean BeanPart)
        try {
            $record->init($beanAdapter);
        } catch (\Exception $e){
            if ($record->editMode == false) {
                $bean->setId(null);
                $record->disallowAction(Record::UPDATE);
                $record->disallowAction(Record::DELETE);
            } else {
               $record->disallowAction(Record::ADD);
            }
        };

        // Binding Record Component to the view (without rendering)
        $this->bindComponent($record,false);

        // Set others view fields values with bean data
        $this->view->setFieldsWithBeanData($bean);

        $this->view->parseErrors($record->getErrors());
    }


    public function add($dummy)
    {
        $this->autorun();
        $this->render();
    }

    /**
    * Inizialize the View by loading static design of /examples/db/part_record.html.tpl
    * managed by views\examples\db\PartRecord class
    *
    */
    public function getView()
    {
        $view = new PartRecordView("/examples/Project/allocation_odl_operaio");
        return $view;
    }

    /**
    * Inizialize the Model by loading models\examples\db\PartRecord class
    *
    */
    public function getModel()
    {
        $model = new PartRecordModel();
        return $model;
    }
}
