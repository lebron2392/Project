<?php
/**
 * Class PartPaginator
 *
 * {ModelResponsability}
 *
 * @package models\examples\db
 * @category Application Model
 * @author  {AuthorName} - {AuthorEmail}
*/
namespace models\examples\project;

use framework\Model;

class PartPaginator extends Model
{
    public function __construct()
    {
        parent::__construct();
        $this->sql =
<<<SQL
            SELECT  
              ID,
              IDODL,
              Operazione,
              OraInizio,
              OraFine,
              QuantitaProgrammata,
              QuantitaRealizzata              
            FROM 
              task
SQL;
        // Also this
        // $this->sql = "SELECT t.* FROM part t";
        $this->updateResultSet();
    }
}
