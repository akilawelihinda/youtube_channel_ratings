<?php
	$db=new mysqli("host_name","user_name","password","database_name");
	if (mysqli_connect_errno($db))
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
?>