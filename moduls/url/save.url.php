<?php
include_once '../../loading.php';

$strCancel = "?lurl=" . $_GET["lurl"];
if (isset($_GET["snu"])) {
  $curURL = new ClassURL($db_connect, 2, NULL);
  $curURL->create();

  header("Location: /index.php$strCancel");
  exit();
}
