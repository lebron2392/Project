<?php

namespace views\examples\project;

use framework\View;

class P1 extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");
        while ($part = $resultset->fetch_object()) {
            $this->setVar("ID",$part->ID);
            $this->setVar("Giorno",$part->Giorno);
            $this->setVar("IDOperaio",$part->IDOperaio);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}
