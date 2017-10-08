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
       
        <!--================ login.php =================-->
            <?php include('parts/login.php'); ?>
        <!--================ login.php =================-->

        <!--================ Registration.php =================-->
            <?php include('parts/registration.php'); ?>
        <!--================ Registration.php =================-->
       
        <!--================Frist Main hader Area =================-->
            <?php include('parts/menu_others.php'); ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area banner_area2">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Members"><img class="left_img" src="img/banner/t-left-img.png" alt="">Members<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.html">Home</a>
                    <a href="">Community</a>
                    <a href="blog.html">Members</a>
                    <div class="advanced_search">
                        <div class="search_inner">
                            <div class="search_item">
                                <h5>I am a</h5>
                                <select class="selectpicker">
                                    <option>Man</option>
                                    <option>Woman</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>Seeking a</h5>
                                <select class="selectpicker">
                                    <option>Woman</option>
                                    <option>Man</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>From</h5>
                                <select class="selectpicker">
                                    <option>20</option>
                                    <option>28</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <h5>To</h5>
                                <select class="selectpicker">
                                    <option>28</option>
                                    <option>38</option>
                                </select>
                            </div>
                            <div class="search_item">
                                <button type="submit" value="LogIn" class="btn form-control login_btn">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Active Memebers Area =================-->
        <section class="actives_members mb-60">
            <div class="container">
                <div class="welcome_title">
                    <h3>All Members</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                   <?php 
                        if(isset($_GET['all_members']))
                        {
                              include('functions.php'); 
                              all_members();
                        }
                      
                   ?>
            </div>
        </section>
        
        <!--================End All Members Area =================-->
        
        <!--================Footer Area =================-->
        <?php include('parts/footer.php'); ?>
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
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>