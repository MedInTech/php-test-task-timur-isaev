<?php
    if (isset($_GET["nurl"]) || isset($_GET["eurl"])) include 'moduls/url/edit.url.php';
    else if (isset($_GET["snu"])) include("moduls/url/save.url.php");
    else if (isset($_GET["del"])) include("moduls/url/deleted.url.php");
    else {
        include 'moduls/url/list.url.php';
    }
?>

