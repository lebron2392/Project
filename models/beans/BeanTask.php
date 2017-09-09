<?php
/**
 * Class BeanTask
 * Bean class for object oriented management of the MySQL table task
 *
 * Comment of the managed table task: Not specified.
 *
 * Responsibility:
 *
 *  - provides instance constructors for both managing of a fetched table or for a new row
 *  - provides destructor to automatically close database connection
 *  - defines a set of attributes corresponding to the table fields
 *  - provides setter and getter methods for each attribute
 *  - provides OO methods for simplify DML select, insert, update and delete operations.
 *  - provides a facility for quickly updating a previously fetched row
 *  - provides useful methods to obtain table DDL and the last executed SQL statement
 *  - provides error handling of SQL statement
 *  - uses Camel/Pascal case naming convention for Attributes/Class used for mapping of Fields/Table
 *  - provides useful PHPDOC information about the table, fields, class, attributes and methods.
 *
 * @extends MySqlRecord
 * @implements Bean
 * @filesource BeanTask.php
 * @category MySql Database Bean Class
 * @package models/bean
 * @author Rosario Carvello <rosario.carvello@gmail.com>
 * @version GIT:v1.0.0
 * @note  This is an auto generated PHP class builded with MVCMySqlReflection, a small code generation engine extracted from the author's personal MVC Framework.
 * @copyright (c) 2016 Rosario Carvello <rosario.carvello@gmail.com> - All rights reserved. See License.txt file
 * @license BSD
 * @license https://opensource.org/licenses/BSD-3-Clause This software is distributed under BSD Public License.
*/

namespace models\beans;
use framework\MySqlRecord;
use framework\Bean;

class BeanTask extends MySqlRecord implements Bean
{
    /**
     * A control attribute for the update operation.
     * @note An instance fetched from db is allowed to run the update operation.
     *       A new instance (not fetched from db) is allowed only to run the insert operation but,
     *       after running insertion, the instance is automatically allowed to run update operation.
     * @var bool
     */
    private $allowUpdate = false;

    /**
     * Class attribute for mapping the primary key ID of table task
     *
     * Comment for field ID: Not specified<br>
     * @var int $id
     */
    private $id;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = false;

    /**
     * Class attribute for mapping table field OraInizio
     *
     * Comment for field OraInizio: Not specified.<br>
     * Field information:
     *  - Data type: string|time
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $orainizio
     */
    private $orainizio;

    /**
     * Class attribute for mapping table field OraFine
     *
     * Comment for field OraFine: Not specified.<br>
     * Field information:
     *  - Data type: string|time
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $orafine
     */
    private $orafine;

    /**
     * Class attribute for mapping table field Operazione
     *
     * Comment for field Operazione: Not specified.<br>
     * Field information:
     *  - Data type: varchar(20)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $operazione
     */
    private $operazione;

    /**
     * Class attribute for mapping table field Stato
     *
     * Comment for field Stato: Not specified.<br>
     * Field information:
     *  - Data type: varchar(20)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $stato
     */
    private $stato;

    /**
     * Class attribute for mapping table field QuantitaProgrammata
     *
     * Comment for field QuantitaProgrammata: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $quantitaprogrammata
     */
    private $quantitaprogrammata;

    /**
     * Class attribute for mapping table field QuantitaRealizzata
     *
     * Comment for field QuantitaRealizzata: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $quantitarealizzata
     */
    private $quantitarealizzata;

    /**
     * Class attribute for mapping table field ErrorLog
     *
     * Comment for field ErrorLog: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $errorlog
     */
    private $errorlog;

    /**
     * Class attribute for mapping table field Edificio
     *
     * Comment for field Edificio: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $edificio
     */
    private $edificio;

    /**
     * Class attribute for mapping table field Reparto
     *
     * Comment for field Reparto: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $reparto
     */
    private $reparto;

    /**
     * Class attribute for mapping table field Macchinario
     *
     * Comment for field Macchinario: Not specified.<br>
     * Field information:
     *  - Data type: text
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $macchinario
     */
    private $macchinario;

    /**
     * Class attribute for mapping table field IDODL
     *
     * Comment for field IDODL: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var int $idodl
     */
    private $idodl;

