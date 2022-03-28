<?php
$arr=array(
           array('id'=>'01','name'=>'张三','age'=>31,'sex'=>0),
           array('id'=>'02','name'=>'李四','age'=>26,'sex'=>1),
           array('id'=>'03','name'=>'王五','age'=>24,'sex'=>0),
           array('id'=>'04','name'=>'赵六','age'=>40,'sex'=>1),
           array('id'=>'05','name'=>'马七','age'=>30,'sex'=>0),
           array('id'=>'06','name'=>'羊八','age'=>18,'sex'=>1),
           array('id'=>'07','name'=>'天山童姥','age'=>38,'sex'=>1),
           array('id'=>'08','name'=>'玄冥二老','age'=>73,'sex'=>1),
           array('id'=>'09','name'=>'张无忌','age'=>20,'sex'=>1),
           array('id'=>'10','name'=>'慕容婉儿','age'=>16,'sex'=>0),
           array('id'=>'11','name'=>'郭靖','age'=>44,'sex'=>0),
           array('id'=>'12','name'=>'黄蓉','age'=>36,'sex'=>1),
           array('id'=>'13','name'=>'容嬷嬷','age'=>84,'sex'=>0),
);
$arr1 = array(10, 8, 2, 6, 16, 30, 21);
function maopao(array &$arr, $order=true, $key=null) {
	$len = sizeof($arr);
	if (!empty($key)) {
		// 正序
		if ($order) {
			for ($i=0; $i < $len; $i++) { 
				for ($j=0; $j < $len - $i - 1; $j++) { 
					if ($arr[$j][$key] > $arr[$j + 1][$key]) {
						$temp = $arr[$j];
						$arr[$j] = $arr[$j + 1];
						$arr[$j + 1] = $temp;
					}
				}
			}
			var_dump($arr);
		// 倒序
		} elseif ($order == false) {
			for ($i=0; $i < $len; $i++) { 
				for ($j=0; $j < $len - $i - 1; $j++) { 
					if ($arr[$j][$key] < $arr[$j + 1][$key]) {
						$temp = $arr[$j];
						$arr[$j] = $arr[$j + 1];
						$arr[$j + 1] = $temp;
					}
				}
			}
			var_dump($arr);
		// 一维数组
		}
	} else {
		if ($order) {
			for ($i=0; $i < $len; $i++) { 
				for ($j=0; $j < $len - $i - 1; $j++) { 
					if ($arr[$j] > $arr[$j + 1]) {
						$temp = $arr[$j];
						$arr[$j] = $arr[$j + 1];
						$arr[$j + 1] = $temp;
					}
				}
			}
			var_dump($arr);
		// 倒序
		} elseif ($order == false) {
			for ($i=0; $i < $len; $i++) { 
				for ($j=0; $j < $len - $i - 1; $j++) { 
					if ($arr[$j] < $arr[$j + 1]) {
						$temp = $arr[$j];
						$arr[$j] = $arr[$j + 1];
						$arr[$j + 1] = $temp;
					}
				}
			}
			var_dump($arr);
		}
	}
}
maopao($arr1, false);
?>