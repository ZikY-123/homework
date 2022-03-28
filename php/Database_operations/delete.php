<?php 
$uid=$_GET['uid'] ?? '';

include './conn.php';

$sql="delete from user where uid={$uid}";
$result=mysqli_query($conn,$sql);
if ($result) {
	echo '<script>alert("删除成功");location="./show.php"</script>';
}else{
	echo '<script>alert("删除失败")</script>';
}
?>