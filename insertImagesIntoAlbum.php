<?php 
	  session_start();
	  $ime_slike = $_FILES['AlbumPictures']['name'];
      $tmp = $_FILES['AlbumPictures']['tmp_name'];
      $target_dir = "img/albums/";
      $resized_dir = "albums_resized";

      include('functions.php');

      $dest = upload_img($ime_slike,$tmp,$target_dir,$resized_dir);
      if($dest)
      {
          $d = compress($target_dir.$ime_slike,$target_dir.$resized_dir."/".$ime_slike, 80, 270);
          $sqlUpit = "INSERT INTO images VALUES(?,?,?)";
          $id_img = "";
          $slika = $target_dir.$ime_slike;
          include('connectionFile/connection.php');
                                                       
          $stmtInsert11 = $conn->prepare($sqlUpit);
          $stmtInsert11->bind_param('iss',$id_img,$slika,$d);
          $stmtInsert11->execute();

          if($stmtInsert11)
          {
	          $sqlUpit1 = "INSERT INTO album_image VALUES(?,?,?)";
	          $id_album_img = "";
	          $id_album = (int)($_GET['id_album']);
	          $last_id = $conn->insert_id;
	          include('connectionFile/connection.php');
	                                                       
	          $stmtInsert11 = $conn->prepare($sqlUpit1);
	          $stmtInsert11->bind_param('iis',$id_album_img,$id_album,$last_id);
	          $stmtInsert11->execute();

              echo "<script>location.href='members-detail.php?id_girl={$_SESSION['id']}';</script>";
          }
          else
          {
             echo "<script>alert('neuspeh');</script>";
          }
      }
       else
       {
        echo "<script>alert('Your picture already exists');</script>";
       }


 ?>