<?php

namespace views\examples\project;

use framework\View;

class P3 extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list3";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");
        while ($part = $resultset->fetch_object()) {
            $this->setVar("IDOperaio",$part->IDOperaio);
            $this->setVar("Cognome",$part->Cognome);
            $this->setVar("Nome",$part->Nome);
            $this->setVar("Ruolo",$part->Ruolo);
            $this->setVar("DataAssunzione",$part->DataAssunzione);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}