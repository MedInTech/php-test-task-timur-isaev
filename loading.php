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
    
    $db_connect = new DataBase;
    $forma = new ObjectForma;
    $headrPortal = New ClassHeadr;
    $table = new ClassTable;
?>