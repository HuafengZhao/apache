

<!doctype html>
<html>
<head>
    <title>My Admin System</title>
</head>
<body>
	
<a href='./index.php'> return main web-site </a></br>	
    
	<?php	
	
	include './session.php';
	include './connect.php';
	header('content-type:text/html;charset=utf-8');
	if (isset($_SESSION['userName'])) {
		echo "
				Welcome, ".$_SESSION['userName']."!<a href='./logout.php' > LOG OUT</a> 
			 ";	
		$sql = 'SELECT * FROM cart WHERE `username`="' . $_SESSION['userName'] . '"';
	 
	   	//$sql = "SELECT * FROM cart WHERE `username`='赵华峰'";
	  	$res=mysqli_query($link,$sql);
	    //var_dump($res);  
	    while($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){
	    	
														echo' <p>
																 -- user: ' .$arr['username']. '-- :goodsName ' .$arr['goodsName']. ' - - quantity:  ' .$arr['quantity']. ' -- price:  ' .$arr['price']. ' -- Add time:  ' .$arr['add_time']. ' <br>
										    				  </p>
										    				';
                                                        };
	                                                            
				      
	}else{
		echo'<span><a href="./login.php">First, Please sign in... </a></span>';
	}
	?>
	
<?php
include './connect.php';	
header('content-type:text/html;charset=utf-8');
$sql = "SELECT * FROM cart WHERE `username`='赵华峰'";
$res=mysqli_query($link,$sql);
$total_price = 0;
while ($arr = mysqli_fetch_array($res, MYSQLI_ASSOC)){												            
	$total_price = $total_price + $arr['price'];								            	    
   };
   echo $total_price;
?>	
	
	

</body>
</html>


<?php
include './connect.php';	
header('content-type:text/html;charset=utf-8');
$sql = 'SELECT * FROM cart WHERE `username`="' . $_SESSION['userName'] . '"';
$res=mysqli_query($link,$sql);
$total_price = 0;
while ($arr = mysqli_fetch_array($res, MYSQLI_ASSOC)){												            
	$total_price = $total_price + $arr['price'];								            	    
   };
   echo $total_price;
?>	