    /**
     * Class attribute for storing the SQL DDL of table task
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGB0YXNrYCAoCiAgYElEYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBPcmFJbml6aW9gIHRpbWUgTk9UIE5VTEwsCiAgYE9yYUZpbmVgIHRpbWUgTk9UIE5VTEwsCiAgYE9wZXJhemlvbmVgIHZhcmNoYXIoMjApIE5PVCBOVUxMLAogIGBTdGF0b2AgdmFyY2hhcigyMCkgTk9UIE5VTEwsCiAgYFF1YW50aXRhUHJvZ3JhbW1hdGFgIGludCgxMSkgTk9UIE5VTEwsCiAgYFF1YW50aXRhUmVhbGl6emF0YWAgaW50KDExKSBOT1QgTlVMTCwKICBgRXJyb3JMb2dgIHRleHQgTk9UIE5VTEwsCiAgYEVkaWZpY2lvYCB0ZXh0IE5PVCBOVUxMLAogIGBSZXBhcnRvYCB0ZXh0IE5PVCBOVUxMLAogIGBNYWNjaGluYXJpb2AgdGV4dCBOT1QgTlVMTCwKICBgSURPRExgIGludCgxMSkgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBJRGApLAogIEtFWSBgSURPRExgIChgSURPRExgKSwKICBDT05TVFJBSU5UIGB0YXNrX2liZmtfMWAgRk9SRUlHTiBLRVkgKGBJRE9ETGApIFJFRkVSRU5DRVMgYG9kbGAgKGBJRGApIE9OIERFTEVURSBDQVNDQURFIE9OIFVQREFURSBDQVNDQURFCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9bGF0aW4x";

    /**
     * setId Sets the class attribute id with a given value
     *
     * The attribute id maps the field ID defined as int(11).<br>
     * Comment for field ID: Not specified.<br>
     * @param int $id
     * @category Modifier
     */

    private $quantitaaggiuntiva;


    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * setOrainizio Sets the class attribute orainizio with a given value
     *
     * The attribute orainizio maps the field OraInizio defined as string|time.<br>
     * Comment for field OraInizio: Not specified.<br>
     * @param string $orainizio
     * @category Modifier
     */
    public function setOrainizio($orainizio)
    {
        $this->orainizio = (string)$orainizio;
    }

    /**
     * setOrafine Sets the class attribute orafine with a given value
     *
     * The attribute orafine maps the field OraFine defined as string|time.<br>
     * Comment for field OraFine: Not specified.<br>
     * @param string $orafine
     * @category Modifier
     */
    public function setOrafine($orafine)
    {
        $this->orafine = (string)$orafine;
    }

    /**
     * setOperazione Sets the class attribute operazione with a given value
     *
     * The attribute operazione maps the field Operazione defined as varchar(20).<br>
     * Comment for field Operazione: Not specified.<br>
     * @param string $operazione
     * @category Modifier
     */
    public function setOperazione($operazione)
    {
        $this->operazione = (string)$operazione;
    }

    /**
     * setStato Sets the class attribute stato with a given value
     *
     * The attribute stato maps the field Stato defined as varchar(20).<br>
     * Comment for field Stato: Not specified.<br>
     * @param string $stato
     * @category Modifier
     */
    public function setStato($stato)
    {
        $this->stato = (string)$stato;
    }

    /**
     * setQuantitaprogrammata Sets the class attribute quantitaprogrammata with a given value
     *
     * The attribute quantitaprogrammata maps the field QuantitaProgrammata defined as int(11).<br>
     * Comment for field QuantitaProgrammata: Not specified.<br>
     * @param int $quantitaprogrammata
     * @category Modifier
     */
    public function setQuantitaprogrammata($quantitaprogrammata)
    {
        $this->quantitaprogrammata = (int)$quantitaprogrammata;
    }

    /**
     * setQuantitarealizzata Sets the class attribute quantitarealizzata with a given value
     *
     * The attribute quantitarealizzata maps the field QuantitaRealizzata defined as int(11).<br>
     * Comment for field QuantitaRealizzata: Not specified.<br>
     * @param int $quantitarealizzata
     * @category Modifier
     */
    public function setQuantitarealizzata($quantitarealizzata)
    {
        $this->quantitarealizzata = (int)$quantitarealizzata;
    }

    /**
     * setErrorlog Sets the class attribute errorlog with a given value
     *
     * The attribute errorlog maps the field ErrorLog defined as text.<br>
     * Comment for field ErrorLog: Not specified.<br>
     * @param string $errorlog
     * @category Modifier
     */
    public function setErrorlog($errorlog)
    {
        $this->errorlog = (string)$errorlog;
    }

    /**
     * setEdificio Sets the class attribute edificio with a given value
     *
     * The attribute edificio maps the field Edificio defined as text.<br>
     * Comment for field Edificio: Not specified.<br>
     * @param string $edificio
     * @category Modifier
     */
    public function setEdificio($edificio)
    {
        $this->edificio = (string)$edificio;
    }

    /**
     * setReparto Sets the class attribute reparto with a given value
     *
     * The attribute reparto maps the field Reparto defined as text.<br>
     * Comment for field Reparto: Not specified.<br>
     * @param string $reparto
     * @category Modifier
     */
    public function setReparto($reparto)
    {
        $this->reparto = (string)$reparto;
    }

