<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>HOMEPAGE</title>
		
		<!--骨架-->
		<!--按顺序-->
		<link rel="stylesheet"  href="./lib/css/bootstrap.min.css"/>
		<script type="text/javascript" src="./lib/js/jquery-3.5.1.min.js"></script>
		<script type="text/javascript" src="./lib/js/bootstrap.min.js"></script>
		<!--nav-外联css-->
		<link rel="stylesheet" href="index_sdmenu.css" />
		
		<!--引入tool.js文件-->
		<script type="text/javascript" src="index_tools.js"></script>
		<style>
			body {
				margin: 0;
				padding: 0;
				font-family: Arial, sans-serif;
				font-size: 16px;
				line-height: 1.5;
			}
			
			header {
				background-color: #007bff;
				color: #fff;
				padding: 20px;
				font-size: 24px;
				font-weight: bold;
				text-align: center;
			}
			
			.box {
				display: flex;
				justify-content: space-between;
				align-items: center;
				padding: 10px;
				background-color: #f8f9fa;
			}
			
			.user {
				font-weight: bold;
			}
			
			.user_info {
				display: flex;
				align-items: center;
			}
			
			.user_info span {
				margin-right: 10px;
			}
			
			.container {
				margin-top: 30px;
			}
			
			ul {
				list-style: none;
				margin: 0;
				padding: 0;
				display: flex;
				flex-wrap: wrap;
			}
			
			li {
				flex: 0 0 calc(25% - 20px);
				margin: 10px;
				border: 1px solid #ccc;
				padding: 10px;
			}
			
			li img {
				max-width: 100%;
				height: auto;
			}
			
			li div {
				margin-top: 10px;
				font-size: 18px;
				font-weight: bold;
				text-align: center;
			}
			
			li span {
				display: block;
				font-size: 16px;
				font-weight: bold;
				text-align: center;
				margin-top: 10px;
			}
			
			.footer {
				background-color: #f8f9fa;
				padding: 20px;
				display: flex;
				flex-wrap: wrap;
				align-items: center;
				justify-content: space-between;
				font-size: 14px;
				color: #6c757d;
			}
			
			.footer .left {
				flex: 0 0 70%;
			}
			
			.footer .left h1 {
				font-size: 20px;
				font-weight: bold;
				margin-bottom: 10px;
			}
			
			.footer .right {
				flex: 0 0 30%;
				display: flex;
				align-items: center;
				justify-content: flex-end;
			}
			
			.footer dl {
				margin: 0;
				padding: 0;
				margin-right: 20px;
			}
		</style>

	</head>
	
	
	<body>
		<!--头部-->
		<header>Professional Focus and Concentration</header>
		
		
		<!--登陆注册 表单-->
		<div class="box">
			
			<div class="user">
				<span><a href="./cart_list.php">MY CART</a></span>
			</div>
			
		
				
			<div class="user_info">
				<?php
					include './session.php';
					if (isset($_SESSION['userName'])) {
						//$name=$_SESSION['userName']
						//echo'<span><a href="./cart_list.php">Hi </a></span>';
						echo "Welcome, ".$_SESSION['userName']."!<a href='./logout.php' > &nbsp &nbspLOG OUT</a> ";
						//echo'<span><a href="./logout.php">LOG OUT</a></span>';
					}else{
						echo'<span><a href="./register.php">REGISTER </a></span>';
						echo'<span><a href="./login.php">&nbsp &nbsp PLEASE,LOG IN </a></span>';
						
					}
				?>
			</div>


			
			
<!--			<form action="./get.php", method="get" class="form">			
			    <input name='name' style="width:400px;height:55px" placeholder="Input...."/>
		 	 	<input type="submit" value="Search" style="height:57px " >
	    	</form>-->
	    	

		</div>
		
		
		<!--导航栏-->
		
	
	
							
			<!--
				1 访问数据库 =》假数据
				2 解析数据
				3 生成前端程序员写好的html结构
			-->
		
		<div class="container" >
			<ul>
				<!--<li><a herf="#"><img src="img/pineapple.jpg"><div>香蕉</div></a></li>-->

				<?php
					
//						header('content-type:text/html;charset=utf-8');
					
					//1引入数据
					include './connect.php';
					
					//解析数据
//						for($i=0;$i<count($arr);$i++){
//							$arr[0]=array('href'=>'detail.php?flag=pineapple','path'=>'img/pineapple.jpg','name'=>'菠萝');
//							echo '<li><a herf="'.$arr[$i]['href'].'"><img src="'.$arr[$i]['path'].'"><div>'.$arr[$i]['name'].'</div></a></li>';
					while($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){		
//							echo '<li><a herf="'.$arr['href'].'"><img src="'.$arr['path'].'"><div>'.$arr['name'].'</div></a></li>';
						echo 	'<li>
							  		<p>							  		
							  			<a href="./get.php?name='.$arr['name'].'"><img src="'.$arr['path'].'"></a>
							  			<div>
							  				<h3><a href="./get.php?name='.$arr['name'].'" >'.$arr['name'].'</a><h3>
							  			</div>
							  			<br />
							  			<div>
							  				<span>$ '.$arr['price'].'</span>
							  			</div>							  			
							  	    </p>
							    </li>';
					}
//						}
					
				?>
			</ul>
		</div>
	</div>	
		
		<!--清除浮动-->
		
		<div class="clearfix"></div>
		
		
		<!--<footer>版权所有</footer>-->
		
		<div class="footer">
				<!--文字不给高度-->
				<div class="left">					
					<p> 
					<h1> Our story </h1>
					we start on March 2021 </br>
					More Professional More Focus and More Concentration</br>
					</p>
				</div>
				
				
<!--				<div class="right">
					<dl>
						<dt>品牌故事</dt>
						<dd><a>品牌A</a></dd>
						<dd><a>品牌A</a></dd>
					</dl>
					<dl>
						<dt>品牌使命</dt>
						<dd><a>伙伴A</a></dd>
						<dd><a>伙伴B</a></dd>
					</dl>
				</div>-->
				
			</div>
		</div>
	
		
	</body>
</html>





	

