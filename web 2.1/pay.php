<!DOCTYPE html>
<html>
<head>
	<title>支付界面</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style type="text/css">
				/* 全局样式 */
		* {
		  box-sizing: border-box;
		  margin: 0;
		  padding: 0;
		}
		
		body {
		  font-family: Arial, sans-serif;
		  font-size: 16px;
		  color: #333;
		  background-color: #f5f5f5;
		  text-align: center;
		}
		
		h1 {
		  margin: 30px 0;
		  font-size: 28px;
		}
		
		ul {
		  list-style: none;
		  display: flex;
		  justify-content: center;
		  align-items: center;
		  flex-wrap: wrap;
		}
		
		li {
		  margin: 20px;
		}
		
		a {
		  display: block;
		  text-decoration: none;
		  padding: 20px 30px;
		  border-radius: 5px;
		  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
		  background-color: #fff;
		  color: #333;
		  transition: all 0.3s ease-in-out;
		}
		
		a:hover {
		  transform: translateY(-5px);
		  box-shadow: 0 8px 10px rgba(0, 0, 0, 0.2);
		}
	</style>
</head>
<body>
	<h1>请选择支付方式：</h1>
	<ul>
		<li>
			<a href="pay_wechat.html">
				Wechat to pay
			</a>
		</li>
		<li>
			<a href="pay_alipay.html">
				Alipay 
			</a>
		</li>
		<li>
			<a href="pay_paypal.html">
				PayPal
			</a>
		</li>
	</ul>
</body>
</html>
