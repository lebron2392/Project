<?php

namespace models\examples\project;

use framework\Model;

class PartPaginator2 extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT task.ID as ID, OraInizio, OraFine, Operazione, Cognome, Nome
            FROM task, odl, operaio
            WHERE task.IDODL = odl.ID AND odl.IDOperaio = operaio.ID
SQL;
        $this->updateResultSet();
    }
}
