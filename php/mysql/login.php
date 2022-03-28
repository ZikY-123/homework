<?php
$name = $pwd = $repwd = $age = $sex = $nan = $nv = '';
if (isset($_GET['uid'])) {
  $str = '修改页面';
  $btn = '修改';
  include './conn.php';
  $sql = "select * from user where uid={$_GET['uid']}";
  $result = mysqli_query($conn, $sql);
  if ($result && mysqli_num_rows($result) >0) {
    $row = mysqli_fetch_assoc($result);
    $uid = $row['uid'];
    $name = $row['name'];
    $pwd = $row['pwd'];
    $age = $row['age'];
    $sex = $row['sex'];
  }
  if ($sex == 1) {
    $nan = 'checked';
    $nv = '';
  } else {
    $nan = '';
    $nv = 'checked';
  }
  $action = './show.php?uid='.$_GET['uid'].'';
} else {
  $str = '注册页面';
  $btn = '注册';
  $nv = 'checked';
  $action = 'insert.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$str?></title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <form action="<?=$action?>" method="post">
    <table>
      <caption>
        <h2>
          <?=$str?>
        </h2>
      </caption>
      <tr>
        <th>姓名：</th>
        <td><input type="text" name="name" value="<?=$name?>"></td>
      </tr>
      <tr>
        <th>密码：</th>
        <td><input type="password" name="pwd" value="<?=$pwd?>"></td>
      </tr>
      <tr>
        <th>确认密码：</th>
        <td><input type="password" name="repwd" value="<?=$repwd?>"></td>
      </tr>
      <tr>
        <th>性别：</th>
        <td>
          <input type="radio" name="sex" value="0" <?=$nv?>>女
          <input type="radio" name="sex" value="1" <?=$nan?>>男
        </td>
      </tr>
      <tr>
        <th>年龄：</th>
        <td><input type="text" name="age" value="<?=$age?>"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="" value="<?=$btn?>"></td>
      </tr>
    </table>
  </form>
</body>
</html>