<?php

    $servername = "localhost";
	$username   = "root";
	$password   = "";
	$dbname     = "student";
	
	$conn = mysqli_connect("localhost", "root", "","student");
	if(!$conn)
	{
		echo "Database is not connected";
	}
	else{
		echo "Database is connected";
	}
?>