<!doctype html>
<html>
<head>
    <title>Product Details</title>    
	<link rel="stylesheet" type="text/css" href="get css.css">
    <script>
        function incrementQuantity() {
            // Get current quantity
            let quantity = parseInt(document.getElementById('quantity-display').innerHTML);
            // Increment quantity by 1
            quantity += 1;
            // Update display and hidden input
            document.getElementById('quantity-display').innerHTML = quantity;
            document.getElementById('quantity-input').value = quantity;
        }
        function decrementQuantity() {
            // Get current quantity
            let quantity = parseInt(document.getElementById('quantity-display').innerHTML);
            // Decrement quantity by 1 (if quantity is already at minimum of 1, do nothing)
            if (quantity > 1) {
                quantity -= 1;
            }
            // Update display and hidden input
            document.getElementById('quantity-display').innerHTML = quantity;
            document.getElementById('quantity-input').value = quantity;
        }
    </script>
    	  
</head>
<body>
	
	<p><a href='./index.php'> RETURN HOMEPAGE </a></p>
	<?php
		include './session.php';
		header('content-type:text/html;charset=utf-8');
		$Name=$_GET['name'];
		$link=mysqli_connect('sql309.byethost4.com','b4_33277595','Zhf19940910','b4_33277595_myshop');
		$sql="select * from goods where `name`= '$Name'";
		$res=mysqli_query($link,$sql);
		if (!$res) {
		    printf("Error: %s\n", mysqli_error($link));
			exit();
		}
		$arr=mysqli_fetch_array($res,MYSQLI_ASSOC);	
	
		
		echo'	<h1 class="name">'.$arr['name'].'</h1>
				<h3 class="detail">Product Details：</h3>
				<h3 class="detail">'.$arr['info'].'</h3>
				<div class="product-images">
				    <img class="product-image" src="'.$arr['path'].'" alt="Product Image 1">
				    <img class="product-image" src="'.$arr['detail_photo1'].'" alt="detail_photo1">
				    <img class="product-image" src="'.$arr['detail_photo2'].'" alt="detail_photo2">
				    <img class="product-image" src="'.$arr['detail_photo3'].'" alt="detail_photo3">
				  
				</div>
				<span class="price"> $ </span>
				<span class="price2">'.$arr['price'].'</span>
			';
	?>			
				
				<form id="form" action="cart_mysql_insert.php" method="post">
					<input type="hidden" name="userName" value="<?php 
																if (isset($_SESSION['userName'])){
																	echo $_SESSION['userName'];
																}else{
																	//echo'<span><a href="./login.php">PLEASE,SIGN IN </a></span>';
																}
						 										 
						 								 ?>"><br>
					<input  type="hidden" name="goodsName" value="<?php
																    echo $arr['name'];
						                                         ?>">	
					<input  type="hidden" name="quantity" id="quantity-input" value="1">
						
					<input  type="hidden" name="price"  value="<?php
															    echo $arr['price'];
						                                    ?>">
					<input  type="hidden" name="add_time"  value="<?php
																date_default_timezone_set('Asia/Shanghai');
															    echo date("Y-m-d H:i:sa");
						                                    ?>">	                                    
						
					<div class="spans">											
						<span class="quantity_font">Quantity: </span>
						<span><button type="button" onclick="decrementQuantity()">-</button></span>
						<span class="quantity "id="quantity-display">1</span>
						<span><button type="button" onclick="incrementQuantity()">+</button></span>
					</div>	
					</br>
					
					<input class="submit" id="submit-button" type="submit" value="ADD TO CART">
				</form>				  
	
</body>
</html>


