<?php

namespace models\examples\project;

use framework\Model;

class PartPaginator extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT ID, Giorno, IDOperaio
            FROM odl
SQL;
        $this->updateResultSet();
    }
}
