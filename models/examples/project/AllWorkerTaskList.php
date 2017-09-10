<?php

namespace models\examples\project;

use framework\Model;

class AllWorkerTaskList extends Model
{
    public function __construct()
    {
        parent::__construct();
        $pk = $_GET['id'];

        $this->sql =
<<<SQL
            SELECT IDTask, OraInizio, OraFine, Operazione, Stato, QuantitaProgrammata,
            QuantitaRealizzata, ErrorLog, Edificio, Reparto, Macchinario
            FROM task, odl, operaio
            WHERE task.IDODL = odl.ID AND odl.IDOperaio = operaio.IDOperaio AND operaio.IDOperaio = $pk
SQL;
        $this->updateResultSet();
    }
}
