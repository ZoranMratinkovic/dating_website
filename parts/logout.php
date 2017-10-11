<?php
	session_start();
	ob_start();
	if (isset($_SESSION['username']))
	{
		 unset($_SESSION['useername']);
	     unset($_SESSION['id']);
	     unset($_SESSION['id_uloga']);

		header("Location: index.php");
	}
	else
	{
		header("Location: index.php");
	}
 ?>
