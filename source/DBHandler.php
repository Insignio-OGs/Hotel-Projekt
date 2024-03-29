<?php

require_once('UtilsClass.php');

class DBHandler
{

    private static $instance = null;

    public $conn;

    public static function getInstance()
    {
        if (self::$instance == null)
        {
            self::$instance = new DBHandler();
        }

        return self::$instance;
    }

    private function __construct() {
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
     * @param $type - roomtype to get, empty for all rooms
     */
    function getRooms($type = 'all'){

        $sql = 'SELECT * FROM getRooms';

        if($type !== 'all'){
            $sql = $sql." WHERE type = ".$type;
        }

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
     * returns all pricing info for a specified car
     * @param $roomId
     * @return array|false
     */
    function getPricingForCar($carId) {

        if(empty($carId)) {return false;}
        if(!is_int($carId)) {return false;}

        $sql = 'SELECT * FROM getPricingForCar WHERE id = ?;';
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->bind_param('i',$carId);
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }

        $result = $res->fetch_all();

        if(count($result) < 1) {return false;}

        return $result;

    }

    /**
     * returns all pricing info for a specified room
     * @param $roomId
     * @return array|false
     */
    function getPricingForRoom($roomId) {

        if(empty($roomId)) {return false;}
        if(!is_int($roomId)) {return false;}

        $sql = 'SELECT * FROM getPricingForRoom WHERE id = ?;';
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->bind_param('i',$roomId);
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }

        $result = $res->fetch_all();

        if(count($result) < 1) {return false;}

        return $result;

    }

    /**
     * Returns all Cars as array
     * @return array|false
     */
    function getCars($carType = null) {
        $array = $this->getTableArray('getcars');
        if ($carType === null)
            return $array;

        $return = array();
        foreach ($array as $item) {
            if ($item['Fahrzeugtyp'] === $carType)
                $return[] = $item;
        }
        return $return;
    }

     /**
     * Returns one Car as array
     * @return array|false
     */
    function getCar($id) {

        $sql = 'SELECT * FROM getcars WHERE ID = '.$id.';';

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
            return $array[0];
        } else {
            return false;
        }
    }


     /**
     * Returns one Car as array
     * @return array|false
     */
    function getRoom($id) {

        $sql = 'SELECT * FROM getRooms WHERE ID = '.$id.';';

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
            return $array[0];
        } else {
            return false;
        }
    }

    /**
     * Returns all rooms of specified type as array
     * that are available in the given time frame
     * @param String $start_date - start date for checked time frame
     * @param String $end_date - end date for checked time frame
     * @param String $type - roomtype to get, empty for all rooms
     * @return Bool true/false
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

    /**
     * Returns true if the room or car is available in the date range. Otherwise false
     * @param String $start_date - start date for checked time frame
     * @param String $end_date - end date for checked time frame
     * @param String $type - Car or Room
     * @param String $id - Car/Room ID
     * @return Bool true/false
    */
    function isRoomOrCarAvailableOnTheGivenDateAndForTheGivenId($start_date, $end_date, $type, $id){
        switch ($type) {
            case "car":
                $sql = 'SELECT * FROM car_reservations
                WHERE 
                (
                    (date_start >= ? AND date_start <= ?)
                   OR (date_end >= ? AND date_end <= ?)
                    OR (date_start < ? AND date_end > ?)
                ) AND car_id = ?'; break;

            case "room":
                $sql = 'SELECT * FROM room_reservations
                WHERE 
                (
                    (date_start >= ? AND date_start <= ?)
                   OR (date_end >= ? AND date_end <= ?)
                    OR (date_start < ? AND date_end > ?)
                ) AND room_id = ?'; break;
        }
        $stmt = $this->conn->prepare($sql);

        try {
            $stmt->bind_param('sssssss',$start_date,$end_date,$start_date,$end_date,$start_date,$end_date,$id);
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }

        if (!$res){
            return false;
        }
        $row = $res->fetch_all();
        if (count($row) > 0) {
            return false;
        } else {
            return true;
        }
    }

    /**
     * Creates Reservation in db.
     * @param String $start_date - start date for checked time frame
     * @param String $end_date - end date for checked time frame
     * @param String $type - car or room
     * @param String $id - id from car/room
     * @param String $addition - bool for insurance for car or all_inclusive for room
     * @param String $user_id - ID from User
     * @return Bool true/false
     */
    function createReservation($start_date, $end_date, $type, $id, $addition, $user_id) {
        switch ($type) {
            case 'car':
                $sql = 'INSERT INTO car_reservations (user_id, car_id, date_start, date_end, insurance) VALUES (?, ?, ?, ?, ?)'; break;
            case 'room': 
                $sql = 'INSERT INTO room_reservations (user_id, room_id, date_start, date_end, all_inclusive) VALUES (?, ?, ?, ?, ?)'; break;
        }

        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->bind_param('ssssi', $user_id, $id, $start_date, $end_date, $addition);
            $stmt->execute();
        } catch (Exception $e) {
            return false;
        }

        return true;
    }

    function getUserInfo($id = 0) {
        $sql = 'SELECT id, username, role_id, address_id, first_name, email, code, type, password FROM users
                WHERE id = ' . $id;

        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }
        $result = $res->fetch_all();
        return $result;
    }

    function setUserInfo($data, $id = 0) {
        $userinfo = $this->getUserInfo($id);
        
        if(password_verify($data['password'], $userinfo[0][9]) && password_verify($data['passwordcheck'], $userinfo[0][9])) {
            $password = PASSWORD_HASH($data["passwordnew"], PASSWORD_DEFAULT);
        } else {
            $password = $data['password'];
        }
        
        $sql = "UPDATE users SET username = '".$data['username']."', first_name = '".$data['first_name']."', last_name = '".$data['last_name']."', email = '".$data['email']."', password = '".$password."' WHERE id = $id";

        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            return false;
        }
    }

    function getCarReservations($user_id = 0) {    
        $sql = 'SELECT b.name, m.name, cr.date_start, cr.date_end, cr.insurance FROM car_reservations cr
                INNER JOIN cars c ON cr.car_id = c.id
                INNER JOIN models m ON c.model_id = m.id
                INNER JOIN brands b ON m.brand_id = b.id
                WHERE cr.user_id = '.$user_id;
    
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }
        $result = $res->fetch_all();
        return $result;
    }

    function getRoomReservations($user_id = 0) {
        $sql = 'SELECT rt.name, r.size, rr.date_start, rr.date_end, rr.all_inclusive FROM room_reservations rr
                INNER JOIN rooms r ON rr.room_id = r.id
                INNER JOIN room_types rt ON r.room_type_id = rt.id
                WHERE rr.user_id = '.$user_id;
    
        $stmt = $this->conn->prepare($sql);
        try {
            $stmt->execute();
            $res = $stmt->get_result();
        } catch (Exception $e) {
            return false;
        }
        $result = $res->fetch_all();
        return $result;
    }
}
