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
            SELECT IDTask, OraInizio, OraFine, Operazione
            FROM task
SQL;
        $this->updateResultSet();
    }
}
