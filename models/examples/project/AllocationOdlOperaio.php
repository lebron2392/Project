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
use views\examples\Project\AllocationOdlOperaio as PartRecordView;
use framework\components\DataRepeater;
use models\beans\BeanOdl;

class AllocationOdlOperaio extends Model
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
        $workerList->sql= "SELECT distinct(IDOperaio), Cognome as name1, Nome as name2
                           FROM operaio";
        $workerList->updateResultSet();
        $list = new DataRepeater($view, $workerList,"IDOperaio_list",null);
        $list->render();
    }


    public function setBeanWithPostedData(BeanOdl $bean)
    {
        $bean->setIdoperaio($_POST["IDOperaio"]);
        $bean->setGiorno($_POST["s_date"]);
    }
}
