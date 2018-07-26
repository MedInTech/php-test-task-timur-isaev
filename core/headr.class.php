<?php
class ClassHeadr {
  
    public function showHeadrListURL($activeTabMenu, $buttonNew) {
      
        echo "<nav class=\"navbar navbar-default\">";
            echo "<div class=\"container-fluid\">";
                    echo "<div class=\"navbar-header\">";
                         echo "<a class=\"navbar-brand\" href=\"?lurl=1&nurl\">Добавить</a>";
                    echo "</div>";
            echo "</div>";
        echo "</nav>";     
    }
    
    public function showHeadrURL($index) {
        echo "<nav class=\"navbar navbar-default\">";
            echo "<div class=\"container-fluid\">";
                echo "<div class=\"navbar-header\">";
                    echo "<a class=\"navbar-brand\" href=\"?lurl=$index\">Назад</a>";
                echo "</div>";
                echo "<div class=\"navbar-right\">";
                    echo "<button style=\"padding-top: 15px;padding-bottom: 15px;\" type=\"submit\" class=\"btn btn-primary\">Сохранить</button>";
                echo "</div>";
            echo "</div>";
        echo "</nav>";        
    }

}
