<?php
	session_start();
	ob_start();

	unset($_SESSION['username']);
	unset($_SESSION['id_uloga']);
	unset($_SESSION['id']);
	unset($_SESSION['age']);
		header("Location: ../index.php");


 ?>
