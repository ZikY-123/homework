<?php
  $year = $_GET['year'] ?? date('Y');
  $month = $_GET['month'] ?? date('m');
  if ($month > 12) {
    $year += 1;
    $month = 1;
  } elseif ($month < 1) {
    $year -= 1;
    $month = 12;
  }
  echo '<table border="1" width="800" align="center">';
  echo '<caption>'.$year.'年'.$month.'月</caption>';
  echo '<th>星期日</th>';
  echo '<th>星期一</th>';
  echo '<th>星期二</th>';
  echo '<th>星期三</th>';
  echo '<th>星期四</th>';
  echo '<th>星期五</th>';
  echo '<th>星期六</th>';
  $num = 1;  // 当天天数
  $day = date('t', mktime(0, 0, 0, $month, 1, $year));  // 得到当月天数
  $week = date('w', mktime(0, 0, 0, $month, 1, $year)); // 每月1日的星期数
  while ($num <= $day) {
    echo '<tr align="center">';
    for ($i=0; $i < 7; $i++) { 
      if ($num > 31 || ($week > $i && $num == 1)) {
        echo '<td>&nbsp;</td>';
      } else {
        echo '<td>'.$num.'</td>';
        $num ++;
      }
    }
    echo '</tr>';
  }
  echo '<tr>';
    echo '<td colspan="7" align="right">';
      echo '<a href="?year='.($year - 1).'&month='.$month.'"><<上一年</a>&nbsp;&nbsp;';
      echo '<a href="?year='.$year.'&month='.($month - 1).'"><上一月</a>&nbsp;&nbsp;';
      echo '<a href="?year='.date('Y').'&month='.date('m').'">回到当月</a>&nbsp;&nbsp;';
      echo '<a href="?year='.$year.'&month='.($month + 1).'">下一月></a>&nbsp;&nbsp;';
      echo '<a href="?year='.($year + 1).'&month='.$month.'">下一年>></a>&nbsp;&nbsp;';
    echo '</td>';
  echo '</tr>';
  echo '</table>';
?>