<html>
<head>
	<style type="text/css">
		.h1{
			font-size: 100px;
		}
	</style>
</head>>
<body>
<?php
include './connect.php';
include './session.php';
header('content-type:text/html;charset=utf-8');
if (isset($_SESSION['userName'])) {
	echo "Welcome, ".$_SESSION['userName']."!<a href='./logout.php' > LOG OUT</a> ";
	echo "<a href='./cart_list.php'>RETURN MY CART</a>";
	echo '</br>';
	echo '</br>';	
	$ID=$_GET['id'];
    $sql = "DELETE FROM cart WHERE id=$ID";
	$res=mysqli_query($link,$sql);	
	if($res){
		echo '<h1>DELETE SUCCESS</h1>';
		echo '</br>';
		echo "<a href='./cart_list.php'>RETURN MY CART</a>";
	}else{
		echo 'ADD FAIL';
	}
	//关闭数据库连接
	mysqli_close($link);
}else{
	echo'<span><a href="./login.php">First, Please sign in... </a></span>';
}
?>
</body>
</html>




