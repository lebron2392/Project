<?php
/**
 * Class BeanOperationType
 * Bean class for object oriented management of the MySQL table operation_type
 *
 * Comment of the managed table operation_type: Not specified.
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
 * @filesource BeanOperationType.php
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


class BeanOperationType extends MySqlRecord 
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
     * Class attribute for mapping table field In
     *
     * Comment for field In: Not specified.<br>
     * Field information:
     *  - Data type: tinyint(1)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $in
     */
    private $in;

    /**
     * Class attribute for mapping table field Out
     *
     * Comment for field Out: Not specified.<br>
     * Field information:
     *  - Data type: tinyint(1)
     *  - Null : NO
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var int $out
     */
    private $out;

    /**
     * Class attribute for storing the SQL DDL of table operation_type
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvcGVyYXRpb25fdHlwZWAgKAogIGBJbmAgdGlueWludCgxKSBOT1QgTlVMTCwKICBgT3V0YCB0aW55aW50KDEpIE5PVCBOVUxMCikgRU5HSU5FPUlubm9EQiBERUZBVUxUIENIQVJTRVQ9bGF0aW4x";

    /**
     * setIn Sets the class attribute in with a given value
     *
     * The attribute in maps the field In defined as tinyint(1).<br>
     * Comment for field In: Not specified.<br>
     * @param int $in
     * @category Modifier
     */
    public function setIn($in)
    {
        $this->in = (int)$in;
    }

    /**
     * setOut Sets the class attribute out with a given value
     *
     * The attribute out maps the field Out defined as tinyint(1).<br>
     * Comment for field Out: Not specified.<br>
     * @param int $out
     * @category Modifier
     */
    public function setOut($out)
    {
        $this->out = (int)$out;
    }

    /**
     * getIn gets the class attribute in value
     *
     * The attribute in maps the field In defined as tinyint(1).<br>
     * Comment for field In: Not specified.
     * @return int $in
     * @category Accessor of $in
     */
    public function getIn()
    {
        return $this->in;
    }

    /**
     * getOut gets the class attribute out value
     *
     * The attribute out maps the field Out defined as tinyint(1).<br>
     * Comment for field Out: Not specified.
     * @return int $out
     * @category Accessor of $out
     */
    public function getOut()
    {
        return $this->out;
    }

    /**
     * Gets DDL SQL code of the table operation_type
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
        return "operation_type";
    }

    /**
    * The BeanOperationType constructor
    *
    * It creates and initializes an object in two way:
    *  - with null (not fetched) data if none ${ClassPkAttributeName} is given.
    *  - with a fetched data row from the table {TableName} having {TablePkName}=${ClassPkAttributeName}

    * @return BeanOperationType Object
    */
    public function __construct()
    {
        // $this->connect(DBHOST,DBUSER,DBPASSWORD,DBNAME,DBPORT);
        parent::__construct();
        if (true) {
            $this->select();
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
    * Fetchs a table row of operation_type into the object.
    *
    * Fetched table fields values are assigned to class attributes and they can be managed by using
    * the accessors/modifiers methods of the class.

    * @return int affected selected row
    * @category DML
    */
    public function select()
    {
        $sql =  "SELECT * FROM operation_type WHERE ";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->in = (integer)$rowObject->In;
            @$this->out = (integer)$rowObject->Out;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
    return $this->affected_rows;
    }

    /**
    * Deletes a specific row from the table operation_type

    * @return int affected deleted row
    * @category DML
    */
    public function delete()
    {
        $sql = "DELETE FROM operation_type WHERE ";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
    * Insert the current object into a new table row of operation_type
    *
    * All class attributes values defined for mapping all table fields are automatically used during inserting
    * @return mixed MySQL insert result
    * @category DML
    */
    public function insert()
    {
        // $constants = get_defined_constants();
        $sql = <<< SQL
        INSERT INTO operation_type
        (In,Out)
        VALUES({$this->parseValue($this->in)},
			{$this->parseValue($this->out)})
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
    * Updates a specific row from the table operation_type with the values of the current object.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
    * Null values are used for all attributes not previously setted.

    * @return mixed MySQL update result
    * @category DML
    */
    public function update()
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                operation_type
                SET 
				In={$this->parseValue($this->in)},
				Out={$this->parseValue($this->out)}
            WHERE
                
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            if (!$result) {
                $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            }   else {
                $this->select();
                $this->lastSql = $sql;
                return $result;
            }
        } else {
            return false;
        }
    }

    /**
    * Facility for updating a row of operation_type previously loaded.
    *
    * All class attribute values defined for mapping all table fields are automatically used during updating.
    * @category DML Helper
    * @return mixed MySQLi update result
    */
    public function updateCurrent()
    {
        if (true) {
           return $this->update();
        } else {
            return false;
        }
    }

}
?>
