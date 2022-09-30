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
        //TODO check table name with getTableNames()
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
        //TODO check table name with getTableNames()
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
        try {
            //TODO: Testen sobald die getTableNames funktion existiert
            $tableNames = $this->getTableNames();
            if (!in_array($tableName, $tableNames)) {
                return false;
            }
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


}
