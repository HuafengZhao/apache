
<?php
session_start();
session_destroy();
echo "<a href='./login.php'>PLEASE LOGIN </a>";
echo "</br>";
echo "<a href='./index.php'>RETURN HOMEPAGE </a>";
?>
