<?php
$conn = @mysqli_connect("localhost", "root", "","imonkey", "3306") or die("数据库连接失败！失败信息：".mysqli_connect_error($conn));
mysqli_set_charset($conn, 'utf8');
?>