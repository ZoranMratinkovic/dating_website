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