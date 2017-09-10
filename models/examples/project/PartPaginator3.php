<?php

namespace models\examples\project;

use framework\Model;

class PartPaginator3 extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT IDOperaio, Cognome, Nome, Ruolo, DataAssunzione
            FROM operaio
SQL;
        $this->updateResultSet();
    }
}
