<!doctype html>
<html>
<head>
    <title>My Admin System - Login</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #1a75ff;
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #c2c2c2;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 3px;
            background-color: #f2f2f2;
            font-size: 16px;
            color: #333;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #1a75ff;
            color: #fff;
            font-size: 18px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0052cc;
        }
    </style>
</head>
<body>
    <h1>My Admin System</h1>
    <form action="admin verify.php" method="post">
        <label for="userName">Username:</label>
        <input type="text" name="userName" id="userName" />

        <label for="userPass">Password:</label>
        <input type="password" name="userPass" id="userPass" />

        <input type="submit" name="userSubmit" value="Login" />
    </form> 
</body>
</html>
