<?php

namespace views\examples\project;

use framework\View;

class AllWorkerTaskList extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");

        if ($resultset->num_rows == 0) {
            $this->setVar("IDTask","");
            $this->setVar("OraInizio","");
            $this->setVar("OraFine","");
            $this->setVar("Operazione","");
            $this->setVar("Stato","");
            $this->setVar("QuantitaProgrammata","");
            $this->setVar("QuantitaRealizzata","");
            $this->setVar("ErrorLog","");
            $this->setVar("Edificio","");
            $this->setVar("Reparto","");
            $this->setVar("Macchinario","");
            $this->parseCurrentBlock();
        } else {
            while ($part = $resultset->fetch_object()) {
                $this->setVar("IDTask", $part->IDTask);
                $this->setVar("OraInizio", $part->OraInizio);
                $this->setVar("OraFine", $part->OraFine);
                $this->setVar("Operazione", $part->Operazione);
                $this->setVar("Stato", $part->Stato);
                $this->setVar("QuantitaProgrammata", $part->QuantitaProgrammata);
                $this->setVar("QuantitaRealizzata", $part->QuantitaProgrammata);
                $this->setVar("ErrorLog", $part->Edificio);
                $this->setVar("Edificio", $part->Edificio);
                $this->setVar("Reparto", $part->Reparto);
                $this->setVar("Macchinario", $part->Macchinario);
                $this->parseCurrentBlock();
            }
        }
        $this->setBlock();
    }
}
