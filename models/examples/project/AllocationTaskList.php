<?php

namespace models\examples\project;

use framework\Model;

class AllocationTaskList extends Model
{
    public function __construct()
    {
        parent::__construct();
        $pk = $_GET['id'];

        $this->sql =
<<<SQL
            SELECT task.IDTask as IDTask, task.Operazione as Operazione,
                   commessa.IDCommessa as IDCommessa, commessa.Descrizione as Descrizione
            FROM commessa, appartiene, task
            WHERE commessa.IDCommessa = appartiene.IDCommessa AND appartiene.IDTask = task.IDTask
                  AND commessa.IDCommessa=$pk AND task.Stato != "FINISHED"
SQL;
        $this->updateResultSet();
    }
}
