
<?php
	include './session.php';
	header('content-type:text/html;charset=utf-8');
    $link=mysqli_connect('sql309.byethost4.com','b4_33277595','Zhf19940910','b4_33277595_myshop');
//	include './connect.php';
	//传递数据
	$username=$_POST['login_name'];
	$password=$_POST['login_password'];
	//session_start();
	$_SESSION['userName']=$username;
	
	$check="select id from member where username='$username' and password='$password' limit 1 ";
	$res=mysqli_query($link,$check);
	
	if(mysqli_num_rows($res) > 0){
		if(isset($_POST['userSubmit']) &&
		   isset($_SESSION['userName']) 
		   ){
		   	echo '<h1>LOGIN SUCCESS</h1></Br>';
			echo "<a href='./index.php'> RETURN HOMEPAGE </a></br>";	
			echo "<a href='./cart_list.php'> TO MY CART </a>";	
			
			}
	}else{
		echo "<h1>LOGIN FAIL, USERNAME OR PASSWORD IS WRONG</h1>";
		echo "<a href ='./login.php'>PLEASE LOGIN AND TRY AGAIN </a>";
		
	}
	
	

/*	if(mysqli_num_rows($res) > 0){
		if(setcookie("name","$password")){
			echo "login success,<a href='./index.php'> return first web-site </a>";			
		}else{
			echo "set cookie is wrong";
		}
	}else{
		echo "login failure, username or password is wrong, <a href ='./login.php'>please login again </a>";
	}*/

?>