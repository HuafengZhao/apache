

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet"  href="./lib/css/bootstrap.min.css"/>
    <script type="text/javascript" src="./lib/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./lib/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #f1f1f1;
            font-family: Arial, sans-serif;
        }
        .form_login {
            margin: 100px auto;
            padding: 40px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.2);
            max-width: 600px;
        }
        .form_login h1 {
            font-size: 36px;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }
        .form_login input[type="text"],
        .form_login input[type="password"] {
            width: 100%;
            height: 50px;
            padding: 10px;
            border: none;
            border-bottom: 1px solid #ccc;
            background-color: #f1f1f1;
            font-size: 18px;
            color: #333;
            margin-bottom: 30px;
            box-shadow: none;
            transition: all 0.3s ease-in-out;
        }
        .form_login input[type="text"]:focus,
        .form_login input[type="password"]:focus {
            background-color: #fff;
            border-bottom: 2px solid #555;
            box-shadow: none;
        }
        .form_login input[type="submit"] {
            width: 100%;
            height: 70px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: gold;
            font-size: 24px;
            color: #fff;
            margin-top: 30px;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }
        .form_login input[type="submit"]:hover {
            background-color: #333;
        }
        .form_login span {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #555;
        }
        .form_login a {
            color: #555;
            text-decoration: none;
        }
        .form_login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<a href='./index.php'>RETURN HOMEPAGE </a>
<form action="./login_success_fail.php" method="post" class="form_login">
    <div><h1>LOG IN</h1></div>
    <input type="text" placeholder="USERNAME" name="login_name">
    <input type="password" placeholder="PASSWORD" name="login_password">
    <input type="reset" value="Forget password ?">
    <input type="submit" value="LOG IN" name="userSubmit">
    <span><a href="./register.php">TO REGISTER</a></span>
</form>
</body>
</html>
