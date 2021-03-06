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

namespace controllers\examples\project;
use framework\Controller;
use framework\Model;
use framework\View;

use models\examples\project\TaskEdit as PartRecordModel;
use views\examples\project\TaskEdit as PartRecordView;
use controllers\examples\cms\NavigationBar;
use framework\components\Record;
use models\beans\BeanTask;
use framework\BeanAdapter;

class TaskEdit extends Controller
{
    protected $view;
    protected $model;

    /**
    * Object constructor.
    *
    * @param View $view
    * @param Model $mode
    */
    public function __construct(View $view=null, Model $model=null)
    {
        $this->view = empty($view) ? $this->getView() : $view;
        $this->model = empty($model) ? $this->getModel() : $model;
        parent::__construct($this->view,$this->model);
    }

    /**
    * Autorun method. Put your code here for running it after object creation.
    * @param mixed|null $parameters Parameters to manage
    *
    */
    protected function autorun($parameters = null)
    {
        // Use application NavigationBar Controller
        $navigation = new NavigationBar();
        $navigation->view->loadCustomTemplate("templates/examples/cms/navigation_bar_progetto_impiegato");

        // Binding child controller NavigationBar
        $this->bindController($navigation);

        // Creates a record component instance
        $record = new Record();

        // Customizes the record components
        $record->setName("PartManagerRecord");
        $record->registerPkUrlParameter("id");

        // Optionals setting
        $record->registerActionName($record::ADD, "aggiungi");
        $record->registerActionName($record::UPDATE, "modifica");
        $record->registerActionName($record::DELETE, "elimina");
        $record->registerActionName($record::CLOSE, "chiudi");

        // Gets the current record
        $currentRecord = $record->getCurrentRecord();

        // Sets history back for buttons close and delete
        $historyBack = $record->getControllerHistoryBack("part_paginator_sorter_search2");
        $record->redirectAfterClose = $historyBack;

        // Sets disallow mode
        $record->disallowMode = $record::DISALLOW_MODE_WITH_HIDE;
        $record->disallowAction($record::DELETE);
        $record->disallowAction($record::ADD);

        // Creates BeanAclActions, its BeanAdapter and select the
        // current record
        $bean = new BeanTask();
        $beanAdapter = new BeanAdapter($bean);
        $beanAdapter->select($currentRecord);

        // Disables update if record was not fouund
        if ($bean->getId() == ""){
            $record->disallowAction(Record::UPDATE);
        }

        $remaining = $bean->getQuantitaprogrammata() - $bean->getQuantitarealizzata();

        if ($remaining == 0) {
            $record->disallowAction(Record::UPDATE);
        }

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

        // Pocesses record errors
        if ($remaining != 0) {
            $this->view->parseErrors($record->getErrors());
        } else {
            $this->view->parseErrors(null, "ok");
        }

    }


    public function open($pk)
    {
        $_GET["id"] = $pk;
        $this->autorun();
        $this->render();
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
        $view = new PartRecordView("/examples/project/task_edit");
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
