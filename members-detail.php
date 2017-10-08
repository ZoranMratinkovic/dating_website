<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>VeroDate - Dating Social Network Website</title>

        <!-- Icon css link -->
        <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="vendors/linears-icon/style.css" rel="stylesheet">
        
        <!-- RS5.0 Layers and Navigation Styles -->
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/layers.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/navigation.css">
        <link rel="stylesheet" type="text/css" href="vendors/revolution/css/settings.css">
        
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="vendors/image-dropdown/dd.css" rel="stylesheet">
        <link href="vendors/image-dropdown/flags.css" rel="stylesheet">
        <link href="vendors/image-dropdown/skin2.css" rel="stylesheet">
        <link href="vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
        <link href="vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
        <link href="vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
        <link href="vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
        <link href="vendors/animate-css/animate.css" rel="stylesheet">
        <link href="vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
        <link href="vendors/jquery-ui/jquery-ui.css" rel="stylesheet">
        
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php 
        if(isset($_GET['id_girl']))
        {
            /*Ne zaboravi da proveris id girl*/
            include('connectionFile/connection.php');
            $id_girl = (int)$_GET['id_girl'];
         
           $sqlGirl = "SELECT * FROM user_oglas ug INNER JOIN boja_kose bk ON ug.id_boja_kose = bk.id_boja_kose INNER JOIN boja_ociju bo ON ug.id_boja_ociju = bo.id_boja_ociju INNER JOIN brak_status bs ON ug.id_brak_status = bs.id_brak_status INNER JOIN brus br ON ug.id_brus = br.id_brus INNER JOIN drzava drz ON ug.id_drzava = drz.id_drzava INNER JOIN duzina_kose dk ON ug.id_duz_kose=dk.id_duz_kose INNER JOIN gradja g on ug.id_gradja = g.id_gradja INNER JOIN kanton k ON ug.id_kanton=k.id_kanton INNER JOIN user_kat uk on ug.id_user = uk.id_user INNER JOIN kategorije kat on uk.id_kat = kat.id_kat INNER JOIN kome_se_pojavljuje kms ON ug.id_kome_pojavljuje = kms.id_kome_pojavljuje INNER JOIN njegova_uloga nju ON ug.id_njeg_uloga = nju.id_njeg_uloga INNER JOIN nocare_sociva naocs ON ug.id_naocare_sociva = naocs.id_naocare_sociva INNER JOIN oberweite ober ON ug.id_oberweite = ober.id_oberweite INNER JOIN poreklo po ON ug.id_rasa = po.id_poreklo INNER JOIN sex_orj sex ON ug.id_sex_orj = sex.id_sexorj INNER JOIN sredjenost sredj ON ug.id_sredjenost = sredj.id_sredjenost INNER JOIN status_gold sg ON ug.id_status_gold = sg.id_status INNER JOIN tip tp ON ug.id_tip = tp.id_tip INNER JOIN trazim traz ON ug.id_trazim = traz.id_trazim INNER JOIN tvoja_uloga tu ON ug.id_tvoja_uloga = tu.id_tvoja_uloga WHERE ug.id_user =? GROUP BY uk.id_user";
           
           

            $stm = $conn->prepare($sqlGirl);
            $stm->bind_param("i",$id_girl);
            $stm->execute();
            if($stm)
            {
                if($rez=$stm->get_result())
                { 
                    while($row=$rez->fetch_assoc())
                    {
                         $name = $row['umetnicko_ime'];
                         $datum = $row['datum'];
                         $boja_kose = $row['boja_kose'];
                         $boja_ociju = $row['boja_ociju'];
                         $brak = $row['brak_status'];
                         $brus = $row['naziv_brus'];
                         $drzava = $row['naziv'];
                         $duz_kose = $row['duzina_kose'];
                         $gradja = $row['naziv_gradja'];
                         $kanton = $row['naziv_kanton'];
                         $kategorija = $row['kategorija'];
                         $ko_vidi = $row['naziv_pojava'];
                         $njeg_uloga = $row['naziv_njeg_uloga'];
                         $naoc = $row['naziv_naoc_soc'];
                         $oberweite = $row['oberweite'];
                         $poreklo = $row['naziv_poreklo'];
                         $sex_orj = $row['naziv_sexorj'];
                         $sredjenost = $row['sredjenost'];
                         $status = $row['status'];
                         $tip = $row['naziv_tip'];
                         $trazim = $row['Naziv'];
                         $tvoja_ul = $row['naziv_tvoja_uloga'];
                         $email = $row['email'];
                         $title = $row['title'];
                         $opis = $row['opis'];
                         $visina = $row['visina'];
                         $ulica = $row['ulica'];
                         $platz = $row['platz'];
                         $tel = $row['tel'];
                         $interfon = $row['interfon'];
                         $link = $row['link'];
                         $video = $row['video'];
                         $slika = $row['profilna_slika'];
                         $studio_name = $row['studio_name'];
                         $location_name = $row['location_name'];
                    }

                }
            }
            else
            {
                echo "<script>alert('nije izvrseno');</script>";
            }
        }
        else
        {
            echo "<script>alert('nije je');</script>";
        }
     ?>
        
        <!--================ login.php =================-->
            <?php include('parts/login.php'); ?>
       <!--================ login.php =================-->

        <!--================ Registration.php =================-->
            <?php include('parts/registration.php'); ?>
        <!--================ Registration.php =================-->

        <!--================Frist Main hader Area =================-->
            <?php include('parts/menu.php'); ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
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
                            </ul>
                        </div>
                        <div class="right_side_content">
                             <ul class="nav navbar-nav">
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-ellipsis-h"></i></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Another action</a></li>
                                  </ul>
                                </li>
                              </ul>
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Add Friend <img src="img/user.png" alt=""></button>
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Chat Now <img src="img/comment.png" alt=""></button>
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
                                <li role="presentation" class="active"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">Personal Information</a></li>
                                <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Activity</a></li>
                                <li role="presentation"><a href="#sites" aria-controls="sites" role="tab" data-toggle="tab">Contact Information</a></li>
                               
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active fade in" id="activity">
                                    <div class="profile_list">
                                        <ul>
                                            <li><a href="#">Gender</a></li>
                                            <li><a href="#">Age</a></li>
                                            <li><a href="#">Country</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Birthday</a></li>
                                            <li><a href="#">Relationship</a></li>
                                            <li><a href="#">Looking for a</a></li>
                                            <li><a href="#">Race</a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#"><?php echo $tip; ?></a></li>
                                            <li><a href="#">26 years old</a></li>
                                            <li><a href="#"><?php echo $drzava; ?></a></li>
                                            <li><a href="#"><?php echo $kanton; ?></a></li>
                                            <li><a href="#"><?php echo $datum; ?></a></li>
                                            <li><a href="#"><?php echo $brak; ?></a></li>
                                            <li><a href="#"><?php echo $trazim; ?></a></li>
                                            <li><a href="#"><?php echo $poreklo; ?></a></li>
                                        </ul>
                                        <ul>
                                            <li><a href="#">Eye Color</a></li>
                                            <li><a href="#">Hair Color</a></li>
                                            <li><a href="#">Hair Length</a></li>
                                            <li><a href="#">Bra Size</a></li>
                                            <li><a href="#">Oberweite</a></li>
                                            <li><a href="#">Height</a></li>
                                            <li><a href="#">Shape</a></li>
                                            <li><a href="#">Glasses</a></li>
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
                                            <li><a href="#">Sex Orientation</a></li>
                                            <li><a href="#">My Role</a></li>
                                            <li><a href="#">Partner's Role</a></li>
                                            <li><a href="#">Services</a></li>
                                            
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
                                            <li><a href="#">State</a></li>
                                            <li><a href="#">City</a></li>
                                            <li><a href="#">Studio Name</a></li>
                                            <li><a href="#">Location Name</a></li>
                                            <li><a href="#">Appartment</a></li>
                                            <li><a href="#">Street Address</a></li>
                                            
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
                                             <li><a href="#">Sredjenost</a></li>
                                            <li><a href="#">Platz</a></li>
                                            <li><a href="#">Name</a></li>
                                            <li><a href="#">Email</a></li>
                                            <li><a href="#">Phone Number</a></li>
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
                                <h4>About me</h4>
                                <p><?php echo $opis; ?></p>
                            </div>
                            <div class="members_about_box">
                                <h4>Looking For</h4>
                                <h5>Man, 27 years and older</h5>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <aside class="s_widget photo_widget">
                                <div class="s_title">
                                    <h4>Photo</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>
                                <ul>
                                    <li><a href="#"><img src="img/photo/photo-1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-6.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-7.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-8.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="img/photo/photo-9.jpg" alt=""></a></li>
                                </ul>
                            </aside>
                            <aside class="s_widget recent_post_widget">
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
                            </aside>
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
        <!--================End Blog grid Area =================-->
        
        <!--================Footer Area =================-->
        <footer class="footer_area">
            <div class="footer_widgets_area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="vero_widget">
                                    <h4><span>Vero</span>Date</h4>
                                    <p>There are many variations of passag-es of Lorem Ipsum available, but the majority have suffered alteration in some form.</p>
                                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything .</p>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Information</h3>
                                </div>
                                <div class="information_widget">
                                    <ul>
                                        <li><a href="#">About us</a></li>
                                        <li><a href="#">Contact us</a></li>
                                        <li><a href="#">Membership</a></li>
                                        <li><a href="#">Private Policy</a></li>
                                        <li><a href="#">Forum Support</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Recent posts</h3>
                                </div>
                                <div class="recent_post_widget">
                                    <ul>
                                        <li><a href="#">Blog Standard Post <span>14 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Image Post <span>12 Sep, 2016</span></a></li>
                                        <li><a href="#">BlogVideo Post <span>08 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Audio  Post <span>03 Sep, 2016</span></a></li>
                                        <li><a href="#">Blog Standard Post <span>16 Aug, 2016</span></a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                        <div class="col-md-3">
                            <aside class="f_widget">
                                <div class="f_widget_title">
                                    <h3>Newsletter Signup</h3>
                                </div>
                                <div class="newsletter_widget">
                                    <p>Get Alert Directly Into Your Inbox After Each Post.</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright_left">
                    <div class="copyright_text">
                        <h4>Copyright © 2017. <a href="#">VeroDate</a> . all rights reserved</h4>
                    </div>
                </div>
                <div class="copyright_right">
                    <div class="copyright_social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-flickr" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/counter-up/waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/tooltip/tooltip.js"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/progress-circle/circle-progress.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/costome-circle.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>