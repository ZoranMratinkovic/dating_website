<?php 
	session_start();
	if(isset($_SESSION['bordel_girl']))
	{
		if(isset($_POST['CreateAlbum']))
		{
			$album_name = $_POST['albumName'];
			$id_user_album = (int)($_SESSION['bordel_girl']);
			$id_album = "";
			$who_see = 0;
			if(isset($_POST['rb18']) && $_POST['rb18'] == "18")
			{
				$who_see = 18;
			}
			
			$insertAlbum = "INSERT INTO album VALUES(?,?,?,?)";
			include('../connectionFile/connection.php');
			$stmtInsertAlbum = $conn->prepare($insertAlbum);
			$stmtInsertAlbum->bind_param('issi',$id_album,$album_name,$who_see,$id_user_album);
			$stmtInsertAlbum->execute();

			if($stmtInsertAlbum)
			{
				echo "<script>location.href='../members-detail1.php?id_girl={$_SESSION['bordel_girl']}';</script>";
				
			}
			else
				echo "nije u redu";

		}
	}
	else
	{
		if(isset($_POST['CreateAlbum']))
		{
			$album_name = $_POST['albumName'];
			$id_user_album = (int)($_SESSION['id']);
			$id_album = "";
			$who_see = 0;
			if(isset($_POST['rb18']) && $_POST['rb18'] == "18")
			{
				$who_see = 18;
			}
			
			$insertAlbum = "INSERT INTO album VALUES(?,?,?,?)";
			include('../connectionFile/connection.php');
			$stmtInsertAlbum = $conn->prepare($insertAlbum);
			$stmtInsertAlbum->bind_param('issi',$id_album,$album_name,$who_see,$id_user_album);
			$stmtInsertAlbum->execute();

			if($stmtInsertAlbum)
			{
				echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
				
			}
			else
				echo "nije u redu";

		}
	}
	
 ?>