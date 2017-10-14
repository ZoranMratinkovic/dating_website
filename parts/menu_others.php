
<?php 
  if(isset($_POST['logout']))
  {
    unset($_SESSION['username']);
    unset($_SESSION['id']);
    unset($_SESSION['id_uloga']);
      unset($_SESSION['age']);
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
                    <a class="navbar-brand" href="index.php"><img src="img/logo-2.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="dropdown submenu active">

                                <a href="index.php">Home</a>

                        </li>
                        <li class="dropdown menu-large">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
                                <ul class="dropdown-menu megamenu row backg">
                                    <li class="col-sm-12">
                                          <ul>
                                  <?php $upitcat="SELECT * FROM kategorije ORDER BY kategorija";
                                  include("connectionFile/connection.php");
                                  $rezupituser=$conn->query($upitcat)or die("los upit");;

                                  while($r1=mysqli_fetch_array($rezupituser))
                                  {
                                    echo "<a href='members1.php?category={$r1['id_kat']}' class='nothing'><li style='width:20%'>".$r1['kategorija']."</li></a>";
                                  }
                             ?>
                                          </ul>
                                    </li>

                                </ul>

                            </li>


                                <li><a href="members1.php">Members</a></li>


                                <li><a href="members.php?all_members">Members 2</a></li>

                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-left.html">Shop Left</a></li>
                                <li><a href="shop-right.html">Shop Right</a></li>
                                <li><a href="product-details.html">Product Details</a></li>
                                <li><a href="shop-cart.html">Shop Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </li>
                        <li class="dropdown submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="stories.html">Stories</a></li>
                                <li><a href="why-us.html">Why us</a></li>
                                <li><a href="404.html">Error</a></li>
                            </ul>
                        </li>

                        <li><a href="contact.html">Contact us</a></li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                      <?php if(isset($_SESSION['username']))
                      {
                          echo "<li><a href='parts/change.php'><i class='mdi mdi-key-variant'></i>".$_SESSION['username']."</a></li>
                          <li><form method='post'><input type='submit' value='logout' class='btn-danger' name='logout' /></form></li>
                          ";
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
                        <li class="flag_drop">
                            <div class="selector">
                                <select class="language_drop" name="countries" id="countries" style="width:300px;">
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                  <option value='yt' data-image="img/country-aus.png" data-imagecss="flag yt" data-title="English">English</option>
                                  <option value='yu' data-image="img/country-bang.png" data-imagecss="flag yu" data-title="Bangladesh">Bangla</option>
                                </select>
                            </div>
                        </li>
                    </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
