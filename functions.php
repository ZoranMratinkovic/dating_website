<?php 
function all_members()
{
	$all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,k.naziv_kanton,bs.brak_status FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status";

	include('connectionFile/connection.php');

	$stmt = $conn->query($all_members);

	if($stmt)
	{
			while($row=mysqli_fetch_array($stmt))
			{
				echo " <div class='col-sm-2 col-xs-6'>
                        <div class='active_mem_item'>
                            <ul class='nav navbar-nav'>
                                <li class='dropdown tool_hover'>
                                <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><img class='AllMembersPic img-circle' src='{$row['profilna_slika']}' alt=''></a>
                                    <ul class='dropdown-menu'>
                                        <li>
                                            <div class='head_area'>
                                                <h4>{$row['umetnicko_ime']}</h4>
                                                <h4>{$row['title']}</h4>
                                            </div>
                                            <div class='media'>
                                                <div class='media-left'>
                                                    <img class='img-60x60 img-circle' src='{$row['profilna_slika']}' alt='' title=''>
                                                </div>
                                                <div class='media-body'>
                                                    <h6>29 years old <br> From {$row['naziv_kanton']} <br> {$row['brak_status']}</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>{$row['umetnicko_ime']}</h4>
                            <h5>{$row['title']}</h5>
                        </div>
                    </div>";
			}
	}
}
///All_members_with_desc function lists all members on members1.php
function all_members_with_desc()
{
    $all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,uo.opis,k.naziv_kanton,bs.brak_status FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status";

    include('connectionFile/connection.php');

    $stmt = $conn->query($all_members);

    if($stmt)
    {
            while($row=mysqli_fetch_array($stmt))
            {
                $opis = substr($row['opis'],0,strlen($row['opis'])/4);
                echo " <div class='col-md-4 col-sm-6'>
                                    <div class='blog_grid_item'>
                                        <div class='blog_grid_img '>
                                            <img src='{$row['profilna_slika']}' class='img-270x299' alt=''>
                                            <div class='blog_share_area '>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'><i class='fa fa-heart' aria-hidden='true'></i>95</a>
                                            </div>
                                        </div>
                                        <div class='blog_grid_content'>
                                            <h3>{$row['title']}</h3>
                                            <div class='blog_grid_date'>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['umetnicko_ime']}</a>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['datum']}</a>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['brak_status']}</a>
                                            </div>
                                            <p>{$opis}...</p>
                                            <a href='members-detail.php?id_girl={$row['id_user']}'>Get in touch<i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                </div>";
            }
    }
}
function show_specific_category($id_cat)
{
    $all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,uo.opis,k.naziv_kanton,bs.brak_status,kat.kategorija FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status INNER JOIN user_kat uk on uo.id_user = uk.id_user INNER JOIN kategorije kat on uk.id_kat = kat.id_kat WHERE kat.id_kat=?";

    include('connectionFile/connection.php');

    $stmt = $conn->prepare($all_members);
    $stmt->bind_param('i',$id_cat);
    $stmt->execute();
    if($stmt)
    {
        if($rez = $stmt->get_result())
        {
            $count = $rez->num_rows;
            if($count > 0)
            {
                while($row=$rez->fetch_assoc())
                {
                    $opis = substr($row['opis'],0,strlen($row['opis'])/4);
                    echo " <div class='col-md-4 col-sm-6 sa'>
                                        <div class='blog_grid_item'>
                                            <div class='blog_grid_img '>
                                                <img src='{$row['profilna_slika']}' class='img-270x299' alt=''>
                                                <div class='blog_share_area '>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'><i class='fa fa-heart' aria-hidden='true'></i>95</a>
                                                </div>
                                            </div>
                                            <div class='blog_grid_content'>
                                                <h3>{$row['title']}</h3>
                                                <div class='blog_grid_date'>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['umetnicko_ime']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['datum']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['brak_status']}</a>
                                                </div>
                                                <p>{$opis}...</p>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>Get in touch<i class='fa fa-angle-double-right'></i></a>
                                            </div>
                                        </div>
                                    </div>";
                }
            }
            else
            {
                        
                        echo "<div class='alert alert-danger'>
                            <h2>No results for that category!</h2>
                            </div>";
                        
            }
            
        }
    }

}
function filter_girls_left()
{
        include("connectionFile/connection.php");
        
        $sqlInv="SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,uo.opis,k.naziv_kanton,bs.brak_status,kat.kategorija FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status INNER JOIN user_kat uk on uo.id_user = uk.id_user INNER JOIN kategorije kat on uk.id_kat = kat.id_kat INNER JOIN sex_orj sr on uo.id_sex_orj =sr.id_sexorj WHERE 1";
               
                $cat = trim($_POST['tbCategory']);
                $cat = stripslashes($cat);
                $cat = htmlspecialchars($cat);

                $kanton1 = trim($_POST['tbKanton']);
                $kanton1 = stripslashes($kanton1);
                $kanton1 = htmlspecialchars($kanton1);

                $id_sex_orj = (int)($_POST['ddlSexOrj']);
                $id_sex_orj = stripslashes($id_sex_orj);
                $id_sex_orj = htmlspecialchars($id_sex_orj);
                if($_POST['tbCategory']!="" && preg_match("/^[a-zA-Z\s]{1,30}$/",$cat))
                {
                    $sqlInv.= " AND kat.kategorija = '{$cat}'";
                }
                if($_POST['tbKanton']!="" && preg_match("/^[a-zA-Z\s-]{1,30}$/",$kanton1))
                {
                    $sqlInv.= " AND naziv_kanton = '{$kanton1}'";
                }
                if(!empty($_POST['ddlSexOrj']) && preg_match("/^[0-9]{1,10}$/",$id_sex_orj))
                {
                    $sqlInv.= " AND uo.id_sex_orj =". $id_sex_orj;
                }
        
        $rez1 = $conn->query($sqlInv);
        if($rez1)
        {
            if(mysqli_num_rows($rez1) > 0)
            {
                while($row = mysqli_fetch_array($rez1))
                {                   

                                $opis = substr($row['opis'],0,strlen($row['opis'])/4);
                                    echo " <div class='col-md-4 col-sm-6 sa'>
                                        <div class='blog_grid_item'>
                                            <div class='blog_grid_img '>
                                                <img src='{$row['profilna_slika']}' class='img-270x299' alt=''>
                                                <div class='blog_share_area '>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'><i class='fa fa-heart' aria-hidden='true'></i>95</a>
                                                </div>
                                            </div>
                                            <div class='blog_grid_content'>
                                                <h3>{$row['title']}</h3>
                                                <div class='blog_grid_date'>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['umetnicko_ime']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['datum']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['brak_status']}</a>
                                                </div>
                                                <p>{$opis}...</p>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>Get in touch<i class='fa fa-angle-double-right'></i></a>
                                            </div>
                                        </div>
                                    </div>";
                }
            }
            else
            {
                            echo "<div class='alert alert-danger'>
                                    <h2>No results! Try again!</h2>
                                 </div>";
            }
            
        }
        else
        {
            echo "<div class='alert alert-warning'>
                                     <strong>Warning!</strong> No results for! Try again!
                  </div>";
        }

}	
function upload_img($name,$tmp,$target_dir,$resized_dir)
{
    $upload = 1;
    $imageFileType = pathinfo($target_dir.$name,PATHINFO_EXTENSION);
    
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG")
    {
        $upload = 0;
    }
    /*if(file_exists($target_dir.$name))
    {   
        $upload = 0;
    }*///ovo moras da promenis da se ne bi nalepilo jedno preko drugog
    if($upload == 1)
    {
        if(move_uploaded_file($tmp, $target_dir.$name))
        {
            return true;
        }
           
        else{
            echo "No success";
        }
    }
}

