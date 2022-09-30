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
            $res = $this->conn->query("SHOW TABLES");
        } catch (Exception $e) {
            return false;
        }
        if (!$res) {
            return false;
        }

        while ($cRow = $res->fetch_assoc()) {
            $tableNames[] = $cRow["Tables_in_hotelprojekt"];
        }
        return $tableNames;
    }
}
