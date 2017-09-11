<?php

namespace models\examples\project;

use framework\Model;

class PartPaginator5 extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT IDCommessa, Descrizione
            FROM commessa
SQL;
        $this->updateResultSet();
    }
}
