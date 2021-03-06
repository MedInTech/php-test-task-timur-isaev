<?php

class ClassURL
{

  public $id;
  public $data_insert;
  public $url_long;
  public $url_short;
  /** @var DataBase */
  private $db_connect;

  public function __construct(DataBase $db_connect, $typeCreate, $arrayResult, $id = "")
  {
    $this->db_connect = $db_connect;

    if ($typeCreate == 1) {
      if ($arrayResult != NULL) {
        $this->id          = $arrayResult['id'];
        $this->data_insert = $arrayResult['data_insert'];
        $this->url_long    = $arrayResult['url_long'];
        $this->url_short   = $arrayResult['url_short'];
      }
    } else if ($typeCreate == 2) {
      if (isset($_POST['data_insert'])) $this->data_insert = $_POST['data_insert'];
      if (isset($_POST['url_long'])) $this->url_long = $_POST['url_long'];
      if (isset($_POST['url_short'])) $this->url_short = $_POST['url_short'];
    } else if ($typeCreate == 3) {
      $strSQL            = "SELECT * FROM URL WHERE id = $id";
      $result            = $db_connect->query($strSQL);
      $rowDocum          = $result->fetch_assoc();
      $this->id          = $rowDocum['id'];
      $this->data_insert = $rowDocum['data_insert'];
      $this->url_long    = $rowDocum['url_long'];
      $this->url_short   = $rowDocum['url_short'];
    }
  }

  public function create()
  {
    $url        = new ClassGEN;
    print_r($url);
    echo '1';
    $query = "INSERT INTO URL SET 
                data_insert = '" . date('Y-m-d') . "', 
                url_long='" . $this->url_long . "', 
                url_short='" . $url->gen() . "'";
    echo '2';
    echo $query;
    $this->db_connect->query($query);
    $this->id = $this->db_connect->lastID(ClassConst::tableURL);
  }
}

?>