<?php
class ClassTable {
    public function headrTableURL() {       
        echo "<thead>";
            echo "<tr class=\"bg-primary\">";
                echo "<th>Дата создания</th>";
                echo "<th>URL short</th>";
                echo "<th>URL long</th>";
                echo "<th>ДД</th>";
            echo "</tr>";
        echo "</thead>";
    }
    
    public function trURL($row) {
        echo "<tr idRecord=".$row['id'].">";
        echo "<td>".$row['data_insert']."</td>";
        echo "<td>".$row['url_long']."</td>";
        echo "<td>".$row['url_short']."</td>";
        echo "<th><a href=\"?del=".$row['id']."\"><span class=\"glyphicon glyphicon-trash\" aria-hidden=\"true\"></span></a></th>";
        echo "</tr>";    
    }
    
}