<?php
/**
 * Class BeanOperaio
 * Bean class for object oriented management of the MySQL table operaio
 *
 * Comment of the managed table operaio: Not specified.
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
 * @filesource BeanOperaio.php
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

class BeanOperaio extends MySqlRecord implements Bean
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
     * Class attribute for mapping the primary key ID of table operaio
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
     * Class attribute for mapping table field Nome
     *
     * Comment for field Nome: Not specified.<br>
     * Field information:
     *  - Data type: varchar(20)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $nome
     */
    private $nome;

    /**
     * Class attribute for mapping table field Cognome
     *
     * Comment for field Cognome: Not specified.<br>
     * Field information:
     *  - Data type: varchar(20)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $cognome
     */
    private $cognome;

    /**
     * Class attribute for mapping table field Ruolo
     *
     * Comment for field Ruolo: Not specified.<br>
     * Field information:
     *  - Data type: varchar(20)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $ruolo
     */
    private $ruolo;

    /**
     * Class attribute for mapping table field DataAssunzione
     *
     * Comment for field DataAssunzione: Not specified.<br>
     * Field information:
     *  - Data type: string|date
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $dataassunzione
     */
    private $dataassunzione;

    /**
     * Class attribute for storing the SQL DDL of table operaio
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvcGVyYWlvYCAoCiAgYElEYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBOb21lYCB2YXJjaGFyKDIwKSBOT1QgTlVMTCwKICBgQ29nbm9tZWAgdmFyY2hhcigyMCkgTk9UIE5VTEwsCiAgYFJ1b2xvYCB2YXJjaGFyKDIwKSBOT1QgTlVMTCwKICBgRGF0YUFzc3VuemlvbmVgIGRhdGUgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBJRGApCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9bGF0aW4x";

    /**
     * setId Sets the class attribute id with a given value
     *
     * The attribute id maps the field ID defined as int(11).<br>
     * Comment for field ID: Not specified.<br>
     * @param int $id
     * @category Modifier
     */
    public function setId($id)
    {
        $this->id = (int)$id;
    }

    /**
     * setNome Sets the class attribute nome with a given value
     *
     * The attribute nome maps the field Nome defined as varchar(20).<br>
     * Comment for field Nome: Not specified.<br>
     * @param string $nome
     * @category Modifier
     */
    public function setNome($nome)
    {
        $this->nome = (string)$nome;
    }

    /**
     * setCognome Sets the class attribute cognome with a given value
     *
     * The attribute cognome maps the field Cognome defined as varchar(20).<br>
     * Comment for field Cognome: Not specified.<br>
     * @param string $cognome
     * @category Modifier
     */
    public function setCognome($cognome)
    {
        $this->cognome = (string)$cognome;
    }

    /**
     * setRuolo Sets the class attribute ruolo with a given value
     *
     * The attribute ruolo maps the field Ruolo defined as varchar(20).<br>
     * Comment for field Ruolo: Not specified.<br>
     * @param string $ruolo
     * @category Modifier
     */
    public function setRuolo($ruolo)
    {
        $this->ruolo = (string)$ruolo;
    }

    /**
     * setDataassunzione Sets the class attribute dataassunzione with a given value
     *
     * The attribute dataassunzione maps the field DataAssunzione defined as string|date.<br>
     * Comment for field DataAssunzione: Not specified.<br>
     * @param string $dataassunzione
     * @category Modifier
     */
    public function setDataassunzione($dataassunzione)
    {
        $this->dataassunzione = (string)$dataassunzione;
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
     * getNome gets the class attribute nome value
     *
     * The attribute nome maps the field Nome defined as varchar(20).<br>
     * Comment for field Nome: Not specified.
     * @return string $nome
     * @category Accessor of $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * getCognome gets the class attribute cognome value
     *
     * The attribute cognome maps the field Cognome defined as varchar(20).<br>
     * Comment for field Cognome: Not specified.
     * @return string $cognome
     * @category Accessor of $cognome
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * getRuolo gets the class attribute ruolo value
     *
     * The attribute ruolo maps the field Ruolo defined as varchar(20).<br>
     * Comment for field Ruolo: Not specified.
     * @return string $ruolo
     * @category Accessor of $ruolo
     */
    public function getRuolo()
    {
        return $this->ruolo;
    }

    /**
     * getDataassunzione gets the class attribute dataassunzione value
     *
     * The attribute dataassunzione maps the field DataAssunzione defined as string|date.<br>
     * Comment for field DataAssunzione: Not specified.
     * @return string $dataassunzione
     * @category Accessor of $dataassunzione
     */
    public function getDataassunzione()
    {
        return $this->dataassunzione;
    }

    /**
     * Gets DDL SQL code of the table operaio
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
        return "operaio";
    }

    /**
     * The BeanOperaio constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table operaio having ID=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return BeanOperaio Object
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
        unset($this);
    }

    /**
     * Fetchs a table row of operaio into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key ID value of table operaio which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        $sql =  "SELECT * FROM operaio WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->ID;
            @$this->nome = $this->replaceAposBackSlash($rowObject->Nome);
            @$this->cognome = $this->replaceAposBackSlash($rowObject->Cognome);
            @$this->ruolo = $this->replaceAposBackSlash($rowObject->Ruolo);
            @$this->dataassunzione = empty($rowObject->DataAssunzione) ? null : date(FETCHED_DATE_FORMAT,strtotime($rowObject->DataAssunzione));
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table operaio
     * @param int $id the primary key ID value of table operaio which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM operaio WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of operaio
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
            INSERT INTO operaio
            (ID,Nome,Cognome,Ruolo,DataAssunzione)
            VALUES({$this->parseValue($this->id)},
			{$this->parseValue($this->nome,'notNumber')},
			{$this->parseValue($this->cognome,'notNumber')},
			{$this->parseValue($this->ruolo,'notNumber')},
			{$this->parseValue($this->dataassunzione,'date')})
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
     * Updates a specific row from the table operaio with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key ID value of table operaio which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                operaio
            SET 
				Nome={$this->parseValue($this->nome,'notNumber')},
				Cognome={$this->parseValue($this->cognome,'notNumber')},
				Ruolo={$this->parseValue($this->ruolo,'notNumber')},
				DataAssunzione={$this->parseValue($this->dataassunzione,'date')}
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
            return false;
        }
    }

    /**
     * Facility for updating a row of operaio previously loaded.
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
