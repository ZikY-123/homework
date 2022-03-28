<?php
echo '<link rel="stylesheet" href="./style.css">';
include './conn.php';
$sql = "select * from user order by uid desc";
$result = mysqli_query($conn, $sql);
echo '<table>';
echo '<caption><h2>显示记录</h2></caption>';
echo '<th>编号</th>';
echo '<th>姓名</th>';
echo '<th>年龄</th>';
echo '<th>性别</th>';
echo '<th>操作</th>';
if ($result && mysqli_num_rows($result) > 0) {
  while ($row=mysqli_fetch_assoc($result)) {
    echo '<tr>';
      echo '<td>'.$row['uid'].'</td>';
      echo '<td>'.$row['name'].'</td>';
      echo '<td>'.$row['age'].'</td>';
      echo '<td>'.$row['sex'].'</td>';
      echo '<td>'.'<a href="./login.php?uid='.$row['uid'].'">修改</a>||<a href="./delete.php?uid='.$row['uid'].'">删除</a>'.'</td>';
    echo '</tr>';
  }
}
echo '<tr>';
echo '<td colspan="5">';
echo '<a href="./login.php">返回注册页面</a>';
echo '</td>';
echo '</tr>';
echo '</table>'
?>