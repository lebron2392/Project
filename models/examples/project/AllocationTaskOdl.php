<?php
/**
 * Class PartRecord
 *
 * {ModelResponsability}
 *
 * @package models\examples\db
 * @category Application Model
 * @author  {AuthorName} - {AuthorEmail}
*/
namespace models\examples\Project;

use framework\Model;
use views\examples\Project\AllocationTaskOdl as PartRecordView;
use framework\components\DataRepeater;
use models\beans\BeanTask;

class AllocationTaskOdl extends Model
{

    /**
    * Object constructor.
    *
    */
    public function __construct()
    {
        parent::__construct();
    }


    protected function autorun($parameters = null)
    {
    }


    public function makeIDTaskList(PartRecordView $view)
    {
        $idTaskList = new Model();
        $idTaskList->sql= "SELECT IDTask, IDTask as name1, Operazione as name2 FROM task WHERE Stato='NOT ASSIGNED'";
        $idTaskList->updateResultSet();
        $list = new DataRepeater($view, $idTaskList,"IDTask_list",null);
        $list->render();
    }

    public function makeIDOdlList(PartRecordView $view)
    {
        $idOdlList = new Model();
        $idOdlList->sql= "SELECT ID, ID as name3, Giorno as name4 FROM odl";
        $idOdlList->updateResultSet();
        $list = new DataRepeater($view, $idOdlList,"IDOdl_list",null);
        $list->render();
    }

    public function setBeanWithPostedData(BeanTask $bean)
    {
        $bean->setId($_POST["IDTask"]);
        $bean->setIdodl('ID');
        $bean->setOrainizio($_POST["StartTime"]);
        $bean->setOrafine($_POST["FinishTime"]);
    }
}