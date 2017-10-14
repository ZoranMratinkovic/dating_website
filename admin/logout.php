<?php
	session_start();
	ob_start();

	unset($_SESSION['username']); 
	unset($_SESSION['id_uloga']);
	unset($_SESSION['id']);
		header("Location: ../index.php");


 ?>
