<?php include("connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

<meta charset="UTF-8">
<link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="vendors/linears-icon/style.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery.selectlistactions.js"></script>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/site.css">
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="js/jquery.selectlistactions.js"></script>
<script src="assets/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="assets/webcam/webcam.js"></script>
<script src="assets/js/script.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

<script src="js/map-custome.js"></script>


</head>
 <body>
   <header class="header_menu_area white_menu">

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



</form>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
<div class="container">
<div class="col-xs-12 col-sm-12 col-lg-12">


  <div class="register_form_inner zoom-anim-dialog" id="register_form">

          <div class="row margintp">
            <div class="col-md-6">
                <div class="registration_form_s">
                    <h4>Registration</h4>
                  <form class="" action="#" method="post" enctype = "multipart/form-data">
                    <?php   if(isset($_FILES['image1'])){
                         $errors= array();
                         $file_name = $_FILES['image1']['name'];
                         $file_size = $_FILES['image1']['size'];
                         $file_tmp = $_FILES['image1']['tmp_name'];
                         $file_type = $_FILES['image1']['type'];
                         $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));

                         $expensions= array("jpeg","jpg","png");

                         if(in_array($file_ext,$expensions)=== false){
                            $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                         }

                         if($file_size > 2097152) {
                            $errors[]='File size must be excately 2 MB';
                         }

                         if(empty($errors)==true) {
                            move_uploaded_file($file_tmp,"img/profiles/".$file_name);
                            echo "Success";
                         }else{
                            print_r($errors);
                         }
                      } ?>


                      <label for="">Porfil bild</label>
                      <div class="form-group">
                            <label for="">Bild aus datei auswahlen</label>
                          <input type="file" name="image1" value="Neues Bild" class="btn_price_chose">
                          <label for="">Jetzt bild aufnehmen</label>

                        <a href="capture.php"><input type="button" name="" id="kamerap" class="btn" value="bild jetzt aufnehmen"></a>

                      </div>
                      <div class="form-group">
                        <label for="">Username</label>
                          <input type="text" class="form-control" name="username" id="reg_email" placeholder="Name">
                      </div>
                        <div class="form-group">
                          <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="reg_email" placeholder="Name">
                        </div>

                        <div class="form-group">
                          <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="reg_first" placeholder="email">
                        </div>
                        <div class="form-group">
                          <label for="">Passwort</label>
                            <input type="password" class="form-control" name="password" id="reg_user" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="">Passwort again</label>
                            <input type="password" class="form-control" name="password1" id="reg_pass" placeholder="Sag etwas Kurz über dich">
                        </div>

                        <?php $upituser="SELECT * FROM tip";

                        $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Geschlecht</label>
                            <select class="form-control" name="geschlecht">
                            <?php while($r=mysqli_fetch_array($rezupituser)){
                              echo "<option value='{$r['id_tip']}'>".$r['naziv_tip']."</option>";
                            } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group"><label for="">Geburstag</label>
                            <div class="datepicker">

                              <?php

  echo '<select name="monat" class="trecina form-control">';
    echo '<option>Monat</option>';
    for($i = 1; $i <= 12; $i++){
      $i = str_pad($i, 2, 0, STR_PAD_LEFT);
      echo "<option value='$i'>$i</option>";
    }
  echo '</select>';
  echo '<select name="tag" class="trecina form-control">';
    echo '<option>Tag</option>';
    for($i = 1; $i <= 31; $i++){
      $i = str_pad($i, 2, 0, STR_PAD_LEFT);
      echo "<option value='$i'>$i</option>";
    }
  echo '</select>';
  echo '<select name="jahr" class="trecina form-control">';
    echo '<option>Jahr</option>';
    for($i = date('Y'); $i >= date('Y', strtotime('-100 years')); $i--){
      echo "<option value='$i'>$i</option>";
    }
  echo '</select>';
