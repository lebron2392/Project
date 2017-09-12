<?php
/**
 * Class BeanOdl
 * Bean class for object oriented management of the MySQL table odl
 *
 * Comment of the managed table odl: Not specified.
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
 * @filesource BeanOdl.php
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

class BeanOdl extends MySqlRecord implements Bean
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
     * Class attribute for mapping the primary key ID of table odl
     *
     * Comment for field ID: Not specified<br>
     * @var int $id
     */
    private $id;

    /**
     * A class attribute for evaluating if the table has an autoincrement primary key
     * @var bool $isPkAutoIncrement
     */
    private $isPkAutoIncrement = true;

    /**
     * Class attribute for mapping table field Giorno
     *
     * Comment for field Giorno: Not specified.<br>
     * Field information:
     *  - Data type: varchar(45)
     *  - Null : YES
     *  - DB Index: 
     *  - Default: 
     *  - Extra:  
     * @var string $giorno
     */
    private $giorno;

    /**
     * Class attribute for mapping table field IDOperaio
     *
     * Comment for field IDOperaio: Not specified.<br>
     * Field information:
     *  - Data type: int(11)
     *  - Null : NO
     *  - DB Index: MUL
     *  - Default: 
     *  - Extra:  
     * @var int $idoperaio
     */
    private $idoperaio;

    /**
     * Class attribute for storing the SQL DDL of table odl
     * @var string base64 encoded $ddl
     */
    private $ddl = "Q1JFQVRFIFRBQkxFIGBvZGxgICgKICBgSURgIGludCgxMSkgTk9UIE5VTEwsCiAgYEdpb3Jub2AgdmFyY2hhcig0NSkgQ0hBUkFDVEVSIFNFVCB1dGY4IERFRkFVTFQgTlVMTCwKICBgSURPcGVyYWlvYCBpbnQoMTEpIE5PVCBOVUxMLAogIFBSSU1BUlkgS0VZIChgSURgKSwKICBLRVkgYElET3BlcmFpb2AgKGBJRE9wZXJhaW9gKSwKICBDT05TVFJBSU5UIGBvZGxfaWJma18xYCBGT1JFSUdOIEtFWSAoYElET3BlcmFpb2ApIFJFRkVSRU5DRVMgYG9wZXJhaW9gIChgSURgKSBPTiBERUxFVEUgQ0FTQ0FERSBPTiBVUERBVEUgQ0FTQ0FERQopIEVOR0lORT1Jbm5vREIgREVGQVVMVCBDSEFSU0VUPWxhdGluMQ==";

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
     * setGiorno Sets the class attribute giorno with a given value
     *
     * The attribute giorno maps the field Giorno defined as varchar(45).<br>
     * Comment for field Giorno: Not specified.<br>
     * @param string $giorno
     * @category Modifier
     */
    public function setGiorno($giorno)
    {
        $this->giorno = (string)$giorno;
    }

    /**
     * setIdoperaio Sets the class attribute idoperaio with a given value
     *
     * The attribute idoperaio maps the field IDOperaio defined as int(11).<br>
     * Comment for field IDOperaio: Not specified.<br>
     * @param int $idoperaio
     * @category Modifier
     */
    public function setIdoperaio($idoperaio)
    {
        $this->idoperaio = (int)$idoperaio;
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
     * getGiorno gets the class attribute giorno value
     *
     * The attribute giorno maps the field Giorno defined as varchar(45).<br>
     * Comment for field Giorno: Not specified.
     * @return string $giorno
     * @category Accessor of $giorno
     */
    public function getGiorno()
    {
        return $this->giorno;
    }

    /**
     * getIdoperaio gets the class attribute idoperaio value
     *
     * The attribute idoperaio maps the field IDOperaio defined as int(11).<br>
     * Comment for field IDOperaio: Not specified.
     * @return int $idoperaio
     * @category Accessor of $idoperaio
     */
    public function getIdoperaio()
    {
        return $this->idoperaio;
    }

    /**
     * Gets DDL SQL code of the table odl
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
        return "odl";
    }

    /**
     * The BeanOdl constructor
     *
     * It creates and initializes an object in two way:
     *  - with null (not fetched) data if none $id is given.
     *  - with a fetched data row from the table odl having ID=$id
     * @param int $id. If omitted an empty (not fetched) instance is created.
     * @return BeanOdl Object
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
     * Fetchs a table row of odl into the object.
     *
     * Fetched table fields values are assigned to class attributes and they can be managed by using
     * the accessors/modifiers methods of the class.
     * @param int $id the primary key ID value of table odl which identifies the row to select.
     * @return int affected selected row
     * @category DML
     */
    public function select($id)
    {
        $sql =  "SELECT * FROM odl WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result =  $this->query($sql);
        $this->resultSet=$result;
        $this->lastSql = $sql;
        if ($result){
            $rowObject = $result->fetch_object();
            @$this->id = (integer)$rowObject->ID;
            @$this->giorno = $this->replaceAposBackSlash($rowObject->Giorno);
            @$this->idoperaio = (integer)$rowObject->IDOperaio;
            $this->allowUpdate = true;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Deletes a specific row from the table odl
     * @param int $id the primary key ID value of table odl which identifies the row to delete.
     * @return int affected deleted row
     * @category DML
     */
    public function delete($id)
    {
        $sql = "DELETE FROM odl WHERE ID={$this->parseValue($id,'int')}";
        $this->resetLastSqlError();
        $result = $this->query($sql);
        $this->lastSql = $sql;
        if (!$result) {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
        }
        return $this->affected_rows;
    }

    /**
     * Insert the current object into a new table row of odl
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


        $giorno = $this->parseValue($this->giorno, 'notNumber');
        $sql1 =
<<< SQL
            SELECT *
            FROM odl
            WHERE IDOperaio=$this->idoperaio AND Giorno=$giorno
SQL;
        $this->resetLastSqlError();
        $result1 = $this->query($sql1);
        $this->lastSql = $sql1;

        if ($result1->num_rows == '0') {
            $sql =
<<< SQL
            INSERT INTO odl
              (Giorno, IDOperaio)
            VALUES
              ({$this->parseValue($this->giorno, 'notNumber')},
			   {$this->parseValue($this->idoperaio)})
SQL;
            $this->resetLastSqlError();
            $result = $this->query($sql);
            $this->lastSql = $sql;

            if (!$result) {
               // $this->lastSqlError = $this->sqlstate . " - ". $this->error;
            } else {
                $this->allowUpdate = true;

                if ($this->isPkAutoIncrement) {
                    $this->id = $this->insert_id;
                }

            }
            return $result;
        } else {
            $this->lastSqlError = $this->sqlstate . " - ". $this->error;
          //  return $result1;
        }
    }

    /**
     * Updates a specific row from the table odl with the values of the current object.
     *
     * All class attribute values defined for mapping all table fields are automatically used during updating of selected row.<br>
     * Null values are used for all attributes not previously setted.
     * @param int $id the primary key ID value of table odl which identifies the row to update.
     * @return mixed MySQL update result
     * @category DML
     */
    public function update($id)
    {
        // $constants = get_defined_constants();
        if ($this->allowUpdate) {
            $sql = <<< SQL
            UPDATE
                odl
            SET 
				Giorno={$this->parseValue($this->giorno,'notNumber')},
				IDOperaio={$this->parseValue($this->idoperaio)}
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
     * Facility for updating a row of odl previously loaded.
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
