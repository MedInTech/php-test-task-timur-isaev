<?php
date_default_timezone_set("Asia/Novosibirsk");

define("ROOTDIR", $_SERVER["DOCUMENT_ROOT"]);

//CLASS
require_once ROOTDIR . "/class/url.class.php";
require_once ROOTDIR . "/class/gen.class.php";
require_once ROOTDIR . "/class/resol.class.php";

//CORE
require_once ROOTDIR . "/core/constants.class.php";
require_once ROOTDIR . "/core/object.class.php";
require_once ROOTDIR . "/core/database.class.php";
require_once ROOTDIR . "/core/headr.class.php";
require_once ROOTDIR . "/core/table.class.php";

session_start();

$dbConfig = json_decode(file_get_contents(ROOTDIR . '/config/db.json'), true);

$db_connect = new DataBase(new Config($dbConfig));
$resol      = new ClassResol($db_connect,
  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

$forma       = new ObjectForma;
$headrPortal = new ClassHeadr;
$table       = new ClassTable;
