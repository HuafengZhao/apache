<?php
session_start();
echo "<meta charset='utf-8'>"
?>

<?php
	
	if(
		isset($_POST['userName']) &&
		isset($_POST['userPass']) &&  
		$_POST['userName']=="admin" && 
		$_POST['userPass']=="root"
	){
		//$_SESSION['userName'] = $_POST['userName'];
		echo "My Admin System login success，<a href='./admin info.php'>Return My Admin System</a>";
	}else{
		echo "用户名或者密码错误，<a href='./admin.php'>重新登陆</a>";
	}

?>
