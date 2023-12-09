·<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="upload css.css">
	</head>
	<body>
		
		<a href='./index.php'>RETURN HOMEPAGE </a>
		<!--
			form标签，里面是所有用户的填写的表单数据0..
			post:传递数据的方式方法，post代表隐式提交数据，get明文传送数据
		-->
		<form action="./register_mysql_insert.php" method="post">
			<!--
				中文冒号，为了防止代码错误
				input+tab
				type="普通输入框"
			-->
			<div><h1>Register</h1></div>
			<br />
			<!-- 属性 ：autofocus="autofocus"加外框-->
			<input type="text"    placeholder="USERNAME" name="username" />
			<br />
			<input type="text"   placeholder="PASSWORD" name="password"/>			
			<br />
			<input type="text"    placeholder="EMAIL" name="email" />
		
			
			
			<!--性&nbsp别：
			<!--
				type="radio" danxuankuang
				checked="checked" 代表默认选中
				测试细节：
				  点击查看是否为单选效果
				  刷新的时候时候有默认选中的状态
				  点击文字是否科技进行切换
			-->
		     <!--<input type="radio" name="xb" checked="checked" id="nan" />
		     <label for="nan">男</label>
		     <input type="radio" name="xb" id="nv"/>
		     <label for="nv">女</label>-->
		     
		    <br />
			<input type="text"   placeholder="GENDER" name="gender" />
			<br />
		    
			<input type="text"   placeholder="PHONE NUMBER" name="iphone_number" />
			<br />
		    
			<input type="text"   placeholder="age"  name="age" />
			
		    <br />
		    <br />


				 <!--
				 	 type="submit" 点击之后提交给指定的后台
				 	 value属性设置按钮身上的文字
				 	 点击报错与我们无关
				 -->
		 	<input type="submit"  value="REGISTER" osition:absolute/>
		 	
		</form>
		
		
	</body>
</html>



