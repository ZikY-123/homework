<?php
$arr=array('a','b','c','d','e');

function  myPop(&$arr){
	if (!is_array($arr)) {
     return ;
	}
	if(empty($arr)){
		return null;
	}
	foreach($arr as $key => $value){
		//code....
	}
	unset($arr[$key]);
	return $value;
}
$result=myPop($arr);
echo $result.'<br><hr>';
var_dump($arr)
?>