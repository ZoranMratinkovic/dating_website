<?php   session_start();

 if(isset($_SESSION['id_uloga'])==4){
  include("../connectionFile/connection.php");
?>
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
    <link href="../vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="../css/font-awesome.min.css" rel="stylesheet">
    <link href="../vendors/linears-icon/style.css" rel="stylesheet">

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
                      Ihre Bordel
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
                  <a href="register.php">neues Girl</a>
              </li>
              <li>
                  <a href="contact.php">Contact</a>
              </li>
          </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margintp">
                        <h1>Simple Sidebar</h1>

                        <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        <form class="" action="#" method="post" enctype = "multipart/form-data">
            <table class='table table-bordered'>
              <tr>
                <th>id user</th>
                <th>email</th>
                <th>Name</th>
                <th>Username</th>
                <th>Datum</th>
                <th>Bild</th>
                <th>Status</th>
                <th>Profil bearbeiten</th>
                <th>profil ansehen</th>
                <th>Delete</th>
              </tr>
              <?php $upit="SELECT * from user_oglas i INNER JOIN uloga a on i.id_user_uloga = a.id_user_uloga where bordel=".$_SESSION['id'];
                    $rezupit=$conn->query($upit);
                    while($r=mysqli_fetch_array($rezupit)){
                      echo "<tr>
                              <td>{$r['id_user']}</td>
                              <td>{$r['email']}</td>
                              <td>{$r['umetnicko_ime']}</td>
                              <td>{$r['username']}</td>
                              <td>{$r['datum']}</td>
                              <td><img src='/{$r['profilna_slika']}' width='50px' height='50px'></td>
                              <td>{$r['uloga']}</td>
                              <td><a href='../update_info_admin.php?idgirla={$r['id_user']}'>bearbeiten</a></td>
                              <td><a href='../members-detail1.php?id_girl={$r['id_user']}&bordel=1'>Profil ansehen</a></td>
                              <td><a href='anbieter.php?idc={$r['id_user']}'>x</a></td>

                      </tr>";
                    }
                    if(isset($_GET['idc'])){

                      $upitdelete="DELETE FROM user_oglas where id_user=".$_GET['idc'];
                      $rezupitdel=$conn->query($upitdelete);
                      echo "<script>alert('user wurde gelöscht')</script>";
                        echo "<script>window.location.href = 'anbieter.php';</script>";
                    }
                    if(isset($_GET['idr'])){


                      $upit1="SELECT * from uloga";
                           $rezupit1=$conn->query($upit1);
                           $upit2="SELECT * FROM user_oglas where id_user=".$_GET['idr'];
                           $rezupit5=$conn->query($upit2) or die('losupit');
                             $ruser=mysqli_fetch_array($rezupit5);
                             echo "<form class='form-control' action='anbieter.php' method='post'>";
                           echo "<h3>username: ".$ruser['username']."</h3>";

                      echo "<select class='form-control' name='uloga' style='width:30%;'>";

                          while($r1=mysqli_fetch_array($rezupit1)){
                        echo "<option value='{$r1['id_user_uloga']}'>{$r1['uloga']}</option>";
                      }
                      echo "</select>";
                      echo "<input type='submit' class='btn' name='change' value='Status ändern'></form>";
                      if(isset($_POST['change'])){
                        $uloga=$_POST['uloga'];
                        $upitupdate="UPDATE user_oglas SET id_user_uloga=$uloga where id_user=".$_GET['idr'];
                        $rezupitupdate=$conn->query($upitupdate)or die('loseee uptade');
                        echo "<script>alert('status wurde gändert!')</script>";
                        echo "<script>window.location.href = 'anbieter.php';
</script>";
                      }
                    }
               ?>


</form>
            </table>
          </form>
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
