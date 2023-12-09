<?php
	echo "<a href='./index.php'> RETURN HOMEPAGE</a></br>";	
	header('content-type:text/html;charset=utf-8');
	//连接成功会得到一个数据库对象
	include './connect.php';
	//传递数据
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$iphone_number=$_POST['iphone_number'];
	$age=$_POST['age'];
	//准备sql语句，双引号可以解析变量
	$sql="insert into member (username, password, email, gender, iphone_number, age ) values ( '$username', '$password','$email' ,'$gender', '$iphone_number', $age )";
//	echo $sql;
	//执行
	$res=mysqli_query($link,$sql);
	
	
	if($res){
		echo '<h1>REGISTER SUCCESS</h1>';
	}else{
		echo '<h1>REGISTER FAIL, PLEASE TRY IT AGAIN</h1>';
	}
	//关闭数据库连接
	mysqli_close($link);
?>