<?php
    $strCancel = "?lurl=" . $_GET["lurl"];
    if (isset($_GET["del"])) {
        $id = $_GET["del"];
        $strSQL = "DELETE FROM URL WHERE id = $id" ;
        $result = $db_connect->query($strSQL);

        header("Location: index.php$strCancel");
        exit();
    }
