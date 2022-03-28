<?php
$arr = array('a', 'b', 'c', 'd', 'e');
function pop(&$arr) {
    if (!is_array($arr)) {
        return ;
    };
    if (empty($arr)) {
        return null;
    };
    foreach ($arr as $key => $value) {
        # code...
    };
    unset($arr[$value]);
    return $value;
}
$result = pop($arr);
echo $result.'</br></hr>';
var_dump($arr);
?>