<?php

class ClassTable
{
  public function headrTableURL()
  {
    echo "<thead>";
    echo "<tr class=\"bg-primary\">";
    echo "<th>Дата создания</th>";
    echo "<th>URL short</th>";
    echo "<th>URL long</th>";
    echo "<th>ДД</th>";
    echo "</tr>";
    echo "</thead>";
  }

  public function trURL($row)
  {
    echo <<<HTML
<tr idRecord={$row['id']}>
  <td>{$row['data_insert']}</td>
  <td>{$row['url_long']}</td>
  <td>{$row['url_short']}</td>
  <th>
    <a href="?lurl={$row['url_long']}&eurl={$row['id']}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>  
    <a href="?del={$row['id']}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>  
  </th>
</tr>
HTML;
  }
}