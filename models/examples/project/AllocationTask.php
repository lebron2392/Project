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
use views\examples\Project\AllocationTask as PartRecordView;
use framework\components\DataRepeater;
use models\beans\BeanOdl;

class AllocationTask extends Model
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


    public function makeMeausurementUnitCodeList(PartRecordView $view)
    {
        $workerList = new Model();
        $workerList->sql= "SELECT IDOperaio as name1, Cognome as name2, Nome as name3 FROM operaio";
        $workerList->updateResultSet();
        $list = new DataRepeater($view, $workerList,"IDOperaio_list",null);
        $list->render();
    }

    public function setBeanWithPostedData(BeanOdl $bean)
    {
        //$bean->setId($_POST["IDOdl"]);
        $bean->setIdoperaio($_POST["IDOperaio"]);

    }
}
