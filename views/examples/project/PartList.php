<?php

namespace views\examples\project;

use framework\View;

class PartList extends View
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
            $this->setVar("IDODL",$part->IDODL);
            $this->setVar("Operazione",$part->operazione);
            $this->setVar("OraInizio",$part->ora_inizio);
            $this->setVar("OraFine",$part->ora_fine);
            $this->setVar("QuantitaProgrammata",$part->quantita_programmata);
            $this->setVar("QuantitaRealizzata",$part->quantita_realizzata);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}
