<?php

namespace views\examples\project;

use framework\View;

class P2 extends View
{
    public function __construct($tplName = null)
    {
        if (empty($tplName))
            $tplName = "/examples/project/part_list2";
        parent::__construct($tplName);
    }

    public function setBlockParts(\mysqli_result $resultset){
        $this->openBlock("Parts");
        while ($part = $resultset->fetch_object()) {
            $this->setVar("ID",$part->ID);
            $this->setVar("OraInizio",$part->OraInizio);
            $this->setVar("OraFine",$part->OraFine);
            $this->setVar("Operazione",$part->Operazione);
            $this->setVar("Cognome",$part->Cognome);
            $this->setVar("Nome",$part->Nome);
            $this->parseCurrentBlock();
        }
        $this->setBlock();
    }
}
