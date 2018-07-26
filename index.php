<?php
require_once "loading.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="components/bootstrap/css/bootstrap.css" >
        <link rel="stylesheet" type="text/css" href="components/DataTables/css/jquery.dataTables.css"/>
        <title>Сервис сжатия ссылок</title>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="col-md-1" style="float:left;height: 120px;position: relative;width: 147px;display: flex;align-items: center;justify-content: center;">
                    <a href="index.php"><img src="/css/logo.png" class="rounded" style="vertical-align: middle; height: 80%; width: 80%"></a>
                </div>
                <div class="col-md-9">
                    <h2>Сервис сжатия ссылок</h2>
                </div>
            </div>
        </nav>   
            <?php 
                if ($resol->resol == 0) {
                    if (isset($_GET["lurl"]) || isset($_GET["del"])) include 'moduls/url/index.url.php';
                    else header("Location: /index.php?lurl=1");
                }
            ?>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.js"></script>
        <script type="text/javascript" src="components/bootstrap/js/bootstrap.js"></script>
        <script type="text/javascript" src="components/DataTables/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>