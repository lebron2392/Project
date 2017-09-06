<?php
/**
 * Class TaskList
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

use models\examples\project\TaskList as PartListModel;
use views\examples\project\TaskList as PartListView;
use controllers\examples\cms\NavigationBar;
use framework\components\DataRepeater;


class TaskList extends Controller
{
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
        //$navigation = new NavigationBar();
        //$this->bindController($navigation);
    }


    protected function autorun($parameters = null)
    {
        $this->view->setBlockParts($this->model->getResultSet());
    }

    /**
     * Use a DataRepeater to simplify the job
     */
    public function useRepeater()
    {
        $parts = new DataRepeater($this->view,$this->model,"Parts",null);
        $this->bindComponent($parts);
        $this->render();
    }

    /**
    * Inizializes the View
    */
    public function getView()
    {
        $view = new PartListView("/examples/project/task_list");
        return $view;
    }

    /**
    * Inizializes the Model
    */
    public function getModel()
    {
        $model = new PartListModel();
        return $model;
    }

    public function open($pk)
    {
        $_GET["part_code"] = $pk;
        $this->autorun();
        $this->render();
    }
}
