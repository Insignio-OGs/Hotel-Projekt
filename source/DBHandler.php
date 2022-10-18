<?php

require_once('UtilsClass.php');

class DBHandler
{

    public $conn;

    public function __construct() {
        $this->loadDBConn();
    }

    /**
     * loads the DB connection
     * @return void
     */
    public function loadDBConn() {
        $utils = new UtilsClass();
        $conf = $utils->getFullConfig();
        $this->conn = new mysqli($conf['db_host'], $conf['db_user'], $conf['db_password'], $conf['db_name']);
    }

    /**
     * returns an array for the row associated with the given ID
     * or false if it does not exist
     * @param $table
     * @param $id
     * @return array|false
     */
    public function getRow($table, $id) {
        $tableNames = $this->getTableNames();
        if (!in_array($table, $tableNames)) {
            return false;
        }
        $sql = 'SELECT * FROM '.$table.' WHERE id = ?;';
        $stmt = $this->conn->prepare($sql);

        try {
            $stmt->bind_param('i',$id);
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }

        $row = $res->fetch_assoc();

        if ($row) {
            return $row;
        } else {
            return false;
        }
    }

    /**
     * returns array of all rows in given table
     * or false if no data is found
     * @param $table
     * @return array|false
     */
    public function getTableArray($table) {
        $tableNames = $this->getTableNames();
        if (!in_array($table, $tableNames)) {
            return false;
        }
        $sql = 'SELECT * FROM '.$table.';';

        try {
            $res = $this->conn->query($sql);
        } catch (Exception $e) {
            return false;
        }

        if (!$res){
            return false;
        }

        $array = array();
        while ($row = $res->fetch_assoc()) {
            $array[] = $row;
        }

        if (count($array) > 0) {
            return $array;
        } else {
            return false;
        }
    }

    /**
     * Returns all column names from a table as array
     * @param $tableName
     * @return array|false
     */
    function getColumnNames($tableName) {
        $tableNames = $this->getTableNames();
        if (!in_array($tableName, $tableNames)) {
            return false;
        }
        try {
            $res = $this->conn->query("SHOW COLUMNS FROM " . $tableName);
        } catch (Exception $e) {
            return false;
        }
        if (!$res) {
            return false;
        }
        $column_name = array();
        while ($cRow = $res->fetch_assoc()) {
            $column_name[] = $cRow["Field"];
        }
        return $column_name;
    }



    /**
     * get Primarykey Columnname
     * @param $tableName
     * @return false|mixed
     */
    function getPrimaryKey($tableName) {
        $tableNames = $this->getTableNames();
        if(!in_array($tableName, $tableNames)) {
            return false;
        }
        try {
            $res = $this->conn->query("SHOW INDEX FROM " . $tableName . " WHERE Key_name = 'PRIMARY'");
        } catch (Exception $e) {
            return false;
        }

        if (!$res) {
            return false;
        }

        $cRow = $res->fetch_assoc();
        return $cRow["Column_name"];
    }

    /**
     * Returns all table names as array
     * @return array|false
     */
    function getTableNames() {
        try {
            $res = $this->conn->query("SHOW TABLES");
        } catch (Exception $e) {
            return false;
        }
        if (!$res) {
            return false;
        }

        $tableNames = array();
        while ($cRow = $res->fetch_assoc()) {
            $tableNames[] = $cRow["Tables_in_hotelprojekt"];
        }
        return $tableNames;
    }

    /**
     * Returns all rooms of specified type as array
     * that are available in the given time frame
     * @param $start_date - start date for checked time frame
     * @param $end_date - end date for checked time frame
     * @param $type - roomtype to get, empty for all rooms
    */
    function getAvailableRooms($start_date, $end_date, $type = 'all'){

        $sql = 'SELECT * FROM getrooms
                RIGHT JOIN room_reservations rr on getrooms.id = rr.room_id
                WHERE (? < rr.date_start
                OR   ? > rr.date_end)';

        if($type !== 'all'){
            $sql = $sql." AND type = ?";
        }

        $stmt = $this->conn->prepare($sql);

        try {
            if($type !== 'all'){
                $stmt->bind_param('sss',$end_date,$start_date,$type);
            }else{
                $stmt->bind_param('ss',$end_date,$start_date);
            }
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }

        if (!$res){
            return false;
        }

        $array = array();
        while ($row = $res->fetch_assoc()) {
            $array[] = $row;
        }

        if (count($array) > 0) {
            return $array;
        } else {
            return false;
        }
    }
}