    /**
     * setMacchinario Sets the class attribute macchinario with a given value
     *
     * The attribute macchinario maps the field Macchinario defined as text.<br>
     * Comment for field Macchinario: Not specified.<br>
     * @param string $macchinario
     * @category Modifier
     */
    public function setMacchinario($macchinario)
    {
        $this->macchinario = (string)$macchinario;
    }

    /**
     * setIdodl Sets the class attribute idodl with a given value
     *
     * The attribute idodl maps the field IDODL defined as int(11).<br>
     * Comment for field IDODL: Not specified.<br>
     * @param int $idodl
     * @category Modifier
     */
    public function setIdodl($idodl)
    {
        $this->idodl = (int)$idodl;
    }


    public function setQuantitaaggiuntiva($quantitaaggiuntiva)
    {
        $this->quantitaaggiuntiva = (int)$quantitaaggiuntiva;
    }


    /**
     * getId gets the class attribute id value
     *
     * The attribute id maps the field ID defined as int(11).<br>
     * Comment for field ID: Not specified.
     * @return int $id
     * @category Accessor of $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * getOrainizio gets the class attribute orainizio value
     *
     * The attribute orainizio maps the field OraInizio defined as string|time.<br>
     * Comment for field OraInizio: Not specified.
     * @return string $orainizio
     * @category Accessor of $orainizio
     */
    public function getOrainizio()
    {
        return $this->orainizio;
    }

    /**
     * getOrafine gets the class attribute orafine value
     *
     * The attribute orafine maps the field OraFine defined as string|time.<br>
     * Comment for field OraFine: Not specified.
     * @return string $orafine
     * @category Accessor of $orafine
     */
    public function getOrafine()
    {
        return $this->orafine;
    }

    /**
     * getOperazione gets the class attribute operazione value
     *
     * The attribute operazione maps the field Operazione defined as varchar(20).<br>
     * Comment for field Operazione: Not specified.
     * @return string $operazione
     * @category Accessor of $operazione
     */
    public function getOperazione()
    {
        return $this->operazione;
    }

    /**
     * getStato gets the class attribute stato value
     *
     * The attribute stato maps the field Stato defined as varchar(20).<br>
     * Comment for field Stato: Not specified.
     * @return string $stato
     * @category Accessor of $stato
     */
    public function getStato()
    {
        return $this->stato;
    }

    /**
     * getQuantitaprogrammata gets the class attribute quantitaprogrammata value
     *
     * The attribute quantitaprogrammata maps the field QuantitaProgrammata defined as int(11).<br>
     * Comment for field QuantitaProgrammata: Not specified.
     * @return int $quantitaprogrammata
     * @category Accessor of $quantitaprogrammata
     */
    public function getQuantitaprogrammata()
    {
        return $this->quantitaprogrammata;
    }

    /**
     * getQuantitarealizzata gets the class attribute quantitarealizzata value
     *
     * The attribute quantitarealizzata maps the field QuantitaRealizzata defined as int(11).<br>
     * Comment for field QuantitaRealizzata: Not specified.
     * @return int $quantitarealizzata
     * @category Accessor of $quantitarealizzata
     */
    public function getQuantitarealizzata()
    {
        return $this->quantitarealizzata;
    }

    /**
     * getErrorlog gets the class attribute errorlog value
     *
     * The attribute errorlog maps the field ErrorLog defined as text.<br>
     * Comment for field ErrorLog: Not specified.
     * @return string $errorlog
     * @category Accessor of $errorlog
     */
    public function getErrorlog()
    {
        return $this->errorlog;
    }

    /**
     * getEdificio gets the class attribute edificio value
     *
     * The attribute edificio maps the field Edificio defined as text.<br>
     * Comment for field Edificio: Not specified.
     * @return string $edificio
     * @category Accessor of $edificio
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * getReparto gets the class attribute reparto value
     *
     * The attribute reparto maps the field Reparto defined as text.<br>
     * Comment for field Reparto: Not specified.
     * @return string $reparto
     * @category Accessor of $reparto
     */
    public function getReparto()
    {
        return $this->reparto;
    }

    /**
     * getMacchinario gets the class attribute macchinario value
     *
     * The attribute macchinario maps the field Macchinario defined as text.<br>
     * Comment for field Macchinario: Not specified.
     * @return string $macchinario
     * @category Accessor of $macchinario
     */
    public function getMacchinario()
    {
        return $this->macchinario;
    }

    /**
     * getIdodl gets the class attribute idodl value
     *
     * The attribute idodl maps the field IDODL defined as int(11).<br>
     * Comment for field IDODL: Not specified.
     * @return int $idodl
     * @category Accessor of $idodl
     */
    public function getIdodl()
    {
        return $this->idodl;
    }

