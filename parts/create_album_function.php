<?php 
	session_start();
	if(isset($_POST['CreateAlbum']))
	{
		$album_name = $_POST['albumName'];
		$id_user_album = (int)($_SESSION['id']);
		$id_album = "";
		
		$insertAlbum = "INSERT INTO album VALUES(?,?,?)";
		include('../connectionFile/connection.php');
		$stmtInsertAlbum = $conn->prepare($insertAlbum);
		$stmtInsertAlbum->bind_param('isi',$id_album,$album_name,$id_user_album);
		$stmtInsertAlbum->execute();

		if($stmtInsertAlbum)
		{
			echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
		}
		else
			echo "nije u redu";

	}
 ?>