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
     * get Primarykey Columnname
     * @param $tableName
     * @return false|mixed
     */
    function getPrimaryKey($tableName) {
        try {
            //TODO: Testen sobald die getTableNames funktion existeirt
            $tableNames = $this->getTableNames();
            if(!in_array($tableName, $tableNames)) {
                return false;
            }
            $res = $this->conn->query($this->conn, "SHOW INDEX FROM " . $tableName . " WHERE Key_name = 'PRIMARY'");
        } catch (Exception $e) {
            return false;
        }

        if (!$res) {
            return false;
        }

        $cRow = $res->fetch_assoc();
        return $cRow["Column_name"];
    }
}
