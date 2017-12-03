<?php
session_start();
    include("../connectionFile/connection.php");
 if(isset($_SESSION['id_uloga'])==6){ ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Simple Sidebar - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <!-- Icon css link -->
    <link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="vendors/linears-icon/style.css" rel="stylesheet">

    <!-- RS5.0 Layers and Navigation Styles -->
    <link rel="stylesheet" type="text/css" href="../vendors/revolution/css/layers.css">
    <link rel="stylesheet" type="text/css" href="../vendors/revolution/css/navigation.css">
    <link rel="stylesheet" type="text/css" href="../vendors/revolution/css/settings.css">

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/image-dropdown/dd.css" rel="stylesheet">
    <link href="../vendors/image-dropdown/flags.css" rel="stylesheet">
    <link href="../vendors/image-dropdown/skin2.css" rel="stylesheet">
    <link href="../vendors/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="../vendors/bootstrap-selector/bootstrap-select.css" rel="stylesheet">
    <link href="../vendors/bootstrap-datepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../vendors/owl-carousel/assets/owl.carousel.css" rel="stylesheet">
    <link href="../vendors/animate-css/animate.css" rel="stylesheet">
    <link href="../vendors/bs-tooltip/jquery.webui-popover.css" rel="stylesheet">
    <link href="../vendors/jquery-ui/jquery-ui.css" rel="stylesheet">

    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

    <script src="js/map-custome.js"></script>



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php include("menu_others.php"); ?>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a href="../index.php">
                      Deine Inserate
                  </a>

              </li>
              <li>
                <a href="logout.php">
                    logout
                </a>
              </li>
              <li>
                  <a href="anbieter.php">Dein bordel</a>
              </li>

              <li>
                  <a href="register.php">Neues Girl</a>
              </li>

          </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row margintp">
                    <div class="col-lg-12">
                        <h1>Dein Bordel</h1>

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Aktion</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php include("footer.php"); ?>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
<?php }else{
  echo "<h1>no access</h1>";
} ?>