?>

                            </div>
                        </div>
                        <?php $upituser="SELECT * FROM poreklo";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Herkunft</label>
                            <select class="form-control" name="herkunft">
                            <?php while($r=mysqli_fetch_array($rezupituser)){
                              echo "<option value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                            } ?>
                            </select>
                            </div>
                        </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="registration_form_s">
<h4>Registration</h4>                  <div class="form-group">
  <label for="">Grosse</label>
      <input type="text" class="form-control" id="reg_pass" name="grosse" placeholder="Grosse">
  </div>
  <div class="form-group">
    <label for="">text</label>
      <input type="text" class="form-control" name="titel" id="reg_pass" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="">text</label>
      <textarea name="opis" rows="8" cols="40"></textarea>
  </div>
                              <?php $upituser="SELECT * FROM sex_orj";

                                        $rezupituser=$conn->query($upituser)or die("los upit");?>
                                        <div class="form-group">
                                            <div class="btn-group">
                                              <label for="">Sex Orientation</label>
                                            <select class="form-control" name="sex_orj">
                                            <?php while($r=mysqli_fetch_array($rezupituser)){
                                              echo "<option value='{$r['id_sexorj']}'>".$r['naziv_sexorj']."</option>";
                                            } ?>
                                            </select>
                                            </div>
                                        </div>
                                        <?php $upituser="SELECT * FROM trazim";

                                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                                    <div class="form-group">
                                        <div class="btn-group">
                                          <label for="">Interessiert an</label>
                                        <select class="form-control" name="interessiert_an">
                                        <?php while($r=mysqli_fetch_array($rezupituser)){
                                          echo "<option value='{$r['id_trazim']}'>".$r['Naziv']."</option>";
                                        } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <?php $upituser="SELECT * FROM brak_status";

                                $rezupituser=$conn->query($upituser)or die("los upit");?>
                                <div class="form-group">
                                    <div class="btn-group">
                                      <label for="">Status</label>
                                    <select class="form-control" name="status">
                                    <?php while($r=mysqli_fetch_array($rezupituser)){
                                      echo "<option value='{$r['id_brak_status']}'>".$r['brak_status']."</option>";
                                    } ?>
                                    </select>
                                    </div>
                                </div>

                                    <?php $upituser="SELECT * FROM poreklo";

                                $rezupituser=$conn->query($upituser)or die("los upit");?>
                                    <div class="form-group">
                                        <div class="btn-group">
                                          <label for="">Ethnie</label>
                                        <select class="form-control" name="poreklo">
                                        <?php while($r=mysqli_fetch_array($rezupituser)){
                                          echo "<option value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                                        } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <?php $upituser="SELECT * FROM kanton";

                                $rezupituser=$conn->query($upituser)or die("los upit");?>
                                    <div class="form-group">
                                        <div class="btn-group">
                                          <label for="">Kanton</label>
                                        <select class="form-control" name="kanton">
                                        <?php while($r=mysqli_fetch_array($rezupituser)){
                                          echo "<option value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                                        } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <?php $upituser="SELECT * FROM tvoja_uloga";

                                $rezupituser=$conn->query($upituser)or die("los upit");?>
                                    <div class="form-group">
                                        <div class="btn-group">
                                          <label for="">Was du magst </label>
                                        <select class="form-control" name="was_magst_du">
                                        <?php while($r=mysqli_fetch_array($rezupituser)){
                                          echo "<option value='{$r['id_tvoja_uloga']}'>".$r['naziv_tvoja_uloga']."</option>";
                                        } ?>
                                        </select>
                                        </div>
                                    </div>
                                    <?php $upituser="SELECT * FROM njegova_uloga";

                                $rezupituser=$conn->query($upituser)or die("los upit");?>
                                    <div class="form-group">
                                        <div class="btn-group">
                                          <label for="">Was du magst wen er Sie/Er dir macht </label>
                                        <select class="form-control" name="was_mag_er">
                                        <?php while($r=mysqli_fetch_array($rezupituser)){
                                          echo "<option value='{$r['id_njeg_uloga']}'>".$r['naziv_njeg_uloga']."</option>";
                                        } ?>
                                        </select>
                                        </div>
                                    </div>
                </div>
            </div>

          </div>
          <div class="row">
            <div class="col-md-6">
                <div class="registration_form_s">

                                  <h4>Mehr Uber dich</h4>
                                  <?php $upituser="SELECT * FROM gradja";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Wie bist du gebaut? </label>
                                      <select class="form-control" name="gebaut">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_gradja']}'>".$r['naziv_gradja']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>

                                  <?php $upituser="SELECT * FROM duzina_kose";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Haar Lange </label>
                                      <select class="form-control" name="haarlength">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_duz_kose']}'>".$r['duzina_kose']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>
                                  <?php $upituser="SELECT * FROM boja_kose";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Haar Farbe </label>
                                      <select class="form-control" name="haar_farbe">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_boja_kose']}'>".$r['boja_kose']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>
                                  <?php $upituser="SELECT * FROM boja_kose";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Haar Farbe </label>
                                      <select class="form-control" name="">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_boja_kose']}'>".$r['boja_kose']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>
                                  <?php $upituser="SELECT * FROM boja_ociju";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Augen Farbe </label>
                                      <select class="form-control" name="augen_farbe">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_boja_ociju']}'>".$r['boja_ociju']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>
                                  <?php $upituser="SELECT * FROM nocare_sociva";

                              $rezupituser=$conn->query($upituser)or die("los upit");?>
                                  <div class="form-group">
                                      <div class="btn-group">
                                        <label for="">Brille Kontaktlizen</label>
                                      <select class="form-control" name="brille">
                                      <?php while($r=mysqli_fetch_array($rezupituser)){
                                        echo "<option value='{$r['id_naocare_sociva']}'>".$r['naziv_naoc_soc']."</option>";
                                      } ?>
                                      </select>
                                      </div>
                                  </div>



                </div>
                <div class="form-group mgt">
                  <div class="row style-select">
  			<div class="col-md-12">
  				<div class="col-md-5">
            <?php $upituser="SELECT * FROM kategorije";

        $rezupituser=$conn->query($upituser)or die("los upit");?>
  					<label>Kategorien</label>
  					<select multiple class="form-control multy" id="lstBox1">
              <?php while($r=mysqli_fetch_array($rezupituser)){
                echo "<option value='{$r['id_kat']}'>".$r['kategorija']."</option>";
              } ?>
  					</select>
  				</div>

  				<div class="col-md-2">
  					<br /><br />
  					<input type='button' id='btnAllRight' value='>>' class="btn btn-default" /><br />
  					<input type='button' id='btnRight' value='>' class="btn btn-default" /><br />
  					<input type='button' id='btnLeft' value='<' class="btn btn-default" /><br />
  					<input type='button' id='btnAllLeft' value='<<' class="btn btn-default" />
  				</div>

  				<div class="col-md-5">
  					<label>Ihre Kategorien</label>
  					<select multiple class="form-control multy" name="select2[]" id="lstBox2">

  					</select>

  				</div>

  				<div class="clearfix"></div>
  			</div>
  		</div>
                </div>
            </div>
            <div class="col-md-6">
              <br/>

                <div class="registration_form_s">


                  <?php $upituser="SELECT * FROM oberweite";

              $rezupituser=$conn->query($upituser)or die("los upit");?>
                  <div class="form-group">
                      <div class="btn-group">
                        <label for="">Oberweite </label>
                      <select class="form-control" name="oberweite">
                      <?php while($r=mysqli_fetch_array($rezupituser)){
                        echo "<option value='{$r['id_oberweite']}'>".$r['oberweite']."</option>";
                      } ?>
                      </select>
                      </div>
                  </div>
                  <?php $upituser="SELECT * FROM brus";

              $rezupituser=$conn->query($upituser)or die("los upit");?>
                  <div class="form-group">
                      <div class="btn-group">
                        <label for="">Körbchen grösse </label>
                      <select class="form-control" name="bh">
                      <?php while($r=mysqli_fetch_array($rezupituser)){
                        echo "<option value='{$r['id_brus']}'>".$r['naziv_brus']."</option>";
                      } ?>
                      </select>
                      </div>
                  </div>
                  <?php $upituser="SELECT * FROM kome_se_pojavljuje";

              $rezupituser=$conn->query($upituser)or die("los upit");?>
                  <div class="form-group">
                      <div class="btn-group">
                        <label for="">Wer kann mich sehen? </label>
                      <select class="form-control" name="who_see">
                      <?php while($r=mysqli_fetch_array($rezupituser)){
                        echo "<option value='{$r['id_kome_pojavljuje']}'>".$r['naziv_pojava']."</option>";
                      } ?>
                      </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="">Meine Website</label>
                      <input type="text" class="form-control" id="reg_pass" name="website" placeholder="www.sexchange.ch">
                  </div>
                  <h4>Location Treffen wo</h4>
                  <div class="form-group">
                    <label for="">Tel</label>
                      <input type="text" class="form-control" id="reg_pass" name="tel" placeholder="Burgger Strasse 15">
                  </div>
                  <div class="form-group">
                    <label for="">Klinge</label>
                      <input type="text" class="form-control" id="reg_pass" name="klinge" placeholder="Burgger Strasse 15">
                  </div>
                        <div class="form-group">
                          <label for="">Adresse</label>
                            <input type="text" class="form-control" id="reg_pass" name="adresse_tref" placeholder="Burgger Strasse 15">
                        </div>
                        <?php $upituser="SELECT * FROM kanton";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Kanton</label>
                            <select class="form-control" name="kanton1">
                            <?php while($r=mysqli_fetch_array($rezupituser)){
                              echo "<option value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                            } ?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="">Platz</label>
                            <input type="text" class="form-control" id="reg_pass" name="platz" placeholder="Burgger Strasse 15">
                        </div>
                        <div class="form-group">
                          <label for="">Name der Location</label>
                            <input type="text" class="form-control" id="reg_pass" name="location" placeholder="Los Lita">
                        </div>
                        <div class="form-group">
                          <label for="">Name des Studio</label>
                            <input type="text" class="form-control" id="reg_pass" name="location1" placeholder="Los Lita">
                        </div>

                        <?php $upituser="SELECT * FROM sredjenost";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Ist die Location eingerichtet? </label>
                            <select class="form-control" name="spremnost">
                            <?php while($r=mysqli_fetch_array($rezupituser)){
                              echo "<option value='{$r['id_sredjenost']}'>".$r['sredjenost']."</option>";
                            } ?>
                            </select>
                            </div></div>
                        </div>
                        <div class="reg_chose form-group">

                            <input type="submit" name="register" value="jetzt registrieren" class="btn">
                        </div>

                </div>
            </div>

          </div>


      </form>
    <?php if(isset($_POST['register'])){
      $name=$_POST['name'];
      $email=$_POST['email'];
      $password=$_POST['password1'];
      $geschlecht=$_POST['geschlecht'];
      $monat=$_POST['monat'];
      $tag=$_POST['tag'];
      $jahr=$_POST['jahr'];
      $herkunft=$_POST['herkunft'];
      $grosse=$_POST['grosse'];
      $sex_orj=$_POST['sex_orj'];
      $interesse_am=$_POST['interessiert_an'];
      $status=$_POST['status'];
      $poreklo=$_POST['poreklo'];
      $kanton=$_POST['kanton'];
      $kanton1=$_POST['kanton1'];
      $was_magst_du=$_POST['was_magst_du'];
      $was_mag_er=$_POST['was_mag_er'];
      $gebaut=$_POST['gebaut'];
      $haarlength=$_POST['haarlength'];
      $haarfarbe=$_POST['haar_farbe'];
      $augenfarbe=$_POST['augen_farbe'];
      $whoseeme=$_POST['who_see'];
      $bh=$_POST['bh'];
      $oberweite=$_POST['oberweite'];
      $brille=$_POST['brille'];
      $website=$_POST['website'];
      $adresse_tref=$_POST['adresse_tref'];
      $name_tref=$_POST['location'];
        $name_tref1=$_POST['location1'];
      $spremnost=$_POST['spremnost'];
      $username=$_POST['username'];
      $titel=$_POST['titel'];
      $opis=$_POST['opis'];
      $platz=$_POST['platz'];
      $klinge=$_POST['klinge'];
      $tel=$_POST['tel'];
      $datum=$tag.'.'.$monat.'.'.$jahr;
      echo $geschlecht."<br/>";
      echo $interesse_am."<br/>";
      echo $datum."<br/>";
      echo $name."<br/>";
      echo $kanton."<br/>";
      echo $herkunft."<br/>";
      echo $email."<br/>";
      echo $username."<br/>";
      echo $titel."<br/>";
      echo $opis."<br/>";
      echo $platz."<br/>";
      echo $klinge."<br/>";
      echo $tel."<br/>";
      echo $datum."<br/>";


      echo $password."<br/>";

      echo $monat."<br/>";
      echo $tag."<br/>";
      echo $jahr."<br/>";

      echo $grosse."<br/>";
      echo $sex_orj."<br/>";

      echo $status."<br/>";
      echo $poreklo."<br/>";

      echo $was_magst_du."<br/>";
      echo $was_mag_er."<br/>";
      echo $gebaut."<br/>";
      echo $haarlength."<br/>";
      echo $haarfarbe."<br/>";
      echo $whoseeme."<br/>";
      echo $bh."<br/>";
      echo $oberweite."<br/>";
      echo $brille."<br/>";
      echo $website."<br/>";
      echo $haarfarbe."<br/>";
      echo $whoseeme."<br/>";
      echo $bh."<br/>";

      echo $adresse_tref."<br/>";
      echo $name_tref."<br/>";
      echo $spremnost."<br/>";







$upitunos1 = "INSERT INTO user_oglas VALUES('',$geschlecht,$interesse_am,'$datum','$name',$herkunft,$kanton,'$email','$username','$password',$poreklo,$whoseeme,$gebaut,$sex_orj,$status,$was_magst_du,$was_mag_er,'$titel','$opis',$geschlecht,$grosse,$haarfarbe,$haarlength,$augenfarbe,$brille,$bh,$oberweite,'$adresse_tref',$platz,$kanton1,'$tel','$name_tref','$name_tref1','$klinge',$spremnost,'$website','img/profiles/$file_name',4,'video ovde',1,2)";
$query = mysqli_query($conn, $upitunos1) or die (mysqli_error());





    } ?>

  </div>

    </div>
    <?php include("parts/footer.php"); ?>
    <script>
    $('#btnAvenger').click(function (e) {
             $('select').moveToList('#StaffList', '#PresenterList');
             e.preventDefault();
         });

         $('#btnRemoveAvenger').click(function (e) {
             $('select').removeSelected('#PresenterList');
             e.preventDefault();
         });

         $('#btnAvengerUp').click(function (e) {
             $('select').moveUpDown('#PresenterList', true, false);
             e.preventDefault();
         });

         $('#btnAvengerDown').click(function (e) {
             $('select').moveUpDown('#PresenterList', false, true);
             e.preventDefault();
         });

         $('#btnShield').click(function (e) {
             $('select').moveToList('#StaffList', '#ContactList');
             e.preventDefault();
         });

         $('#btnRemoveShield').click(function (e) {
             $('select').removeSelected('#ContactList');
             e.preventDefault();
         });

         $('#btnShieldUp').click(function (e) {
             $('select').moveUpDown('#ContactList', true, false);
             e.preventDefault();
         });

         $('#btnShieldDown').click(function (e) {
             $('select').moveUpDown('#ContactList', false, true);
             e.preventDefault();
         });

         $('#btnJusticeLeague').click(function (e) {
             $('select').moveToList('#StaffList', '#FacilitatorList');
             e.preventDefault();
         });

         $('#btnRemoveJusticeLeague').click(function (e) {
             $('select').removeSelected('#FacilitatorList');
             e.preventDefault();
         });

         $('#btnJusticeLeagueUp').click(function (e) {
             $('select').moveUpDown('#FacilitatorList', true, false);
             e.preventDefault();
         });

         $('#btnJusticeLeagueDown').click(function (e) {
             $('select').moveUpDown('#FacilitatorList', false, true);
             e.preventDefault();
         });

         $('#btnRight').click(function (e) {
             $('select').moveToListAndDelete('#lstBox1', '#lstBox2');
             e.preventDefault();
         });

         $('#btnAllRight').click(function (e) {
             $('select').moveAllToListAndDelete('#lstBox1', '#lstBox2');
             e.preventDefault();
         });

         $('#btnLeft').click(function (e) {
             $('select').moveToListAndDelete('#lstBox2', '#lstBox1');
             e.preventDefault();
         });

         $('#btnAllLeft').click(function (e) {
             $('select').moveAllToListAndDelete('#lstBox2', '#lstBox1');
             e.preventDefault();
         });
    </script>
    </body>
    </html>
