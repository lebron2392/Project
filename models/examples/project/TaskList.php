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
            SELECT IDTask, OraInizio, OraFine, Operazione, Stato,
            QuantitaProgrammata, Edificio, Reparto, Macchinario
            FROM Task
            WHERE IDODL=$pk
SQL;
        $this->updateResultSet();
    }

}
