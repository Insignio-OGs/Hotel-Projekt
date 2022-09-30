<?php

require_once('UtilsClass.php');

class DBHandler {

    public $conn;

    public function __construct(){
        $this->loadDBConn();
    }

    /**
     * loads the DB connection
     * @return void
     */
    public function loadDBConn(){
        $utils = new UtilsClass();
        $conf = $utils->getFullConfig();
        $this->conn = mysqli_connect($conf['db_host'],$conf['db_user'],$conf['db_password'],$conf['db_name']);
    }

    /**
     * Returns all table names from a table as array
     * @param $tableName
     * @return array|false
     */
    function getColumnNames($tableName) {
        $res = mysqli_query($this->conn, "SHOW COLUMNS FROM " . $tableName);
        if(!$res) {
            return false;
        }
        while($cRow = mysqli_fetch_assoc($res)){
            $column_name[] = $cRow["Field"];
        }
        return $column_name;
    }


}
