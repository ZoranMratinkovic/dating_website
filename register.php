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
                            <label for="">Email</label>
                              <input type="password" class="form-control" id="reg_user" placeholder="Password">
                          </div>
                          <div class="form-group">
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


                  </div>
              </div>
              <div class="col-md-6">
                  <div class="registration_form_s">
  <h4>Registration</h4>
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
                          <div class="form-group">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Male</a></li>
                                      <li><a href="#">Female</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="datepicker">
                                  <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                  <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                              </div>
                          </div>

                  </div>
              </div>

            </div>
            <div class="row">
              <div class="col-md-6">
                  <div class="registration_form_s">


                          <div class="form-group">
                              <input type="email" class="form-control" id="reg_email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="reg_user" placeholder="Username">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Male</a></li>
                                      <li><a href="#">Female</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="datepicker">
                                  <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                  <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                              </div>
                          </div>



                  </div>
              </div>
              <div class="col-md-6">
                  <div class="registration_form_s">


                          <div class="form-group">
                              <input type="email" class="form-control" id="reg_email" placeholder="Email">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="reg_first" placeholder="Full Name">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="reg_user" placeholder="Username">
                          </div>
                          <div class="form-group">
                              <input type="password" class="form-control" id="reg_pass" placeholder="Password">
                          </div>
                          <div class="form-group">
                              <div class="btn-group">
                                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                  <span data-bind="label">Gender</span>&nbsp;<span class="arrow_carrot-down"><i class="fa fa-sort-asc" aria-hidden="true"></i><i class="fa fa-sort-desc" aria-hidden="true"></i></span>
                                  </button>
                                  <ul class="dropdown-menu" role="menu">
                                      <li><a href="#">Male</a></li>
                                      <li><a href="#">Female</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="datepicker">
                                  <input type='text' class="form-control datetimepicker4" placeholder="Birthday" />
                                  <span class="add-on"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                              </div>
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
                      <img class="mfp-close" src="img/close-btn.png" alt="">
                  </div>
              </div>

            </div>
        </div>
      </body>
