<?php

class ObjectForma {
    public function printH2($textH2) {
        echo "<h2 style=\"text-align: center;\">$textH2</h2>";
    }
    
    public function printH3($textH3) {
        echo "<h3 style=\"text-align: center;\">$textH3</h3>";
    }
    
    public function showBR() {
        echo "<br>";
    }
    
    public function div($idText = "", $textStyle = "", $textClass = "") {
        if ($idText != "")
            $idText = "id='$idText'";
        if ($textStyle != "")
            $textStyle = "style='$textStyle'";
        if ($textClass != "")
            $textClass = "class='$textClass'";

        echo "<div $idText $textStyle $textClass align='center'>";
    }
    
    public function endDiv() {
        echo "</div>";
    }
 
    public function form($strAction) {
        echo "<form class=\"form-horizontal\" action=\"$strAction\" method=\"post\" enctype=\"multipart/form-data\">";
    }

    public function endForm() {
        echo "</form>";
    }
    
    public function createHighBoxText($inputName, $inputValue) {
        echo "<input type=\"hidden\"  name = \"$inputName\" value=\"$inputValue\" />";
    }

    
    public function createBoxText($idText = "", $displayBlock = "", $labelValue, $inputName, $inputValue, $required, $readonly = "", $typeBox = "text") {
        if ($idText != "")
            $idText = "id='$idText'";
        if ($displayBlock != "")
            $displayBlock = "style='display: $displayBlock;'";

        echo "<div $idText $displayBlock class=\"form-group form-group-lg\">";
            echo "<label class=\"col-sm-4 control-label\" for=\"$inputName\">$labelValue</label>";
            echo "<div class=\"col-sm-8\">";
                echo "<input class=\"form-control\" type=\"$typeBox\" name=\"$inputName\" id=\"$inputName\" placeholder=\"$labelValue\" value = \"$inputValue\" $required $readonly>";
            echo "</div>";	
        echo "</div>";
    }
 
   
    
}
