<?php

namespace models\examples\project;

use framework\Model;

class AllOrderTaskList extends Model
{
    public function __construct()
    {
        parent::__construct();
        $pk = $_GET['id'];

        $this->sql =
<<<SQL
            SELECT count(*) as NTotTask, sum(QuantitaProgrammata) as QTotProg, sum(QuantitaRealizzata) as QTotReal,
                   commessa.IDCommessa as IDCommessa, commessa.Descrizione as Descrizione
            FROM commessa, appartiene, task
            WHERE commessa.IDCommessa = appartiene.IDCommessa AND appartiene.IDTask = task.IDTask
                  AND commessa.IDCommessa=$pk
SQL;
        $this->updateResultSet();
    }
}