function compress($source, $destination, $quality, $w) {

    $info = getimagesize($source);
    if ($info['mime'] == 'image/jpeg') 
    {
        $image = imagecreatefromjpeg($source);
        
    }

    else if ($info['mime'] == 'image/gif') 
    {
        $image = imagecreatefromgif($source);
        
    }
      
    else if ($info['mime'] == 'image/png') 
    {
          $image = imagecreatefrompng($source);
    }

    list($width,$height) = getimagesize($source);
    
    $new_width = $w;
    $new_height = ($height/$width)*$new_width;

    $tmp = imagecreatetruecolor($new_width,$new_height);

    imagecopyresampled($tmp,$image,0,0,0,0,$new_width,$new_height,$width,$height);


     
   
    imagejpeg($tmp, $destination, $quality);

    return $destination;
}

function list_of_albums($id)
{
    /*$listALbums = "SELECT * FROM images i INNER JOIN album_image ai on i.id_image=ai.id_image INNER JOIN album a on ai.id_album = a.id_album WHERE a.id_user=?";*/
    $listAlbums = "SELECT * FROM album WHERE id_user = ?";
    include('connectionFile/connection.php');
    $i=0;
    $stmtAlbum = $conn->prepare($listAlbums);
    $stmtAlbum->bind_param('i',$id);
    $stmtAlbum->execute();
    $rez = $stmtAlbum->get_result();

        if($rez->num_rows > 0)//If she actually has an album, show it
        {
            
            while($row = $rez->fetch_assoc())
            {
                
                $listAlbumss = "SELECT * FROM `images` i INNER JOIN `album_image` ai ON i.id_image = ai.id_image INNER JOIN album a ON ai.id_album= a.id_album where ai.id_album={$row['id_album']}";
                
                $result = $conn->query($listAlbumss);
                
                if(mysqli_num_rows($result) > 0)
                {
                     echo "<aside class='s_widget photo_widget brd pad'>
                                <div class='s_title '>
                                    <h4>{$row['album_name']}</h4>
                                    <img src='img/widget-title-border.png' alt=''>
                                </div>
                                <ul class=''>";
               
                    while($row1 = mysqli_fetch_array($result))
                    {
                        echo "<li><a href='#'><img src='{$row1['image_src']}' alt=''></a></li>";
                    }

                    echo "</ul><br/><form action='insertImagesIntoAlbum.php?id_album={$row['id_album']}' method='post' enctype='multipart/form-data'>
                                    <input type='file' name='AlbumPictures'>
                                   <input type='submit' value='Insert' name='InsertPics{$i}' class='btn btn-lg dugmeSearch form-control' id='btnInsertAlbumImg'>
                                </form></aside>";
                }
                else
                {
                        //if she doesn't have an album, show her the form, to insert images
                        echo 
                            "
                                <h4>{$row['album_name']}</h4>
                                <img src='img/widget-title-border.png' alt=''>
                                <form action='insertImagesIntoAlbum.php?id_album={$row['id_album']}' method='post' enctype='multipart/form-data'>
                                    <input type='file' name='AlbumPictures'>
                                   <input type='submit' value='Insert' name='InsertPics{$i}' class='btn btn-lg dugmeSearch'>
                                </form>
                                <br/>
                            ";
                }
               
                 $i++;              
            }
           
        }


}
function list_of_albums_reg_user($id)
{
    //This functions will show albums to regular users, without form etc
    $listAlbums = "SELECT * FROM album WHERE id_user = ?";
    include('connectionFile/connection.php');
    $stmtAlbum = $conn->prepare($listAlbums);
    $stmtAlbum->bind_param('i',$id);
    $stmtAlbum->execute();
    $rez = $stmtAlbum->get_result();
        if($rez->num_rows > 0)//If she actually has an album, show it
        {
            
            while($row = $rez->fetch_assoc())
            {
                
                $listAlbumss = "SELECT * FROM `images` i INNER JOIN `album_image` ai ON i.id_image = ai.id_image INNER JOIN album a ON ai.id_album= a.id_album where ai.id_album={$row['id_album']}";
                
                $result = $conn->query($listAlbumss);
                
                if(mysqli_num_rows($result) > 0)
                {
                    if(isset($_SESSION['age']) && $_SESSION['age'] >= $row['age_type'])
                    {
                        //make sure that user_age and album age permission matches
                        echo "<aside class='s_widget photo_widget brd pad'>
                                <div class='s_title'>
                                    <h4>{$row['album_name']}</h4>
                                    <img src='img/widget-title-border.png' alt=''>
                                </div>
                                <ul>";
               
                        while($row1 = mysqli_fetch_array($result))
                        {
                            echo "<li><a href='#'><img src='{$row1['image_src']}' alt=''></a></li>";
                        }

                        echo "</ul></aside>";
                    }
                    else
                        echo "   <aside class='s_widget photo_widget brd pad'>
                                        <h3>{$row['album_name']}<h3>
                                        <img src='img/widget-title-border.png' alt=''>
                                        <h5>Users under 18 or unregistered users can't see this album!</h5>
                                  </aside>
                    ";  
                     
                }
                else
                {
                        //if she doesn't have an album, show her the form, to insert images
                        echo 
                            "  
                                <h4>{$row['album_name']}</h4>
                                <img src='img/widget-title-border.png' alt=''>
                                <form action='insertImagesIntoAlbum.php?id_album={$row['id_album']}' method='post' enctype='multipart/form-data'>
                                    <input type='file' name='AlbumPictures'>
                                   <input type='submit' value='Insert' name='InsertPics{$i}' class='btn btn-lg dugmeSearch'>
                                </form>
                              
                               
                            ";
                }
                          
            }
           
        }
        else
        {
            echo "<h3>No albums yet!</h3>";
            echo "<img src='img/widget-title-border.png' alt=''>";
        }


}

 ?>
