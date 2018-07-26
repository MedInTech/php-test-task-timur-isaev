<?php

class Config {
    var $HOST = "localhost";
    var $USER = "fr12436_user_url";
    var $PASS = "q1w2e3zaxscd";
    var $BAZA = "fr12436_url";
}

class DataBase extends Config {
	
    private static $mysqli;
   	
    public function __construct() { 
        $this->Connection();
   }

    private function Connection() {
        self::$mysqli = new mysqli($this->HOST, $this->USER, $this->PASS, $this->BAZA);
        if (self::$mysqli->connect_errno) {
                die('Connect Error (' . self::$mysqli->connect_errno . ') ' . self::$mysqli->connect_error);
        }
			
        self::$mysqli->query("SET NAMES 'utf8'");
    }

    public function query($query) {
        if ($result = self::$mysqli->query($query)) {
                return $result;
        }
        else die("Ошибка выполнения запроса! ($query) - ".self::$mysqli->error);
    }

    public function checkTable($table) {
        $returnCheck = false;

        $query = "CHECK TABLE $table";	

        if ($result = self::$mysqli->query($query)) $status  = $result->fetch_assoc();

        if (($status['Msg_type'] != 'Error') && ($status['Msg_type'] != 'error')) $returnCheck = true; 

        return $returnCheck;
    }

    public function lastID($table) {

        $result_fuction = 0;

        $strSQL = "SELECT id FROM $table ORDER BY id DESC limit 1";

        if ($result = self::$mysqli->query($strSQL)) {
            $row  = $result->fetch_assoc();
            $result_fuction = $row['id'];
        }

        return $result_fuction;
    }

}

?>