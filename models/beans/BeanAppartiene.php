<?php
/**
 * Class BeanAppartiene
 * Bean class for object oriented management of the MySQL table appartiene
 *
 * Comment of the managed table appartiene: Not specified.
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
 * @filesource BeanAppartiene.php
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


class BeanAppartiene extends MySqlRecord 
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
     * Class attribute for mapping table field IDCommessa
     *
     * Comment for field IDCommessa: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: PRI
     *  - Default: 
     *  - Extra:  
     * @var int $idcommessa
     */
    private $idcommessa;

    /**
     * Class attribute for storing the SQL DDL of table appartiene
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBhcHBhcnRpZW5lYCAoCiAgYElEVGFza2AgaW50KDExKSBOT1QgTlVMTCwKICBgSURDb21tZXNzYWAgaW50KDExKSBOT1QgTlVMTCwKICBQUklNQVJZIEtFWSAoYElEVGFza2AsYElEQ29tbWVzc2FgKSwKICBLRVkgYElEVGFza2AgKGBJRFRhc2tgLGBJRENvbW1lc3NhYCksCiAgS0VZIGBJRENvbW1lc3NhYCAoYElEQ29tbWVzc2FgKSwKICBDT05TVFJBSU5UIGBhcHBhcnRpZW5lX2liZmtfMWAgRk9SRUlHTiBLRVkgKGBJRFRhc2tgKSBSRUZFUkVOQ0VTIGB0YXNrYCAoYElEYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREUsCiAgQ09OU1RSQUlOVCBgYXBwYXJ0aWVuZV9pYmZrXzJgIEZPUkVJR04gS0VZIChgSURDb21tZXNzYWApIFJFRkVSRU5DRVMgYGNvbW1lc3NhYCAoYElEYCkgT04gREVMRVRFIENBU0NBREUgT04gVVBEQVRFIENBU0NBREUKKSBFTkdJTkU9SW5ub0RCIERFRkFVTFQgQ0hBUlNFVD1sYXRpbjE=";

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
     * setIdcommessa Sets the class attribute idcommessa with a given value
     *
     * The attribute idcommessa maps the field IDCommessa defined as int(11).<br>
     * Comment for field IDCommessa: Not specified.<br>
     * @param int $idcommessa
     * @category Modifier
     */
    public function setIdcommessa($idcommessa)
    {
        $this->idcommessa = (int)$idcommessa;
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
     * getIdcommessa gets the class attribute idcommessa value
     *
     * The attribute idcommessa maps the field IDCommessa defined as int(11).<br>
     * Comment for field IDCommessa: Not specified.
     * @return int $idcommessa
     * @category Accessor of $idcommessa
     */
    public function getIdcommessa()
    {
        return $this->idcommessa;
    }

    /**
     * Gets DDL SQL code of the table appartiene
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
        return "appartiene";
    }

    /**
    * The BeanAppartiene constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}
	* @param int $idtask
	* @param int $idcommessa
    * @return BeanAppartiene Object
    */
    public function __construct($idtask=NULL,$idcommessa=NULL)
    {
        // $this->connect(DBHOST,DBUSER,DBPASSWORD,DBNAME,DBPORT);
        parent::__construct();
        if (!empty($idtask) && !empty($idcommessa)) {
            $this->select($idtask,$idcommessa);
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
    * Fetchs a table row of appartiene into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.
	* @param int $idtask
	* @param int $idcommessa
    * @return int affected selected row
    * @category DML
    */
    public function select($idtask,$idcommessa)
    {
        $sql =  "SELECT * FROM appartiene WHERE IDTask={$this->parseValue($idtask,'int')} AND IDCommessa={$this->parseValue($idcommessa,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->idtask = (integer)$rowObject->IDTask;
            @$this->idcommessa = (integer)$rowObject->IDCommessa;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table appartiene
	* @param int $idtask
	* @param int $idcommessa
    * @return int affected deleted row
    * @category DML
    */
    public function delete($idtask,$idcommessa)
    {
        $sql = "DELETE FROM appartiene WHERE IDTask={$this->parseValue($idtask,'int')} AND IDCommessa={$this->parseValue($idcommessa,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of appartiene
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO appartiene
        (IDTask,IDCommessa)
        VALUES({$this->parseValue($this->idtask)},
			{$this->parseValue($this->idcommessa)})
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
    * Updates a specific row from the table appartiene with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.
	* @param int $idtask
	* @param int $idcommessa
    * @return mixed MySQL update result
    * @category DML
    */
    public function update($idtask,$idcommessa)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                appartiene
                SET 
            WHERE
                IDTask={$this->parseValue($idtask,'int')} AND IDCommessa={$this->parseValue($idcommessa,'int')}
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            }   else {
                $this->select($idtask,$idcommessa);
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of appartiene previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (!empty($this->idtask) && !empty($this->idcommessa)) {
           return $this->update($this->idtask,$this->idcommessa);
        } else {
            return false;
        }
    }

}
?>
