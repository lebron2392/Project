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
            SELECT task.IDTask, OraInizio, OraFine, Operazione, Stato,
            QuantitaProgrammata, Edificio, Reparto, Macchinario, Descrizione
            FROM task, interessato, prodotto
            WHERE task.IDTask = interessato.IDTask AND interessato.IDProdotto = prodotto.ID AND IDODL=$pk
SQL;
        $this->updateResultSet();
    }

}
