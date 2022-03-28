<?php
$uid = $_GET['uid'];
$name = $_POST['name'];
$pwd = $_POST['pwd'];
$repwd = $_POST['repwd'];
$age = $_POST['age'];
$sex = $_POST['sex'];
if (!empty($pwd) && !empty($repwd)) {
  if ($pwd == $repwd) {
    $pwd = $_POST['pwd'];
  } else {
    echo '<script>alert("密码设置失败");location="./login.php?uid='.$uid.'"</script>';
  }
} else {
  $pwd = '';
}
include './conn.php';
$sql = "update user set name='{$name}', pwd='{$pwd}', age={$age}, sex={$sex} where uid='{$uid}'";
$result = mysqli_query($conn, $sql);
if ($result) {
  echo '<script>alert("修改成功");localtion="./show.php"</script>';
} else {
  echo '<script>alert("密码设置失败");location="./login.php?uid='.$uid.'"</script>';
}
?>