
<?php
  if(isset($_POST['logout']))
  {
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    unset($_SESSION['id_uloga']);
      unset($_SESSION['age']);
  }
  if(isset($_POST['logout']) && isset($_SESSION['bordel_girl']))
  {
    unset($_SESSION['bordel_girl']);
  }
?>

   <header class="header_menu_area">

            <nav class="navbar navbar-default">
                <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><img src="../img/logo-2.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu active">

                                <a href="../index.php">Home</a>

                        </li>
                        <li class="dropdown menu-large">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorien <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu row backg">
                                    <li class="col-sm-12">
                                          <ul>
                                  <?php $upitcat="SELECT * FROM kategorije ORDER BY kategorija";
                                  include("../connectionFile/connection.php");
                                  $rezupituser=$conn->query($upitcat)or die("los upit");;

                                  while($r1=mysqli_fetch_array($rezupituser))
                                  {
                                    echo "<a href='../members1.php?category={$r1['id_kat']}' class='nothing'><li style='width:20%'>".$r1['kategorija']."</li></a>";
                                  }
                             ?>
                                          </ul>
                                    </li>

                                </ul>

                            </li>


                                <li><a href="../members1.php">User</a></li>




                        </li>



                        <li><a href="../contact.php">Kontakt</a></li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                      <?php if(isset($_SESSION['username']))
                      {  $upit="SELECT * FROM user where user_id=".$_SESSION['id']."&& id_user_uloga=4";
                         $rezupit=$conn->query($upit) or die('los upit');
                         if(mysqli_num_rows($rezupit)==1){
                           echo "<li><a href='admin/admin.php'<i class='mdi mdi-key-variant'></i>Adminpanel</a></li>
                           <li><form method='post'><input type='submit' value='logout' class='btn-danger' name='logout' /></form></li>";

                         }else if($_SESSION['id_uloga']==2){
                          echo "<li><a href='members-detail.php?id_girl={$_SESSION['id']}'<i class='mdi mdi-key-variant'></i>".$_SESSION['username']."</a></li>
                          <li><form method='post'><input type='submit' value='logout' class='btn-danger' name='logout' /></form></li>
                          ";
                        }
                        else if($_SESSION['id_uloga']==6){
                         echo "<li><a href='admin_bordel.php?bordel={$_SESSION['id']}'<i class='mdi mdi-key-variant'></i>".$_SESSION['username']."</a></li>
                         <li><form method='post'><input type='submit' value='logout' class='btn-danger' name='logout' /></form></li>
                         ";
                       }
                          else{
                            echo "<li><a href='update.php?userch={$_SESSION['id']}'<i class='mdi mdi-key-variant'></i>".$_SESSION['username']."</a></li>
                            <li><form method='post'><input type='submit' value='logout' class='btn-danger' name='logout' /></form></li>
                            "; }
                      } else { ?>
                        <li><a class="popup-with-zoom-anim" href="#small-dialog"><i class="mdi mdi-key-variant"></i>Login</a></li>
                          <li class="dropdown submenu">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registration</a>
                                <ul class="dropdown-menu black">
                        <li><a href="#register_form" class="popup-with-zoom-anim"><i class="fa fa-user-plus"></i>als user</a></li>
                        <li><a href="register.php" class=""><i class="fa fa-user-plus"></i>als anbieter</a></li>

</ul>

                        </li>
                        <?php } ?>
                        <li class="flag_drop"><a href="contact.php">PREMIUM</a>
                        </li>
                    </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
