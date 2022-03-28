<?php
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$repwd = $_POST['repwd'];
$age = $_POST['age'];
$sex = $_POST['sex'];
if ($pwd == $repwd) {
  echo '<script>alert("密码设置成功");location="./show.php"</script>';
} else {
  echo '<script>alert("密码设置失败");location="./login.php"</script>';
}
include './conn.php';
$sql = "insert into user(name, pwd, age, sex)values('{$name}', '{$pwd}', {$age}, {$sex})";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo '<script>alert("数据插入成功");location="./show.php"</script>';
} else {
  echo '<script>alert("数据插入失败");location="./show.php"</script>';
}
mysqli_close($conn);
?>