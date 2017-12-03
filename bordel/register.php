<?php session_start();
 include("../connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

<meta charset="UTF-8">
<link href="../vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="../vendors/linears-icon/style.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="../js/jquery.selectlistactions.js"></script>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/site.css">
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="../js/jquery.selectlistactions.js"></script>
<script src="../assets/fancybox/jquery.easing-1.3.pack.js"></script>
<script src="../assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script src="../assets/webcam/webcam.js"></script>
<script src="../assets/js/script.js"></script>
<script src="../js/map-custome.js"></script>
<script type="../text/javascript">




</script>


</head>
 <body class="redbg" style="
    background: url(../img/background.jpeg);
">


          <?php include("menu_others.php"); ?>

<div class="container">
<div class="col-xs-12 col-sm-12 col-lg-12">


  <div class="register_form_inner zoom-anim-dialog" id="register_form">

          <div class="row margintp">
            <div class="col-md-6">
                <div class="registration_form_s">
                    <h4>Registration</h4>
                  <form class="" action="#" method="post" enctype = "multipart/form-data" onsubmit="return posalji();">
                    <?php   if(isset($_FILES['image1'])){
                         $errors= array();
                         $file_name = $_FILES['image1']['name'];
                         $file_size = $_FILES['image1']['size'];
                         $file_tmp = $_FILES['image1']['tmp_name'];
                         $file_type = $_FILES['image1']['type'];
                         $file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));

                         $expensions= array("jpeg","jpg","png");



                         if($file_size > 2097152) {
                            $errors[]='File size must be excately 2 MB';
                         }

                         if(empty($errors)==true) {
                            move_uploaded_file($file_tmp,"../img/profiles/".$file_name);
                            echo "Success";
                         }else{
                            print_r($errors);
                         }
                      } ?>


                      <label for="">Porfil bild</label>
                      <div class="form-group">
                            <label for="">Bild aus datei auswahlen</label>
                          <input type="file" name="image1" value="Neues Bild" class="btn_price_chose">


                      </div>

                        <div class="form-group">
                          <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="reg_first" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alter</label>
                            <input type="text" class="form-control" id="age" placeholder="26" name="age" required>
                        </div>
<?php $upit="SELECT * FROM user where user_id=".$_SESSION['id'];
$reupit=$conn->query($upit) or die('bad');
$r=mysqli_fetch_array($reupit);
?>
                  

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

  echo '<select name="monat" class="trecina form-control" required>';
    echo '<option>Monat</option>';
    for($i = 1; $i <= 12; $i++){
      $i = str_pad($i, 2, 0, STR_PAD_LEFT);
      echo "<option value='$i'>$i</option>";
    }
  echo '</select>';
  echo '<select name="tag" class="trecina form-control" required>';
    echo '<option>Tag</option>';
    for($i = 1; $i <= 31; $i++){
      $i = str_pad($i, 2, 0, STR_PAD_LEFT);
      echo "<option value='$i'>$i</option>";
    }
  echo '</select>';
  echo '<select name="jahr" class="trecina form-control" required>';
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
  <label for="">Grösse</label>
      <input type="text" class="form-control" id="reg_pass" name="grosse" placeholder="Grosse" required>
  </div>
  <div class="form-group">
    <label for="">Titel</label>
      <input type="text" class="form-control" name="titel" id="reg_pass" placeholder="Titel über dich!" required>
  </div>
  <div class="form-group">
    <label for="">Über dich</label>
      <textarea name="opis" rows="8" cols="40" placeholder="Hallo ich bin Klara und mag es !!" required></textarea>
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

                                  <h4>Mehr Über dich</h4>
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
                                        <label for="">Haar Länge </label>
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
                                        <label for="">Brille Kontaktlinzen</label>
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
                    <?php $upituser="SELECT * FROM kategorije";

                      $rezupituser=$conn->query($upituser)or die("los upit"); ?>
  			<div class="col-md-12">
          <h3>Kategorien</h3>
<input type="checkbox" onClick="toggle(this)" /> Ich Kann alles <br/>
          <?php
                     while($r=mysqli_fetch_array($rezupituser)){
            if($r['id_kat']==20){
              echo "<div class='col-md-6'>";
              echo "<input type='checkbox' name='kateg[]' class='checks' id='foo' value='{$r['id_kat']}'>".$r['kategorija']."<br/>";
              echo "</div>";
            }else {
                echo "<div class='col-md-6'>";
                echo "<input type='checkbox' name='kateg[]' class='checks' id='foo' value='{$r['id_kat']}'>".$r['kategorija']."<br/>";
                echo "</div>";
            }

          } ?>





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
                      <input type="text" class="form-control" id="reg_pass" name="tel" placeholder="078888888" required>
                  </div>
                  <div class="form-group">
                    <label for="">Klinge</label>
                      <input type="text" class="form-control" id="reg_pass" name="klinge" placeholder="15">
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
                            <input type="text" class="form-control" id="reg_pass" name="platz" placeholder="9015">
                        </div>
                        <div class="form-group">
                          <label for="">Name der Location</label>
                            <input type="text" class="form-control" id="reg_pass" name="location" placeholder="Los Lita">
                        </div>
                        <div class="form-group">
                          <label for="">Name des Studio</label>
                            <input type="text" class="form-control" id="reg_pass" name="location1" placeholder="Los Lita Studio">
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
  $kategorijee=$_POST['kateg'];
    if(count($kategorijee)==0){
      echo "<script>alert('Bitte Kategorijen auswahlen')</script>";
    } else{
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
      $age=$_POST['age'];
      $datum=$tag.'.'.$monat.'.'.$jahr;

$random=rand(100,1000);



$idsession=$_SESSION['id'];


$upitunos1 = "INSERT INTO user_oglas VALUES('',$geschlecht,$interesse_am,'$datum','$name',$herkunft,$kanton,'$email','$random','$random',$poreklo,$whoseeme,$gebaut,$sex_orj,$status,$was_magst_du,$was_mag_er,'$titel','$opis',$geschlecht,'$grosse',$haarfarbe,$haarlength,$augenfarbe,$brille,$bh,$oberweite,'$adresse_tref','$platz',$kanton1,'$tel','$name_tref','$name_tref1','$klinge',$spremnost,'$website','/img/profiles/$file_name',4,'video ovde',1,2,$age,$idsession,'test',1)";
$query = mysqli_query($conn, $upitunos1) or die (mysqli_error());

echo "<script>alert('erfolgreich registriert!');</script>";


$upitprikaz="SELECT id_user from user_oglas ORDER BY id_user DESC limit 1";
$rezupitprikazus=$conn->query($upitprikaz) or die("1 upit los");
$r3=mysqli_fetch_array($rezupitprikazus);
$iduser1=$r3['id_user'];
foreach($_POST['kateg'] as $item){
  echo "<h1>$item</h1>";
  echo "<h3>$iduser1</h3>";
  $upitkat="INSERT INTO user_kat VALUES('',$iduser1,$item)";
  $rezupitprikazus=$conn->query($upitkat) or die("2 upit los");

}



    } }?>

  </div>

    </div>
    <?php include("../parts/footer.php"); ?>
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
