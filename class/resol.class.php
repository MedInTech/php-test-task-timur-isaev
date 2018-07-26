<?php
//require_once "../core/database.class.php";

class ClassResol {
    public $resol;
    
    public function __construct($url) {
        $db_connect = new DataBase;
        $strSQL = "SELECT url_long FROM URL WHERE url_short = '$url'" ;
        $result = $db_connect->query($strSQL);
        $this->resol = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->resol = 1;
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $row["url_long"]);
        }
    }  
}
?>