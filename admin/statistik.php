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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
          <ul class="sidebar-nav">
              <li class="sidebar-brand">
                  <a href="../index.php">
                      Back to home
                  </a>

              </li>
              <li>
                <a href="logout.php">
                    logout
                </a>
              </li>
              <li>
                  <a href="users.php">Users</a>
              </li>
              <li>
                  <a href="anbieter.php">Anbieter</a>
              </li>
              <li>
                  <a href="statistik.php">Statistik</a>
              </li>
              <li>
                  <a href="premium.php">premium user</a>
              </li>
              <li>
                  <a href="anbieterpremium.php">anbieterpremium</a>
              </li>
              <li>
                  <a href="partner.php">Banner</a>
              </li>
              <li>
                  <a href="newpartner.php">Banner</a>
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
                    <div class="col-lg-12">
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
                <th>Anbieter</th>
                <th>Users</th>
                <th>Admins</th>
                <th>Premium Account</th>
                <th>Total User</th>

              </tr>
                <?php echo "<tr>";
          $upitbroj="SELECT * FROM user_oglas";
          $rezupit=$conn->query($upitbroj) or die('los upit');
          $broj=mysqli_num_rows($rezupit);
          echo "<td>".$broj."</td>";
          $upitbroj="SELECT * FROM user";
          $rezupit=$conn->query($upitbroj) or die('los upit');
          $broj1=mysqli_num_rows($rezupit);
          echo "<td>".$broj1."</td>";
          $upitbroj="SELECT * FROM user where id_user_uloga=3";
          $rezupit=$conn->query($upitbroj) or die('los upit');
          $broj2=mysqli_num_rows($rezupit);
          echo "<td>".$broj2."</td>";
          $upitbroj="SELECT * FROM user where id_user_uloga=4";
          $rezupit=$conn->query($upitbroj) or die('los upit');
          $broj4=mysqli_num_rows($rezupit);
          echo "<td>".$broj4."</td>";
          $sve=$broj1+$broj2+$broj+$broj4;
              echo "<td>".$sve."</td>";


              echo "</tr>"; ?>



            </table>
            </form>
          </form>
    </div>
    <!-- /#wrapper -->

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
