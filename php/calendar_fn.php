<?php
  // 数据提供函数
  function construct() {
    $year = $_GET['year'] ?? date('Y');
    $month = $_GET['month'] ?? date('n');
    $week = date('w', mktime(0, 0, 0, $month, 1, $year));
    $day = date('t', mktime(0, 0, 0, $month, 1, $year));
    return $year.','.$month.','.$week.','.$day;
  }
  // 主函数
  function showDate() {
    $result = construct();
    list($year, $month, $week, $day) = explode(',', $result);
    // list()把数组中的值赋给一些变量
    // explode()把字符串打散为数组
    echo '<table border="1" width="800" align="center">';
    echo '<caption>'.$year.'年'.$month.'月'.'</caption>';
    echo '<th>星期日</th>';
    echo '<th>星期一</th>';
    echo '<th>星期二</th>';
    echo '<th>星期三</th>';
    echo '<th>星期四</th>';
    echo '<th>星期五</th>';
    echo '<th>星期六</th>';
    $num = 1;
    while ($num <= $day) {
      echo '<tr>';
      for ($i=0; $i < 7; $i++) {
        if ($num > $day || ($week > $i && $num == 1)) {
          echo '<td>&nbsp;</td>';
        } else {
          echo '<td>'.$num.'</td>';
          $num++;
        }
      }
      echo '</tr>';
    }
    echo '<tr>';
      echo '<td colspan="7" align="right">';
      echo linkDate($year, $month);
      echo '</td>';
    echo '</tr>';
    echo '</table>';
  }
  // 超链接函数
  function linkDate($year, $month) {
    $link = '<a href="?'.preYear($year, $month).'"><<上一年</a>&nbsp;&nbsp;';
    $link .= '<a href="?'.preMonth($year, $month).'"><上一月</a>&nbsp;&nbsp;';
    $link .= '<a href="?year='.date('Y').'&month='.date('m').'">回到当月</a>&nbsp;&nbsp;';
    $link .= '<a href="?'.nextMonth($year, $month).'">下一月></a>&nbsp;&nbsp;';
    $link .= '<a href="?'.nextYear($year, $month).'">下一年>></a>&nbsp;&nbsp;';
    return $link;
  }
  // 上一年
  function preYear($year, $month) {
    $year --;
    if ($year >= 2038 || $year <= 1970) {
      $year = 1970;
    }
    return 'year='.$year.'&month='.$month;
  }
  // 下一年
  function nextYear($year, $month) {
    $year ++;
    if ($year <= 1970 || $year >= 2038) {
      $year = 2038;
    }
    return 'year='.$year.'&month='.$month;
  }
  // 上一月
  function preMonth($year, $month) {
    if ($month == 1) {
      $year --;
      if ($year <= 1970) {
        $month = 1;
        $year = 1970;
      } else {
        $month = 12;
      }
    } else {
      $month --;
    }
    return 'year='.$year.'&month='.$month;
  }
  // 下一月
  function nextMonth($year, $month) {
    if ($month == 12) {
      $year ++;
      if ($year >= 2038) {
        $month = 12;
        $year = 2038;
      } else {
        $month = 1;
      }
    } else {
      $month ++;
    }
    return 'year='.$year.'&month='.$month;
  }
  showDate();
?>