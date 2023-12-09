<!doctype html>
<html>
<head>
    <title>My Admin System - Login</title>
</head>
<body>
    <h1>My Admin System</h1>
		<?php
		header("Content-type:text/html; charset=utf-8");
		include './connect.php';
		// Retrieve table name from GET request
		$table_name = mysqli_real_escape_string($link, $_GET['table']);
		
		// Write SQL statement to select all information from chosen table
		$sql = "SELECT * FROM $table_name";
		$num=0;
		// Execute the query and store the result
		$result = mysqli_query($link, $sql);
		
		// If the query returned any results, display them
		if (mysqli_num_rows($result) > 0) {
		    // Output data of each row
		    echo '<h2>infomation</h2>';
		    while($row = mysqli_fetch_assoc($result)) {
		        if ($table_name == 'member') {
		            echo "
		              - NUM.: " . ($num=$num+1) . "
		              - USERNAME: " . $row["username"]."
		              - AGE: " . $row["age"]."
		              - EMAIL: " . $row["email"]."
		              - GENDER: " . $row["gender"]. "
		              - PASSSWORD: " . $row["password"] ."
		              <br>
		             ";
		             
		        } else {
		        	 if($arr=mysqli_fetch_array($res,MYSQLI_ASSOC)){
			    													echo "<a href='./goods_mysql_delete.php?id=" . $arr['id'] . "'>DELETE IT</a>";
	                                                            };
//		            echo "<a href="./goods_mysql_delete.php?id=' .$arr['id']. '">DELETE IT</a>"  
//		            echo "<a href='./goods_mysql_delete.php?id=" . $arr['id'] . "'>DELETE IT</a>";

		            echo "
		            
		                - NUM.: " . ($num=$num+1) ."
		            	- Name: " . $row["name"]." 
		            	- info: " . $row["info"]."
		            	<br>

		            	 ";
		        }
		    }
		} else {
		    echo "No results found in table '$table_name'";
		}
		
		// Close connection
		mysqli_close($link);
		?>

</body>
</html>

