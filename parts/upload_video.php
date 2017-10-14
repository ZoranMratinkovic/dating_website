<?php
session_start();
if(isset($_POST['insertVideo']) && $_FILES['video1']['size']>0)
{
    $allowedExts = array("gif", "mp3", "mp4", "wma");
    $extension = pathinfo($_FILES['video1']['name'], PATHINFO_EXTENSION);

    if (($_FILES["video1"]["type"] == "video/mp4") || ($_FILES["video1"]["type"] == "audio/mp3") || ($_FILES["video1"]["type"] == "audio/wma") || ($_FILES["video1"]["type"] == "image/gif") && ($_FILES["video1"]["size"] < 20000) && in_array($extension, $allowedExts))
    {
      if ($_FILES["video1"]["error"] > 0)
      {
          echo "Return Code: " . $_FILES["video1"]["error"] . "<br />";
      }
      else
      {
         /* echo "Upload: " . $_FILES["video1"]["name"] . "<br />";
          echo "Type: " . $_FILES["video1"]["type"] . "<br />";
          echo "Size: " . ($_FILES["video1"]["size"] / 1024) . " Kb<br />";
          echo "Temp file: " . $_FILES["video1"]["tmp_name"] . "<br />";*/

        if (file_exists("../img/videos/" . $_FILES["video1"]["name"]))
        {
          echo "<script>alert('File exists!');</script>";
          echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
        }
        else
        {
            if(move_uploaded_file($_FILES["video1"]["tmp_name"],
            "../img/videos/" . $_FILES["video1"]["name"]))
            {
                $sqlUpit = "INSERT INTO videos VALUES(?,?,?)";
                $id_inserter = (int)$_SESSION['id'];
                $id_video = "";
                $path = "img/videos/".$_FILES["video1"]["name"];
                include('../connectionFile/connection.php');

                $stmtInsert = $conn->prepare($sqlUpit);
                $stmtInsert->bind_param('isi',$id_video,$path,$id_inserter);
                $stmtInsert->execute();

                if($stmtInsert)
                {
                   echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
                }
                else
                {
                    echo "<script>alert('neuspeh');</script>";
                }
            }

        }
      }
    }
    else
    {
      echo "<script>alert('Invalid file!');</script>";
       echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
    }
}
else
{
   echo "<script>location.href='../members-detail.php?id_girl={$_SESSION['id']}';</script>";
}

?>