<?php

namespace models\examples\project;

use framework\Model;

class TaskList extends Model
{
    public function __construct()
    {
        parent::__construct();
        $pk = $_GET['id'];

        $this->sql =
<<<SQL
            SELECT Task.ID as IDTask, Task.OraInizio as OraInizio, Task.OraFine as OraFine,
                              Task.Operazione as Operazione, Task.Stato as Stato, Task.QuantitaProgrammata as QuantitaProgrammata,
                              Task.Edificio as Edificio, Task.Reparto as Reparto, Task.Macchinario as Macchinario
            FROM Task
            WHERE Task.IDODL=$pk
SQL;
        $this->updateResultSet();
    }

}
