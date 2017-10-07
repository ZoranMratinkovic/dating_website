  <?php include("/connectionFile/connection.php");?>
   <body>
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

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>

     <script src="js/map-custome.js"></script>

    <div class="register_form_inner zoom-anim-dialog" id="register_form">

            <div class="row">
              <div class="col-md-6">
                  <div class="registration_form_s">
                      <h4>Registration</h4>
                      <form action="">
                          <div class="form-group">
                            <label for="">Name</label>
                              <input type="text" class="form-control" id="reg_email" placeholder="Name">
                          </div>

                          <div class="form-group">
                            <label for="">Email</label>
                              <input type="email" class="form-control" id="reg_first" placeholder="email">
                          </div>
                          <div class="form-group">
                            <label for="">Passwort</label>
                              <input type="password" class="form-control" id="reg_user" placeholder="Password">
                          </div>
                          <div class="form-group">
                            <label for="">Passwort again</label>
                              <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                          </div>
                          <?php $upituser="SELECT * FROM tip";

                          $rezupituser=$conn->query($upituser)or die("los upit");?>
                          <div class="form-group">
                              <div class="btn-group">
                                <label for="">Geschlecht</label>
                              <select class="form-control" name="">
                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                echo "<option value='{$r['id_tip']}'>".$r['naziv']."</option>";
                              } ?>
                              </select>
                              </div>
                          </div>
                          <div class="form-group"><label for="">Geburstag</label>
                              <div class="datepicker">

                                  <input type='text' class="form-control datetimepicker4" placeholder="Geburtstag" />

                              </div>
                          </div>
                          <?php $upituser="SELECT * FROM poreklo";

                      $rezupituser=$conn->query($upituser)or die("los upit");?>
                          <div class="form-group">
                              <div class="btn-group">
                                <label for="">Herkunft</label>
                              <select class="form-control" name="">
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
        <input type="text" class="form-control" id="reg_pass" placeholder="Grosse">
    </div>
                                <?php $upituser="SELECT * FROM sex_orj";

                                          $rezupituser=$conn->query($upituser)or die("los upit");?>
                                          <div class="form-group">
                                              <div class="btn-group">
                                                <label for="">Sex Orientation</label>
                                              <select class="form-control" name="">
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
                                          <select class="form-control" name="">
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
                                      <select class="form-control" name="">
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
                                          <select class="form-control" name="">
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
                                          <select class="form-control" name="">
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
                                          <select class="form-control" name="">
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
                                          <select class="form-control" name="">
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
                                        <select class="form-control" name="">
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
                                        <select class="form-control" name="">
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
                                        <select class="form-control" name="">
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
                                        <select class="form-control" name="">
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
                                        <select class="form-control" name="">
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
                        <select class="form-control" name="">
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
                        <select class="form-control" name="">
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
                        <select class="form-control" name="">
                        <?php while($r=mysqli_fetch_array($rezupituser)){
                          echo "<option value='{$r['id_kome_pojava']}'>".$r['naziv_pojava']."</option>";
                        } ?>
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="">Meine Website</label>
                        <input type="text" class="form-control" id="reg_pass" placeholder="www.sexchange.ch">
                    </div>
                    <h4>Location Treffen wo</h4>
                          <div class="form-group">
                            <label for="">Adresse</label>
                              <input type="text" class="form-control" id="reg_pass" placeholder="Burgger Strasse 15">
                          </div>
                          <div class="form-group">
                            <label for="">Name der Location</label>
                              <input type="text" class="form-control" id="reg_pass" placeholder="Los Lita">
                          </div>

                          <?php $upituser="SELECT * FROM sredjenost";

                      $rezupituser=$conn->query($upituser)or die("los upit");?>
                          <div class="form-group">
                              <div class="btn-group">
                                <label for="">Ist die Location eingerichtet? </label>
                              <select class="form-control" name="">
                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                echo "<option value='{$r['id_sredjenost']}'>".$r['sredjenost']."</option>";
                              } ?>
                              </select>
                              </div></div>
                          </div>
                          <div class="reg_chose form-group">
                              <div class="reg_check_box">
                                  <input type="radio" id="s-option" name="selector">
                                  <label for="s-option">I`m Not Robot</label>
                                  <div class="check"><div class="inside"></div></div>
                              </div>
                              <button type="submit" value="LogIn" class="btn form-control login_btn">Register</button>
                          </div>
                      </form>

                  </div>
              </div>

            </div>
        </div>
      </body>
