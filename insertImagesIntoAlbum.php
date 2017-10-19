<?php 
  	  session_start();
      if($_FILES['AlbumPictures']['size']<=0)
      {
        echo "<script>alert('First, you must choose a picture!');</script>";
        echo "<script>location.href='members-detail.php?id_girl={$_SESSION['id']}';</script>";
      }
      else
      {

        $ime_slike = $_FILES['AlbumPictures']['name'];
        $tmp = $_FILES['AlbumPictures']['tmp_name'];
        $target_dir = "img/albums/";
        $resized_dir = "albums_resized";
        include('functions.php');
        //uploads regular picture
        $dest = upload_img($ime_slike,$tmp,$target_dir,$resized_dir);
        
      

          $sqlUpit = "INSERT INTO images VALUES(?,?,?)";
          $id_img = "";
          $slika = $target_dir.$ime_slike;
          include('connectionFile/connection.php');
                                                       
          $stmtInsert11 = $conn->prepare($sqlUpit);
          $stmtInsert11->bind_param('iss',$id_img,$dest[0],$dest[1]);
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

  	  


 ?>