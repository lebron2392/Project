<?php

namespace views\examples\project;

use framework\View;

class TaskList extends View
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
            $this->setVar("IDTask",$part->IDTask);
            $this->setVar("OraInizio",$part->OraInizio);
            $this->setVar("OraFine",$part->OraFine);
            $this->setVar("Operazione",$part->Operazione);
            $this->setVar("Stato",$part->Stato);
            $this->setVar("QuantitaProgrammata",$part->QuantitaProgrammata);
            $this->setVar("Edificio",$part->Edificio);
            $this->setVar("Reparto",$part->Reparto);
            $this->setVar("Macchinario",$part->Macchinario);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}
