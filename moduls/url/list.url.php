<?php
    $forma->printH2("Список адресов");
    $headrPortal->showHeadrListURL();
    
    $strSQL = "SELECT id, data_insert, url_long, url_short FROM URL";	
    echo "<table id=\"tableListURL\" class=\"table table-hover\">";
        $table->headrTableURL();
        //echo "<tbody onclick=\"getRecord(event, '?lurl=" . $_GET["lurl"] . "&eurl')\">";
        echo "<tbody>";
                $result = $db_connect->query($strSQL);	
                while ($row = $result->fetch_assoc()) {
                    $table->trURL($row);
                }
        echo "</tbody>";
    echo "</table>";
?>