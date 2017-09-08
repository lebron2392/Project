<?php
/**
 * Class BeanInteressato
 * Bean class for object oriented management of the MySQL table interessato
 *
 * Comment of the managed table interessato: Not specified.
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
 * @implements none
 * @filesource BeanInteressato.php
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


class BeanInteressato extends MySqlRecord 
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
     * Class attribute for mapping table field IDProdotto
     *
     * Comment for field IDProdotto: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $idprodotto
     */
    private $idprodotto;

    /**
     * Class attribute for mapping table field IDTask
     *
     * Comment for field IDTask: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $idtask
     */
    private $idtask;

    /**
     * Class attribute for storing the SQL DDL of table interessato
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBpbnRlcmVzc2F0b2AgKAogIGBJRFByb2RvdHRvYCBpbnQoMTEpIE5PVCBOVUxMLAogIGBJRFRhc2tgIGludCgxMSkgTk9UIE5VTEwsCiAgUFJJTUFSWSBLRVkgKGBJRFByb2RvdHRvYCxgSURUYXNrYCksCiAgS0VZIGBJRFByb2RvdHRvYCAoYElEUHJvZG90dG9gKSwKICBLRVkgYElEVGFza2AgKGBJRFRhc2tgKSwKICBDT05TVFJBSU5UIGBpbnRlcmVzc2F0b19pYmZrXzFgIEZPUkVJR04gS0VZIChgSURQcm9kb3R0b2ApIFJFRkVSRU5DRVMgYHByb2RvdHRvYCAoYElEYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREUsCiAgQ09OU1RSQUlOVCBgaW50ZXJlc3NhdG9faWJma18yYCBGT1JFSUdOIEtFWSAoYElEVGFza2ApIFJFRkVSRU5DRVMgYHRhc2tgIChgSURgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPWxhdGluMQ==";

    /**
     * setIdprodotto Sets the class attribute idprodotto with a given value
     *
     * The attribute idprodotto maps the field IDProdotto defined as int(11).<br>
     * Comment for field IDProdotto: Not specified.<br>
     * @param int $idprodotto
     * @category Modifier
     */
    public function setIdprodotto($idprodotto)
    {
        $this->idprodotto = (int)$idprodotto;
    }

    /**
     * setIdtask Sets the class attribute idtask with a given value
     *
     * The attribute idtask maps the field IDTask defined as int(11).<br>
     * Comment for field IDTask: Not specified.<br>
     * @param int $idtask
     * @category Modifier
     */
    public function setIdtask($idtask)
    {
        $this->idtask = (int)$idtask;
    }

    /**
     * getIdprodotto gets the class attribute idprodotto value
     *
     * The attribute idprodotto maps the field IDProdotto defined as int(11).<br>
     * Comment for field IDProdotto: Not specified.
     * @return int $idprodotto
     * @category Accessor of $idprodotto
     */
    public function getIdprodotto()
    {
        return $this->idprodotto;
    }

    /**
     * getIdtask gets the class attribute idtask value
     *
     * The attribute idtask maps the field IDTask defined as int(11).<br>
     * Comment for field IDTask: Not specified.
     * @return int $idtask
     * @category Accessor of $idtask
     */
    public function getIdtask()
    {
        return $this->idtask;
    }

    /**
     * Gets DDL SQL code of the table interessato
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
        return "interessato";
    }

    /**
    * The BeanInteressato constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $idprodotto
	* @param int $idtask
    * @return BeanInteressato Object
    */
    public function __construct($idprodotto=NULL,$idtask=NULL)
    {
        // $this->connect(DBHOST,DBUSER,DBPASSWORD,DBNAME,DBPORT);
        parent::__construct();
        if (!empty($idprodotto) && !empty($idtask)) {
            $this->select($idprodotto,$idtask);
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
    * Fetchs a table row of interessato into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $idprodotto
	* @param int $idtask
    * @return int affected selected row
    * @category DML
    */
    public function select($idprodotto,$idtask)
    {
        $sql =  "SELECT * FROM interessato WHERE IDProdotto={$this->parseValue($idprodotto,'int')} AND IDTask={$this->parseValue($idtask,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->idprodotto = (integer)$rowObject->IDProdotto;
            @$this->idtask = (integer)$rowObject->IDTask;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table interessato
	* @param int $idprodotto
	* @param int $idtask
    * @return int affected deleted row
    * @category DML
    */
    public function delete($idprodotto,$idtask)
    {
        $sql = "DELETE FROM interessato WHERE IDProdotto={$this->parseValue($idprodotto,'int')} AND IDTask={$this->parseValue($idtask,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of interessato
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO interessato
        (IDProdotto,IDTask)
        VALUES({$this->parseValue($this->idprodotto)},
			{$this->parseValue($this->idtask)})
SQL;
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        } else {
            $this->allowUpdate = true;
        }
        return $result;
    }

    /**
    * Updates a specific row from the table interessato with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $idprodotto
	* @param int $idtask
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($idprodotto,$idtask)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                interessato
                SET 
            WHERE
                IDProdotto={$this->parseValue($idprodotto,'int')} AND IDTask={$this->parseValue($idtask,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            }   else {
                $this->select($idprodotto,$idtask);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of interessato previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->idprodotto) && !empty($this->idtask)) {
           return $this->update($this->idprodotto,$this->idtask);
        } else {
            return false;
        }
    }

}
?>
