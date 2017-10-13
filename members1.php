<?php   session_start(); ?>
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
        <section class="banner_area profilSlika">
            <div class="container">
                <div class="banner_content">
                    <h3 title="Blog"><img class="left_img" src="img/banner/t-left-img.png" alt="">Alle Nutzer<img class="right_img" src="img/banner/t-right-img.png" alt=""></h3>
                    <a href="index.php">Home</a>
                    <a href="blog.html">Members</a>
      
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Blog grid Area =================-->
        <section class="blog_grid_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 right_side">
                        <div class="row">
                            <div class="blog_grid_inner">
                             <?php
                                include('functions.php');
                                if(isset($_GET['category']) && preg_match("/^[0-9]{1,10}$/",$_GET['category']) && !isset($_POST['filterGirlsLeft']))
                                {
                                    $data = (int)$_GET['category'];
                                    $data = trim($data);
                                    $data = stripslashes($data);
                                    $data = htmlspecialchars($data);

                                    show_specific_category($data);
                                    //list girls from category - menu
                                }
                                else if(isset($_POST['filterGirlsLeft']))
                                {
                                    //search form on the ledt
                                    filter_girls_left();
                                }
                                else
                                {
                                     all_members_with_desc();
                                    //lists all members
                                }

                             ?>


                            </div>
                        </div>

                        <div class="pagination_area " id='Paginacija'>
                            <a class="prev" href="#">Previous</a>
                            <a class="arrow_left" href="#"><i class="fa fa-angle-left"></i></a>
                            <a class="arrow_right" href="#"><i class="fa fa-angle-right"></i></a>
                            <a class="next" href="#">Next</a>
                        </div>
                    </div>
                    <div class="col-md-3 right_side">
                        <div class="right_sidebar_area">
                            <aside class="s_widget categories_widget">
                            <form action='#' method='post'>

                                <div class="s_title">
                                    <h4>Kategorien</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>

                                <input type="text" name="tbCategory" id='tbCategory' class='form-control' autofocus onKeyUp='AjaxSearch(this.value);' autocomplete='off' placeholder='Type Category Name'>
                                <div id="ajaxUpis"></div>

                                <div class="s_title">
                                    <h4>Kanton</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>

                                <input type="text" name="tbKanton" id='tbKanton' class='form-control' autofocus onKeyUp='AjaxSearch1(this.value);' autocomplete='off' placeholder='Type Kanton Name'>
                                <div id="ajaxUpis1"></div>

                                <div class="s_title">
                                    <h4>Sexuelle Orientierung</h4>
                                    <img src="img/widget-title-border.png" alt="">
                                </div>

                                <select name='ddlSexOrj' id='ddlSexOrj' class='form-control'>
                                   <option value="">Auswählen</option>
                                    <?php
                                            include("connectionFile/connection.php");
                                            $query = "SELECT * FROM sex_orj";
                                            $rez = $conn->query($query);
                                            while($row = mysqli_fetch_array($rez))
                                            {

                                              echo "<option value='{$row['id_sexorj']}'>{$row['naziv_sexorj']}</option>";

                                            }
                                       ?>
                                </select>
                                <input type='submit' class="register_angkar_btn dugmeSearch" name="filterGirlsLeft" value='Find Now'>
                            </form>
                            </aside>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog grid Area =================-->

        <!--================Footer Area =================-->
        <?php include('parts/footer.php'); ?>
        <!--================End Footer Area =================-->



        <script type="text/javascript" src='js/our_script.js'></script>
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
         <script src="//netsh.pp.ua/upwork-demo/1/js/typeahead.js"></script>

    </body>
</html>
