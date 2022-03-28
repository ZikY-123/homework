<?php
$arr=array('id'=>'a','age'=>'b','c','d','e');
function myShift(array&$arr){
	if (empty($arr)) {
		return  null;
	}
	$num=1;
	foreach ($arr as $key => $value) {
		if ($num==1) {
			//echo $key;
			unset($arr[$key]);
			return  $value;
			$num++;
		}
	} 
				
}
$result=myShift($arr);
echo $result;
var_dump($arr);
?>