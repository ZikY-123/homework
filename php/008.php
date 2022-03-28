<?php
include './0081.php';

$arr=myArray();
$len=sizeof($arr[0]);
echo '<table border=1 width=800 align=center>';
echo '<caption><h1>万能表格函数演示</h1></caption>';
echo '<th>班级</th>';

echo '<th>外号</th>';
echo '<th>财富</th>';
echo '<th>性别</th>';
echo '<th>得分</th>';
myTable($arr);
echo'</table>';

