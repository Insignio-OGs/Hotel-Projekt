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
     * Returns all table names as array
     * @return array|false
     */
    function getTableNames() {
        try {
            $res = mysqli_query($this->conn, "SHOW TABLES");
        } catch (Exception $e) {
            return false;
        }
        if (!$res) {
            return false;
        }

        while ($cRow = mysqli_fetch_assoc($res)) {
            $tableNames[] = $cRow["Tables_in_hotelprojekt"];
        }
        return $tableNames;
    }
}
