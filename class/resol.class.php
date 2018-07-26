<?php
//require_once "../core/database.class.php";

class ClassResol {
    public $resol;
  /** @var DataBase */
  private $db_connect;

  public function __construct(DataBase $db_connect, $url) {
        $strSQL = "SELECT url_long FROM URL WHERE url_short = '$url'" ;
        $result = $db_connect->query($strSQL);
        $this->resol = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $this->resol = 1;
            header('HTTP/1.1 301 Moved Permanently');
            header('Location: ' . $row["url_long"]);
        }
    $this->db_connect = $db_connect;
  }
}
?>