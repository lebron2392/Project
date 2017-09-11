<?php

namespace views\examples\project;

use framework\View;

class AllocationTaskList extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");
        $id = null;

        if ($resultset->num_rows == 0) {
            $this->setVar("Title", "{RES:Title}");
            $this->setVar("IDTask","");
            $this->setVar("Operation","");

            $this->parseCurrentBlock();
        } else {
            while ($part = $resultset->fetch_object()) {
                $id = $part->IDCommessa . " - " . $part->Descrizione;
                $this->setVar("IDTask", $part->IDTask);
                $this->setVar("Operation", $part->Operazione);

                $this->parseCurrentBlock();
            }
        }
        $this->setBlock();
        $this->closeCurrentBlock();
        $this->setVar("IDOr", $id);
    }
}
