

<html>
<head>
	<style type="text/css">
		.h1{
			font-size: 100px;
		}
	</style>
</head>

<body>
	<?php
	include './connect.php';
	header('content-type:text/html;charset=utf-8');
	$ID=$_GET['id'];
	$sql = "DELETE FROM goods WHERE id=$ID";
	$res=mysqli_query($link,$sql);	
	if($res){
		echo '<h1>DELETE SUCCESS</h1>';
		echo '</br>';
	//	echo "<a href='./cart_list.php'>RETURN MY GOODS LIST</a>";
	}
	?>
</body>
</html>
