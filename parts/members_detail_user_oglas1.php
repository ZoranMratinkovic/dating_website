<section class="banner_area profile_banner">
            <div class="profiles_inners">
                <div class="container">
                    <div class="profile_content">
                        <div class="user_img">
                            <img class="profilnaSlika img-circle" src="<?php echo $slika; ?>" alt="">
                        </div>
                        <div class="user_name">
                            <h3><?php echo $name; ?></h3>
                            <ul>
                                <li><a href="#"><?php echo $drzava; ?>, <?php echo $kanton; ?></a></li>
                                <li><a href="#"><?php echo $brak; ?></a></li>
                                <form action='' id='ChangeProfilePicture' method='post' enctype='multipart/form-data'>
                                    <span class="btn btn-default btn-file">
                                        Profil Bild ändern<input type="file" id='ChangeProfilePic' name='ChangeProfilePic'>

                                    </span>
                                    <input type="submit" name="SubmitProfileChange" id='SubmitProfileChange' class='none btn btn-default' value='Submit'>
                                    <?php
                                           if(isset($_POST['SubmitProfileChange'])&& isset($_FILES['ChangeProfilePic']['tmp_name']))
                                           {
                                                   $ime_slike = $_FILES['ChangeProfilePic']['name'];
                                                   $tmp = $_FILES['ChangeProfilePic']['tmp_name'];
                                                   $target_dir = "img/";
                                                   $resized_dir = "/profiles";

                                                   include('functions.php');

                                                   $dest = upload_img($ime_slike,$tmp,$target_dir,$resized_dir);
                                                   if($dest)
                                                   {
                                                        $d = compress($target_dir.$ime_slike,$target_dir.$resized_dir."/".$ime_slike, 80, 130);
                                                        $sqlUpit = "UPDATE user_oglas SET profilna_slika = ? WHERE id_user = ?";
                                                        $id_user_girl = (int)$_SESSION['id'];

                                                       include('connectionFile/connection.php');

                                                       $stmtInsert = $conn->prepare($sqlUpit);
                                                       $stmtInsert->bind_param('si',$d,$id_user_girl);
                                                       $stmtInsert->execute();

                                                       if($stmtInsert)
                                                       {
                                                          echo "<script>alert('uspeh');</script>";
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


                                           }

                                     ?>
                                </form>
                            </ul>
                        </div>
                        <div class="right_side_content">
                             <ul class="nav navbar-nav">
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                  <ul class="dropdown-menu">
                                    <?php include('create_album.php'); ?>
                                    <li><a class="popup-with-zoom-anim" href="#create-album">Album erstellen</a></li>
                                  </ul>
                                </li>
                              </ul>

                            <a href='update_info.php?idgirla=<?php echo $_SESSION['id']; ?>' class="buttonChangeInfo btn form-control login_btn lgnBtn">Informationen Aktulisieren</a>
                       </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Blog grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="members_profile_inners">
                            <ul class="nav nav-tabs profile_menu" role="tablist">
                                <li role="presentation"><a href="#sites" aria-controls="sites" role="tab" data-toggle="tab">Teff Location</a></li>
                                <li role="presentation" class="active"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Personal Informationen</a></li>
                                <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Details</a></li>


                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="activity">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Geschlecht</a></li>
                                            <li><a href="#">Alter</a></li>
                                            <li><a href="#">Land</a></li>
                                            <li><a href="#">Stadt</a></li>
                                            <li><a href="#">Geburtstag</a></li>
                                            <li><a href="#">Beziehungsstatus</a></li>
                                            <li><a href="#">Interessiert an</a></li>
                                            <li><a href="#">Herkunft</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $tip; ?></a></li>

                                            <li><a href="#"><?php echo $drzava; ?></a></li>
                                            <li><a href="#"><?php echo $kanton; ?></a></li>
                                            <li><a href="#"><?php echo $datum; ?></a></li>
                                            <li><a href="#"><?php echo $brak; ?></a></li>
                                            <li><a href="#"><?php echo $trazim; ?></a></li>
                                            <li><a href="#"><?php echo $poreklo; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Augenfarbe</a></li>
                                            <li><a href="#">Haarfarbe</a></li>
                                            <li><a href="#">Haarlänge</a></li>
                                            <li><a href="#">Körbchengrösse</a></li>
                                            <li><a href="#">Oberweite</a></li>
                                            <li><a href="#">Grösse</a></li>
                                            <li><a href="#">Gebaut</a></li>
                                            <li><a href="#">Brille/Kontaktlinzen</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $boja_ociju; ?></a></li>
                                            <li><a href="#"><?php echo $boja_kose; ?></a></li>
                                            <li><a href="#"><?php echo $duz_kose; ?></a></li>
                                            <li><a href="#"><?php echo $brus; ?></a></li>
                                            <li><a href="#"><?php echo $oberweite; ?></a></li>
                                            <li><a href="#"><?php echo $visina; ?></a></li>
                                            <li><a href="#"><?php echo $gradja; ?></a></li>
                                            <li><a href="#"><?php echo $naoc; ?></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Sex Orientierung</a></li>
                                            <li><a href="#">Was ich mag</a></li>
                                            <li><a href="#">Was erwate ich</a></li>
                                            <li><a href="#">Kategor</a></li>

                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $sex_orj; ?></a></li>
                                            <li><a href="#"><?php echo $tvoja_ul; ?></a></li>
                                            <li><a href="#"><?php echo $njeg_uloga; ?></a></li>
                                            <li><a href="#"><?php echo $kategorija; ?></a></li>

                                        </ul>

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="sites">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Kanton</a></li>
                                            <li><a href="#">Stadt</a></li>
                                            <li><a href="#">Studio Name</a></li>
                                            <li><a href="#">Location Name</a></li>
                                            <li><a href="#">Klinge</a></li>
                                            <li><a href="#">Adresse</a></li>

                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $drzava; ?></a></li>
                                            <li><a href="#"><?php echo $kanton; ?></a></li>
                                            <li><a href="#"><?php echo $studio_name; ?></a></li>
                                            <li><a href="#"><?php echo $location_name; ?></a></li>
                                            <li><a href="#"><?php echo $interfon; ?></a></li>
                                            <li><a href="#"><?php echo $ulica; ?></a></li>

                                        </ul>
                                        <ul>
                                             <li><a href="#">Wohnungs zustand</a></li>
                                            <li><a href="#">Platz</a></li>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Email</a></li>
                                            <li><a href="#">Telefonnummer</a></li>
                                            <li><a href="#">Website</a></li>

                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $sredjenost; ?></a></li>
                                            <li><a href="#"><?php echo $platz; ?></a></li>
                                            <li><a href="#"><?php echo $name; ?></a></li>
                                            <li><a href="#"><?php echo $email; ?></a></li>
                                            <li><a href="#"><?php echo $tel; ?></a></li>
                                            <li><a href="#"><?php echo $link; ?></a></li>

                                        </ul>
                                    </div>
                                </div>


                            </div>
                            <div class="members_about_box">
                                <h4 class='text-center'>About me</h4>
                                <p><?php echo $opis; ?></p>
                            </div>
                            <div class="members_about_box">
                                <div class="row text-center">
                                    <?php
                                        include('functions.php');
                                       
                                            $id_userr = (int)$_SESSION['bordel_girl']; 

                                        if(isset($_SESSION['id_uloga']) && $_SESSION['id_uloga']==5)
                                        {
                                            show_video($id_userr);
                                        }
                                        else
                                        {

                                            echo "<div class='alert alert-danger'>
                                                    <h5><strong>Go premium!</strong> Hollen sie sich jetzt Ihren Premium account und laden sie Videos hoch</h5>&nbsp
                                                    <a href='#' class='btn btn-danger btn-lg'>Go premium</a>
                                                  </div>";

                                        }
                                     ?>
                                </div>



                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">

                            <?php
                                list_of_albums($id_userr);
                             ?>
                            <!--<aside class="s_widget recent_post_widget">
                                <div class="s_title">
                                    <h4>Recent Post</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-2.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Standard Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                                <div class="media">
                                    <div class="media-left">
                                        <img src="img/blog/recent-post/recent-post-3.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h4>Blog Image Post</h4>
                                        <a href="#">14 Sep, 2016 at 08:00 Pm</a>
                                    </div>
                                </div>
                            </aside>-->
                            <aside class="s_widget social_widget">
                                <div class="s_title">
                                    <h4>Tags</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
