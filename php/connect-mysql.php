<?php
  // 1. 建立数据库连接
  // $conn = mysqli_connect("localhost", "root", "","imonkey", "3306");
  $conn = mysqli_connect("localhost", "root", "","imonkey", "3306") or die("数据库连接失败！失败信息：".mysqli_connect_error($conn));
  // 2. 进入选择好的数据库
  // mysqli_select_db($conn, 'imonkey');
  // 此处语句可合并为 $conn = mysqli_connect("localhost", "root", "","imonkey", "3306");
  // 3. 设置数据库字符集
  mysqli_set_charset($conn, 'utf8');
  // 4. 封装sql语句
  $sql = "insert into students(name,pwd,age,sex)values('小包', '123456', '20', '1')";
  // 5. 执行sql语句
  $a = mysqli_query($conn, $sql);
  var_dump($a);
  // 6. 关闭数据库(断开数据库连接)
  mysqli_close($conn);
?>