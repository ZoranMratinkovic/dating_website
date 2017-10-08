  <?php include("connectionFile/connection.php");?>
   <body>
     <meta charset="UTF-8">
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
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
     <script src="assets/fancybox/jquery.easing-1.3.pack.js"></script>
     <script src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
     <script src="assets/webcam/webcam.js"></script>
     <script src="assets/js/script.js"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

     <script src="js/map-custome.js"></script>

    <div class="register_form_inner zoom-anim-dialog" id="register_form">

            <div class="row">
              <div class="col-md-6">
                  <div class="registration_form_s">
                      <h4>Registration</h4>
                    <form class="" action="#" method="post">


                        <label for="">Porfil bild</label>
                        <div class="form-group">
                              <label for="">Bild aus datei auswahlen</label>
                            <input type="file" name="" value="Neues Bild" class="btn_price_chose">
                            <label for="">Jetzt bild aufnehmen</label>

                          <a href="capture.php"><input type="button" name="" id="kamerap" class="btn" value="bild jetzt aufnehmen"></a>

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
                              <input type="password" class="form-control" name="passwrod" id="reg_user" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="">Passwort again</label>
                              <input type="password" class="form-control" name="passwrod1" id="reg_pass" placeholder="Password">
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
                          echo "<option value='{$r['id_kome_pojava']}'>".$r['naziv_pojava']."</option>";
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
                            <label for="">Adresse</label>
                              <input type="text" class="form-control" id="reg_pass" name="adresse_tref" placeholder="Burgger Strasse 15">
                          </div>
                          <div class="form-group">
                            <label for="">Name der Location</label>
                              <input type="text" class="form-control" id="reg_pass" name="location" placeholder="Los Lita">
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
        $password=$_POST['passwort'];
        $geschlecht=$_POST['geschlecht'];
        $monat=$_POST['monat'];
        $tag=$_POST['tag'];
        $jahr=$_POST['jahr'];
        $herkunft=$_POST['herkunft'];
        $grosse=$_POST['grosse'];
        $sex_orj=$_POST['sexorj'];
        $interesse_am=$_POST['interesse_an'];
        $status=$_POST['status'];
        $poreklo=$_POST['poreklo'];
        $kanton=$_POST['kanton'];
        $was_magst_du=$_POST['was_magst_du'];
        $was_mag_er=$_POST['was_mag_er'];
        $gebaut=$_POST['gebaut'];
        $haarlength=$_POST['haarlength'];
        $haarfarbe=$_POST['haar_farbe'];
        $augenfarbe=$_POST['augen_farbe'];
        $whoseeme=$_POST['who_see'];
        $bh=$_POST['bg'];
        $berweite=$_POST['oberweite'];
        $brille=$_POST['brille'];
        $website=$_POST['website'];
        $adresse_tref=$_POST['adresse_tref'];
        $name_tref=$_POST['location'];
        $spremnost=$_POST['spremonst'];













      } ?>

      </body>
