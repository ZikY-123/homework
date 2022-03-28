<?php
$arr=array('id'=>'a','age'=>'b','c','d','e');
function shift(array &$arr) {
    if (empty($arr)) {
        return null;
    }
    $num = 1;
    foreach ($arr as $key => $value) {
        if ($num == 1) {
            unset($arr[$key]);
            return $value;
            $num ++;
        }
    }
}
$result = shift($arr);
echo $result;
var_dump($arr);
?>