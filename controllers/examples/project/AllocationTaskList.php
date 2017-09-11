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

use models\examples\project\AllocationTaskList as PartListModel;
use views\examples\project\AllocationTaskList as PartListView;
use framework\components\DataRepeater;


class AllocationTaskList extends Controller
{

    public function __construct(View $view = null, Model $model = null)
    {
        $this->view = empty($view) ? $this->getView() : $view;
        $this->model = empty($model) ? $this->getModel() : $model;
        parent::__construct($this->view, $this->model);
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
        $parts = new DataRepeater($this->view, $this->model, "Parts", null);
        $this->bindComponent($parts);
        $this->render();
    }

    /**
     * Inizializes the View
     */
    public function getView()
    {
        $view = new PartListView("/examples/project/allocation_task_list");
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

}
