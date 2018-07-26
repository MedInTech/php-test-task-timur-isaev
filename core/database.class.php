<?php

class Config
{
  public $host;
  public $port;
  public $user;
  public $pass;
  public $db;

  public function __construct($data)
  {
    $this->host = $data['host'] ?? 'localhost';
    $this->port = $data['port'] ?? 3306;
    $this->user = $data['user'] ?? null;
    $this->pass = $data['pass'] ?? null;
    $this->db   = $data['db'] ?? null;
  }
}

class DataBase
{
  /** @var mysqli */
  private static $mysqli;
  /** @var Config */
  private $cfg;

  public function __construct(Config $cfg)
  {
    $this->cfg = $cfg;
    $this->Connection();
  }

  private function Connection()
  {
    self::$mysqli = new mysqli(
      $this->cfg->host,
      $this->cfg->user,
      $this->cfg->pass,
      $this->cfg->db,
      $this->cfg->port);
    if (self::$mysqli->connect_errno) {
      die('Connect Error (' . self::$mysqli->connect_errno . ') ' . self::$mysqli->connect_error);
    }

    self::$mysqli->query("SET NAMES 'utf8'");
  }

  public function query($query)
  {
    if ($result = self::$mysqli->query($query)) {
      return $result;
    }
    die("Ошибка выполнения запроса! ($query) - " . self::$mysqli->error);
  }

  public function checkTable($table)
  {
    $returnCheck = false;

    $query = "CHECK TABLE $table";

    if ($result = self::$mysqli->query($query)) $status = $result->fetch_assoc();

    if (($status['Msg_type'] != 'Error') && ($status['Msg_type'] != 'error')) $returnCheck = true;

    return $returnCheck;
  }

  public function lastID($table)
  {

    $result_fuction = 0;

    $strSQL = "SELECT id FROM $table ORDER BY id DESC limit 1";

    if ($result = self::$mysqli->query($strSQL)) {
      $row            = $result->fetch_assoc();
      $result_fuction = $row['id'];
    }

    return $result_fuction;
  }

}

?>