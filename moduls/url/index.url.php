<?php
if (isset($_GET["nurl"]) || isset($_GET["eurl"])) include __DIR__ . '/../url/edit.url.php';
else if (isset($_GET["snu"])) include(__DIR__ . '/../url/save.url.php');
else if (isset($_GET["del"])) include(__DIR__ . '/../url/deleted.url.php');
else {
  include __DIR__ . '/../url/list.url.php';
}
