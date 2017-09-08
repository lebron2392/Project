<?php
/**
 * Class PartRecord
 *
 * {ViewResponsability}
 *
 * @package controllers\examples\db
 * @category Application View
 * @author  {AuthorName} - {AuthorEmail}
*/
namespace views\examples\project;

use framework\View;
use models\beans\BeanTask;

class TaskEdit extends View
{

    /**
    * Object constructor.
    *
    * @param string|null $tplName The html template containing the static design.
    */
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/task_edit";
        parent::__construct($tplName);
    }

    /**
     * Update fiellds with bean data
     * @param BeanPart $bean
     */
    public function setFieldsWithBeanData(BeanTask $bean)
    {
        // Switch form mode
        if ($bean->getId() == null) {
            $this->setVar("FormTitle", "{RES:Form}");
            $this->setVar("readonly","readonly");
        }else  {
            $this->setVar("FormTitle", "{RES:Form}: ". $bean->getId());
            $this->setVar("readonly","readonly");
        }

        $this->setVar("ID",$bean->getId());
        $this->setVar("StartTime", $bean->getOrainizio());
        $this->setVar("FinishTime",$bean->getOrafine());
        $this->setVar("Operation",$bean->getOperazione());
        $this->setVar("SQuantity",$bean->getQuantitaprogrammata());
    }
}
