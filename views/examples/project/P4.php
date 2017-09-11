<?php

namespace views\examples\project;

use framework\View;

class P4 extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list4";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");
        while ($part = $resultset->fetch_object()) {
            $this->setVar("IDCommessa",$part->IDCommessa);
            $this->setVar("Descrizione",$part->Descrizione);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}