<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>SODOM24 - Dating Social Network Website</title>

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
    <body class="contact_page">
<?php include('parts/menu.php'); ?>
<?php include('parts/registration.php'); ?>


        <!--================Frist Main hader Area =================-->

        <!--================Frist Main hader Area =================-->

        <!--================Banner Area =================-->

        <!--================End Banner Area =================-->

        <!--================Contact Address Area =================-->
        <section class="address_details margintp">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-1.png" alt="">
                            <h3>Address</h3>
                            <h4>44 Oak Meadow Street </h4>
                            <h4>Port Washington, NY 11050</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-2.png" alt="">
                            <h3>Phone</h3>
                            <h4>+880 167 6790690</h4>
                            <h4>+1800 7804063</h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="address_item">
                            <img src="img/soul-icon/address-3.png" alt="">
                            <h3>Email</h3>
                            <h4>rockybd1995@gmail.com</h4>
                            <h4>support@Verodate.com</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact Address Area =================-->

        <!--================Map Area =================-->

        <!--================End Map Area =================-->

        <!--================Contact From Area =================-->
        <section class="contact_form_area">
            <div class="container">
                <div class="welcome_title">
                    <h3>Kontakt</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="row">
                    <form action="contact_process.php" method="post" id="contactForm" class="form_inner">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-12">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <textarea id="comment" placeholder="Message" id="message" name="message" rows="1"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" value="LogIn" class="btn form-control login_btn">Submit</button>
                        </div>
                    </form>
                    <div id="success">
                        <p>Your text message sent successfully!</p>
                    </div>
                    <div id="error">
                        <p>Sorry! Message not sent. Something went wrong!!</p>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Contact From Area =================-->

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

        <!-- contact js -->
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/contact.js"></script>

        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="js/gmaps.min.js"></script>


        <script src="js/video_player.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>
