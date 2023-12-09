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
	echo '</br>';
	echo '</br>';
	
	$username=$_POST['userName'];
    $goodsName=$_POST['goodsName'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $addTime=$_POST['add_time'];
    
    //echo "$username,$goodsName,$quantity";
    $sql="insert into cart (username, goodsName, quantity, price, add_time ) values ( '$username', '$goodsName','$quantity','$price','$addTime' )";
	$res=mysqli_query($link,$sql);	
	if($res){
		echo '<h1>ADD SUCCESS</h1>';
		echo '</br>';
		echo "<a href='./cart_list.php'>Go Check My Cart</a>";
	}else{
		echo 'ADD FAIL';
	}
	//关闭数据库连接
	mysqli_close($link);
}else{
	echo'<span><a href="./login.php">YOU NEED TO LOG IN</a></span>';
}
?>
</body>
</html>




