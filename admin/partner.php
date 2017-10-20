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
                  <a href="#">Services</a>
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


            <th>Id</th>
            <th>Link</th>
            <th>Slika</th>
            <th>Change</th>
            <th>delete</th>
              </tr>
              <?php $upit6="SELECT * FROM partneri";
              $rez1=$conn->query($upit6)or die("los");
              while($r23=mysqli_fetch_array($rez1)){
              echo "<tr><td>{$r23['id']}</td>";
              echo "<td>{$r23['link']}</td>";
              echo "<td><img src='../{$r23['slika']}' width='100px' height='100px'></td>";

                echo "<td><a href='delete.php?idr={$r23['id']}'>Delete</a></td>";


            echo "</tr>";
              } ?>

          </table>
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
