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
namespace views\examples\Project;

use framework\View;
use models\beans\BeanTask;

class AllocationTaskOdl extends View
{

    /**
    * Object constructor.
    *
    * @param string|null $tplName The html template containing the static design.
    */
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/Project/allocation_task_odl";
        parent::__construct($tplName);
    }

    /**
     * Update fiellds with bean data
     * @param BeanPart $bean
     */
    public function setFieldsWithBeanData(BeanTask $bean)
    {
        //$this->setVar("IDTask", $bean->getId());
        //$this->setVar("IDOdl", $bean->getIdodl());
    }



}
