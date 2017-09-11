<?php

namespace models\examples\project;

use framework\Model;

class PartPaginator6 extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT IDCommessa, Descrizione
            FROM task
            WHERE Stato != "FINISHED"
SQL;
        $this->updateResultSet();
    }
}
