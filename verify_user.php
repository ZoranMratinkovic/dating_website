<?php 
	ob_start();
	function test_input($data)
    {
 		  $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }
	
	if(isset($_GET['hash']) && !empty($_GET['hash']) && isset($_GET['email']) && !empty($_GET['email']))
	{
		
		$get_hash = test_input(($_GET['hash']));
		$get_email = test_input(($_GET['email']));

		include("connectionFile/connection.php");
		
		$stmt = $conn -> prepare("UPDATE user_oglas SET status_verified=1 WHERE email=? AND hash_verified=?");
		$stmt -> bind_param("ss",$get_email,$get_hash);
		$stmt -> execute();
		
		if($stmt)
		{
			  echo"
                    <script>

                    		alert('Successfully verified!');
                    </script>";
			header("Location: index.php");
		}
		else
		{
			header("Location: index.php");
		}
	
		$stmt->close();
		mysqli_close($conn);
	}
	else
	{
		header("Location: index.php");
	}
 ?>