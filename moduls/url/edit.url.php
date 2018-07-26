<?php

$readonly = "";

$strAction = "";
$titleForm = "";
$typeDocumBlock = "block";
$strCancel = "?lurl=" . $_GET["lurl"];
$typeURL = 0;
$id = 0;

if (isset($_GET["nurl"])) {
    $typeURL = 1;
    $curURL = new ClassURL(NULL, NULL);
    $titleForm = "Новая ссылка";
    $strAction = "$strCancel&snu";
} elseif (isset($_GET["eurl"])) {
    $typeURL = 2;
    $id = $_GET["eurl"];
    $curURL = new ClassURL(3, NULL, $id);
    $titleForm = "";
    $strAction = "$strCancel&su=$id";
    $readonly = "readonly";
}

$forma->form($strAction);
$headrPortal->showHeadrURL(1);
$forma->printH2($titleForm);

$forma->div("", "", "row");
$forma->div("", "", "col-md-10");

$forma->createHighBoxText("id", $id);
$forma->createBoxText("textDocumNumber", $typeDocumBlock, "URL длинный", "url_long", $curURL->url_long, "", $readonly);

if ($typeURL == 2) {
    $forma->createBoxText("textDocumNumber", $typeDocumBlock, "URL короткий", "url_short", $curURL->url_short, "", $readonly);
    $forma->createBoxText("textDocumNumber", $typeDocumBlock, "Дата создания", "data_insert", $curURL->data_insert, "", $readonly);
}

$forma->endDiv();
$forma->endDiv();
$forma->endForm();
?>                  