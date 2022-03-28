<?php 
/****万年历函数版*******理解编程指挥官概念*****感受函数威力*****/

//一、创建一个类似于构造函数，用于处理
//1、选择的年份
//2、选择的月份
//3、月份中的天数
//4、1号是星期几
function construct(){
	$year=$_GET['year'] ?? date('Y');
	$month=$_GET['month'] ?? date('m');
	$day=date('t',mktime(0,0,0,$month,1,$year));
	$week=date('w',mktime(0,0,0,$month,1,$year));

	return $year.','.$month.','.$day.','.$week;
}

//二、创建一个显示界面这也是主函数，相当于指挥官
function showTable(){
$result=construct();
list($year,$month,$day,$week)=explode(',', $result);

echo '<table border="1" width="800" align="center">';
echo '<caption>'.$year.'年'.$month.'月'.'</caption>';
echo '<th>星期日</th>';
echo '<th>星期一</th>';
echo '<th>星期二</th>';
echo '<th>星期三</th>';
echo '<th>星期四</th>';
echo '<th>星期五</th>';
echo '<th>星期六</th>';

$num=1;
while ($num<=$day) {
	echo '<tr>';
	   for ($i=0; $i < 7; $i++) {
	   if ($num>$day || ($week>$i && $num==1)) {
	    	echo '<td>&nbsp;</td>';
	    }else{
	        echo '<td>'.$num.'</td>';
	   	    $num++;
	    }

	   }
	echo '</tr>';
	
}
echo '<tr>';
echo '<td colspan="7" align="right">';
echo linkDate($year,$month);
echo '</td>';
echo '</tr>';
echo '</table>';
}

//三、创建一个处理超链接的函数
function linkDate($year,$month){

	$link='<a href="?'.preYear($year,$month).'"><<上一年</a>&nbsp;&nbsp;';
	$link.='<a href="?'.preMonth($year,$month).'"><上一月</a>&nbsp;&nbsp;';
	$link.='<a href="?'.nextMonth($year,$month).'">下一月></a>&nbsp;&nbsp;';
	$link.='<a href="?'.nextYear($year,$month).'">下一年>></a>&nbsp;&nbsp;';
	return $link;
}

//四、创建一个处理上一年的函数
function preYear($year,$month){
	$year--;
	if ($year<=1970 || $year>2038) {
		$year=1970;
		// $month=1;
	}
	return 'year='.$year.'&month='.$month;
}
//五、创建一个处理下一年的函数
function nextYear($year,$month){
	$year++;
	if ($year>=2038 || $year<=1970) {
		$year=2038;
		$month=1;
	}

	return 'year='.$year.'&month='.$month;
}
//六、创建一个处理上一月的函数
function preMonth($year,$month){
	if ($month==1) {
		$year--;
		if ($year<=1970) {
			$year=1970;
			$month=1;
		}else{
			$month=12;
		}
	}else{
		
		$month--;
	
	}
	return 'year='.$year.'&month='.$month;
}
//七、创建一个处理下一月的函数
function nextMonth($year,$month){
	if ($month==12) {
		$month=1;
		$year++;
	}else{
		if ($year>=2038) {
			$month=1;
			$year=2038;
		}else{
			$month++;
		}
		
	}

	return 'year='.$year.'&month='.$month;
}
showTable();

?>
