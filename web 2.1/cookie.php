<meta charset="utf-8">
<h1>论坛</h1>
<?php

if (isset($_COOKIE['name'])) {
    $username = $_COOKIE['name'];
    echo"Welcome，$username";
} else {
    echo"<a href ='./login.php'>Please login again </a>";
    
}


?>