    /**
     * Gets DDL SQL code of the table task
     * @return string
     * @category Accessor
     */
    public function getDdl()
    {
        return base64_decode($this->ddl);
    }

    /**
    * Gets the name of the managed table
    * @return string
    * @category Accessor
    */
    public function getTableName()
    {
        return "task";
    }

    /**
     * The BeanTask constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table task having ID=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return BeanTask Object
     */
    public function __construct($id = null)
    {
        // $this->connect(DBHOST,DBUSER,DBPASSWORD,DBNAME,DBPORT);
        parent::__construct();
        if (!empty($id)) {
            $this->select($id);
        }
    }

    /**
     * The implicit destructor
     */
    public function __destruct()
    {
        $this->close();
    }

    /**
     * Explicit destructor. It calls the implicit destructor automatically.
     */
    public function close()
    {
        //unset($this);
    }

    /**
     * Fetchs a table row of task into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key ID value of table task which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        $sql =  "SELECT * FROM task WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->ID;
            @$this->orainizio = $rowObject->OraInizio;
            @$this->orafine = $rowObject->OraFine;
            @$this->operazione = $this->replaceAposBackSlash($rowObject->Operazione);
            @$this->stato = $this->replaceAposBackSlash($rowObject->Stato);
            @$this->quantitaprogrammata = (integer)$rowObject->QuantitaProgrammata;
            @$this->quantitarealizzata = (integer)$rowObject->QuantitaRealizzata;
            @$this->errorlog = $this->replaceAposBackSlash($rowObject->ErrorLog);
            @$this->edificio = $this->replaceAposBackSlash($rowObject->Edificio);
            @$this->reparto = $this->replaceAposBackSlash($rowObject->Reparto);
            @$this->macchinario = $this->replaceAposBackSlash($rowObject->Macchinario);
            @$this->idodl = (integer)$rowObject->IDODL;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table task
     * @param int $id the primary key ID value of table task which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM task WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of task
     *
     * All class attributes values defined for mapping all table fields are automatically used during inserting
     * @return mixed MySQL insert result
     * @category DML
     */
    public function insert()
    {
        if ($this->isPkAutoIncrement) {
            $this->id = "";
        }
        // $constants = get_defined_constants();
        $sql = <<< SQL
            INSERT INTO task
            (ID,OraInizio,OraFine,Operazione,Stato,QuantitaProgrammata,QuantitaRealizzata,ErrorLog,Edificio,Reparto,Macchinario,IDODL)
            VALUES({$this->parseValue($this->id)},
			{$this->parseValue($this->orainizio,'notNumber')},
			{$this->parseValue($this->orafine,'notNumber')},
			{$this->parseValue($this->operazione,'notNumber')},
			{$this->parseValue($this->stato,'notNumber')},
			{$this->parseValue($this->quantitaprogrammata)},
			{$this->parseValue($this->quantitarealizzata)},
			{$this->parseValue($this->errorlog,'notNumber')},
			{$this->parseValue($this->edificio,'notNumber')},
			{$this->parseValue($this->reparto,'notNumber')},
			{$this->parseValue($this->macchinario,'notNumber')},
			{$this->parseValue($this->idodl)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
            if ($this->isPkAutoIncrement) {
                $this->id = $this->insert_id;
            }
        }
        return $result;
    }

    /**
     * Updates a specific row from the table task with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key ID value of table task which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {

            $quantity = $this->quantitarealizzata + $this->quantitaaggiuntiva;

            if ($this->quantitaprogrammata >= $quantity) {
                $sql =
<<< SQL
                    UPDATE
                      task
                    SET 
				      Stato={$this->parseValue($this->stato,'notNumber')},
				      QuantitaRealizzata={$this->parseValue($quantity)},
				      ErrorLog={$this->parseValue($this->errorlog,'notNumber')}
                    WHERE
                      ID={$this->parseValue($id,'int')}
SQL;
                $this->resetLastSqlError();
                $result = $this->query($sql);
                if (!$result) {
                    $this->lastSqlError = $this->sqlstate . " - ". $this->error;
                } else {
                    $this->select($id);
                    $this->lastSql = $sql;
                    return $result;
                }
            } else {
                $this->lastSqlError = "Error";
            }
        } else {
            return false;
        }
    }

    /**
     * Facility for updating a row of task previously loaded.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating.
     * @category DML Helper
     * @return mixed MySQLi update result
     */
    public function updateCurrent()
    {
        if ($this->id != "") {
            return $this->update($this->id);
        } else {
            return false;
        }
    }

}
?>
