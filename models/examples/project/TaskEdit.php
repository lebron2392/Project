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
        $bean->setId($_POST["ID"]);
        $bean->setOrainizio($_POST["StartTime"]);
        $bean->setOrafine($_POST["FinishTime"]);
        $bean->setOperazione($_POST["Operation"]);
        $bean->setStato($_POST["Status"]);
        $bean->setQuantitaprogrammata($_POST["SQuantity"]);
        $bean->setQuantitarealizzata($_POST["PQuantity"]);
        $bean->setQuantitaaggiuntiva($_POST["AQuantity"]);
        $bean->setErrorlog($_POST["Log"]);
    }
}
