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
                  <a href="newpartner.php">new Banner</a>
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

            <?php if(isset($_POST['submit'])){
              $polje=$_POST['searchf'];
              echo $polje;
              $upit6="SELECT * FROM partneri where `email` LIKE '%".$polje."%' or `usr` LIKE '%".$polje."%'";
              $rez1=$conn->query($upit6)or die("los");
              echo "<h3>Search</h3><input type='text' name='searchf' value=''><input type='submit' value='Submit' name='submit' />";
              echo "  <table class='table table-bordered'>
                  <tr>


                  <th>Id</th>
                  <th>Link</th>
                  <th>Foto</th>
                  <th>Email</th>
                  <th>name</th>
                  <th>Staus</th>
                  <th>Aktiviren</th>
                  <th>deaktiviren</th>

                  <th>delete</th>
                    </tr>";
                    while($r23=mysqli_fetch_array($rez1)){
                    echo "<tr><td>{$r23['id']}</td>";
                    echo "<td>{$r23['link']}</td>";
                    echo "<td><img src='../{$r23['slika']}' width='100px' height='100px'></td>";


                        echo "<td>{$r23['email']}</td>";
                          echo "<td>{$r23['usr']}</td>";
                          if($r23['status']==1){
                            echo "<td>Deaktivert</td>";
                          }else
                          {
                            echo "<td>Aktiv</td>";
                          }


                            echo "<td><a href='partner.php?ida={$r23['id']}'>Aktiviren</a></td>";
                            echo "<td><a href='partner.php?idd={$r23['id']}'>Deaktiviren</a></td>";
                            echo "<td><a href='partner.php?idr={$r23['id']}'>Delete</a></td>";


                  echo "</tr>";
                    }
      if(isset($_GET['idr'])){
        $upit51 = "DELETE FROM partneri where id=".$_GET['idr'];
        $rezupit=$conn->query($upit51) or die("ba");
        echo "<script>window.location.href = 'partner.php';</script>";
      }
      if(isset($_GET['ida'])){
        $upit123="UPDATE partneri SET status=2 where id=".$_GET['ida'];
        $rezupit=$conn->query($upit123) or die("ba");
        echo "<script>window.location.href = 'partner.php';</script>";
      }
      if(isset($_GET['idd'])){
        $upit321="UPDATE partneri SET status=1 where id=".$_GET['idd'];
        $rezupit=$conn->query($upit321) or die("ba");
        echo "<script>window.location.href = 'partner.php';</script>";
      }



            } else{

          ?>
  <h3>Search</h3><input type="text" name="searchf" value=""><input type="submit" value="Search" name="submit" />
          <table class='table table-bordered'>
            <tr>


            <th>Id</th>
            <th>Link</th>
            <th>Foto</th>
            <th>Email</th>
            <th>name</th>
            <th>Staus</th>
            <th>Aktiviren</th>
            <th>deaktiviren</th>

            <th>delete</th>
              </tr>
              <?php $upit6="SELECT * FROM partneri";
              $rez1=$conn->query($upit6)or die("los");
              while($r23=mysqli_fetch_array($rez1)){
              echo "<tr><td>{$r23['id']}</td>";
              echo "<td>{$r23['link']}</td>";
              echo "<td><img src='../{$r23['slika']}' width='100px' height='100px'></td>";


                  echo "<td>{$r23['email']}</td>";
                    echo "<td>{$r23['usr']}</td>";
                    if($r23['status']==1){
                      echo "<td>Deaktivert</td>";
                    }else
                    {
                      echo "<td>Aktiv</td>";
                    }


                      echo "<td><a href='partner.php?ida={$r23['id']}'>Aktiviren</a></td>";
                      echo "<td><a href='partner.php?idd={$r23['id']}'>Deaktiviren</a></td>";
                      echo "<td><a href='partner.php?idr={$r23['id']}'>Delete</a></td>";


            echo "</tr>";
              }
if(isset($_GET['idr'])){
  $upit51 = "DELETE FROM partneri where id=".$_GET['idr'];
  $rezupit=$conn->query($upit51) or die("ba");
  echo "<script>window.location.href = 'partner.php';</script>";
}
if(isset($_GET['ida'])){
  $upit123="UPDATE partneri SET status=2 where id=".$_GET['ida'];
  $rezupit=$conn->query($upit123) or die("ba");
  echo "<script>window.location.href = 'partner.php';</script>";
}
if(isset($_GET['idd'])){
  $upit321="UPDATE partneri SET status=1 where id=".$_GET['idd'];
  $rezupit=$conn->query($upit321) or die("ba");
  echo "<script>window.location.href = 'partner.php';</script>";
}
               ?>

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
<?php   }}else{
  echo "<h1>no access</h1>";
} ?>
