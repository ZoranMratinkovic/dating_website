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
                          <?php
                              switch ($id_user_uloga) {
                                case 5:
                                  $ul = "Premium";
                                  break;
                                case 2:
                                  $ul = "Free User";
                                  break;
                                case 7:
                                  $ul = "Gold User";
                                  break;
                                default:
                                  $ul = "User";
                                  break;
                              }
                           ?>
                           <button type="button" value="LogIn" class="btn form-control login_btn"><?php echo $ul; ?><img src="img/user.png" alt=""></button>
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
                                 <li role="presentation"><a href="#sites" aria-controls="sites" role="tab" data-toggle="tab">Tref Location</a></li>
                                <li role="presentation" class="active"><a href="#activity" aria-controls="activity" role="tab" data-toggle="tab">über mich</a></li>
                                <li role="presentation" ><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Details über mich</a></li>


                            </ul>
                            <div class="tab-content">
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
                                            <li><a href="#">26 years old</a></li>
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
                                        <ul id='profile_1'>
                                          <li><a href="#">Sex Orientierung</a></li>
                                          <li><a href="#">Was ich mag</a></li>
                                          <li><a href="#">Was erwate ich</a></li>
                                          <li><a href="#">Kategor</a></li>

                                        </ul>
                                        <ul id='profile_2'>
                                            <li><a href="#"><?php echo $sex_orj; ?></a></li>
                                            <li><a href="#"><?php echo $tvoja_ul; ?></a></li>
                                            <li><a href="#"><?php echo $njeg_uloga; ?></a></li>
                                            <li><a href="#">

                                              <?php for($i=0;$i<count($niz);$i++)
                                                    {
                                                      if(count($niz) == 1)
                                                      {
                                                        echo $niz[$i];
                                                      }
                                                      else
                                                        echo $niz[$i].",";

                                                    }
                                              ?>

                                            </a></li>

                                        </ul>

                                    </div>
                                </div>



                            </div>
                            <div class="cleaner"></div>
                            <div class="members_about_box">
                                <h4 class='text-center'>About me</h4>
                                  
                                  <p><?php echo $opis; ?></p>
                                  
                            </div>
                            <div class="members_about_box">
                                <div class="row text-center">
                                    <?php
                                        include('functions.php');
                                        $id_userr = (int)$_GET['id_girl'];

                                        show_video_reg_user($id_userr);
                                     ?>
                                </div>

                            </div>
                            <div class="banners">
                              <section class="adms_slider_area">
                                         <div class="container">
                                             <div class="">
                                                 <div class="adms_head">
                                                     <div class="col-md-12">
                                                         <div class="row left_adms">
                                                             <div class="pull-left">

                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="container">



                                                             <?php
                                                                 include("connectionFile/connection.php");

                                                                 $members = "SELECT * FROM partneri where status=2 ORDER BY RAND()  limit 8 ";
                                                                 $stmt = $conn->query($members);
                                                                 if($stmt)
                                                                 {
                                                                     while($row=mysqli_fetch_array($stmt))
                                                                     {

                                                                         echo "<div class='col-xs-6 col-md-3'>
                                                                             <div class='item'>
                                                                                 <div class='team_items'>
                                                                                     <a href='{$row['link']}'>
                                                                                         <img class='banner' src='{$row['slika']}' height='130px' width='100%' alt=''>
                                                                                     </a>
                                                                                 </div>
                                                                             </div>
                                                                             </div>
                                                                         ";
                                                                     }
                                                                 }
                                                                 else
                                                                 {
                                                                     echo "<script>alert('radi');</script>";
                                                                 }
                                                             ?>



                                             </div>
                                         </div>
                                     </section>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="right_sidebar_area">
                            <?php

                                list_of_albums_reg_user($id_userr);
                                //This functions will show albums to regular users, without form etc
                             ?>
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
