<?php

	$host = "localhost";
	$root = "root";
	$pass = "";
	$db = "izlasci";
	$conn= mysqli_connect($host,$root,$pass,$db);
	if(!$conn){
		echo "Connection problem: " . mysqli_connect_errno() . PHP_EOL();;
	}
mysqli_set_charset($conn,"utf8");

 ?>
