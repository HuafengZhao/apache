

<!doctype html>
<html>
<head>
    <title>MY CART</title>
    <style>
        body {
            background-color: #f7f7f7;
            font-family: Arial, sans-serif;
            color: #333;
        }
        a {
            color: #337ab7;
            text-decoration: none;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        h1 {
            color: #337ab7;
            font-size: 32px;
            margin-top: 30px;
            margin-bottom: 20px;
        }
        h2 {
            color: #333;
            font-size: 24px;
            margin-top: 20px;
            margin-bottom: 10px;
        }
        p {
            margin-bottom: 10px;
        }
        a.pay-link {
		  font-size: 24px;
		  padding: 10px 20px;
		  background-color: #337ab7;
		  color: #fff;
		  border: none;
		  border-radius: 5px;
		  text-decoration: none;
		  display: inline-block;
		}
		
		a.pay-link:hover {
		  background-color: #286090;
		}
    </style>
</head>
<body>
	
<a href='./index.php'> RETURN HOMPAGE</a></br>	
</br>	    
	<?php	
	include './session.php';
	include './connect.php';
	header('content-type:text/html;charset=utf-8');
	if (isset($_SESSION['userName'])) {
		echo "Welcome, ".$_SESSION['userName']."!<a href='./logout.php' > LOG OUT</a> ";	
		echo '<h1>MY CART</h1>';
			   $sql = 'SELECT * FROM cart WHERE `username`="' . $_SESSION['userName'] . '"';
			    $res=mysqli_query($link,$sql);
			    $num = 0;
			    //var_dump($res);  
			    while($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){
			    	
																echo' <p>
																		 -- NUM.: ' . ($num=$num+1) . '
																		 -- USER: ' .$arr['username']. '
																		 -- GOODSNAME ' .$arr['goodsName']. ' 
																		 -- QUANTITY:  ' .$arr['quantity']. ' 
																		 -- PRICE:  ' .$arr['price']. ' 
																		 -- THIS TOTAL PRICE:  ' .$arr['price']. ' * ' .$arr['quantity']. ' 
																		 -- ADD TIME:  ' .$arr['add_time']. '  
                                                                         <a href="./cart_mysql_delete.php?id=' .$arr['id']. '">DELETE IT</a>  <br>
												    				  </p>
												    				';
	                                                            };
	            include './connect.php';	
				$sql = 'SELECT * FROM cart WHERE `username`="' . $_SESSION['userName'] . '"';
				$res=mysqli_query($link,$sql);
				$total_price = 0;
				while ($arr = mysqli_fetch_array($res, MYSQLI_ASSOC)){
					$arr['price']=$arr['price'] * $arr['quantity'];											            
					$total_price = $total_price + $arr['price'];								            	    
				   };
				   echo '<h1>TOTAL:</h1>';
				   echo "<h2>$total_price</h2>";                                               



				

	            
	            
	}else{
		echo'<span><a href="./login.php">YOU NEED TO LOGIN</a></span>';
		echo'</br>';
		echo'<span><a href="./register.php">IF YOU HAVE NOT YOUR ACCOUNT, PLEASE REGISTER IT THANKS</a></span>';
		
	}
	?>
	<a href="./pay.php" class="pay-link">TO PAY</a>
</body>
</html>