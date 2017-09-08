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
namespace models\examples\project;

use framework\Model;
use views\examples\project\TaskEdit as PartRecordView;
use framework\components\DataRepeater;
use models\beans\BeanTask;

class TaskEdit extends Model
{

    /**
    * Object constructor.
    *
    */
    public function __construct()
    {
        parent::__construct();
    }

    /**
    * Autorun method. Put your code here for running it after object creation.
    * @param mixed|array|null $parameters Additional parameters to manage
    *
    */
    protected function autorun($parameters = null)
    {

    }


    /**
     * Update Table by using bean
     * @param BeanPart $bean
     */
    public function setBeanWithPostedData(BeanTask $bean)
    {
        $bean->setPartCode($_POST["ID"]);
        $bean->setDescription($_POST["StartTime"]);
        $bean->setSource($_POST["FinishTime"]);
        $bean->setSourceLeadTime($_POST["Operation"]);
        $bean->setMeasurementUnitCode($_POST["Status"]);
        $bean->setPartTypeCode($_POST["SQuantity"]);
        $bean->setPartCategoryCode($_POST["PQuantity"]);
        $bean->setWastage($_POST["Log"]);
    }
}
