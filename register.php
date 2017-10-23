<?php include("connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>
<link href="vendors/material-icon/css/materialdesignicons.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="vendors/linears-icon/style.css" rel="stylesheet">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
  <script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/jquery.selectlistactions.js"></script>

  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <!--<link rel="stylesheet" href="css/site.css"> Nema ovog fajla?-->
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
<script type="text/javascript">
function posalji() {
var email = document.getElementById('reg_email').value;
var ime = document.getElementById('reg_first').value;
var user = document.getElementById('reg_user').value;
var pass=document.getElementById('reg_pass').value;
var pass1=document.getElementById('reg_pass1').value;
var age=document.getElementById('age').value;
var greske= new Array();
var sadrzaj=new Array();
var greskeID = new Array();
var reime= /^[A-z\s0-9]{2,20}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-zA-Z0-9!@#$%^&*-_]{6,}/;
var reuser= /^[A-z0-9]{2,14}$/;
var reage= /^[0-9]{1,7}$/;
if(reime.test(ime))
{
sadrzaj.push(ime);
  document.getElementById('reg_first').className = 'green';
}
else
{
  document.getElementById('reg_first').className = 'red';
greske.push('erorr');
}
if(reage.test(age))
  {
    sadrzaj.push(age);
      document.getElementById('age').className = 'green';
  }
  else
  {
    greske.push('erorr');
    document.getElementById('age').className = 'red';
  }
if(reuser.test(user))
{
  sadrzaj.push(user);
  document.getElementById('reg_user').className = 'green';
}
else
{
      document.getElementById('reg_user').className = 'red';
    greske.push('erorr');
}
if(reemail.test(email))
{
sadrzaj.push(email);
  document.getElementById('reg_email').className = 'green';
}
else
{
greske.push('erorr');
  document.getElementById('reg_email').className = 'red';
}
if(pass==pass1){
  sadrzaj.push(pass);
}
else{
greske.push('error');
document.getElementById('reg_pass1').className = 'red';
}
if(repass.test(pass))
{
  document.getElementById('reg_pass').className = 'green';
sadrzaj.push(pass);
}
else
{
    document.getElementById('reg_pass').className = 'red';
  greske.push('erorr');
}
if(sadrzaj.length == 6)
{
alert("Erfolgreich!");
return true;
}
else {alert('Bitte angaben überprüfen!!! Password muss mindestens 6 Karaktere haben!!');
return false;}
}
function toggle(source) {
    var checkboxes = document.querySelectorAll('input[type="checkbox"]');
    for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i] != source)
            checkboxes[i].checked = source.checked;
    }
}
</script>


</head>
 <body class="redbg" style="
    background: url(img/background.jpeg);
">
   <?php include("parts/menu_others.php"); ?>
<div class="container">
<div class="col-xs-12 col-sm-12 col-lg-12">


  <div class="register_form_inner zoom-anim-dialog" id="register_form">

          <div class="row margintp">
            <div class="col-md-12">
                <div class="registration_form_s">
                    <h4>Registration</h4>
                  <form class="" action="#" method="post" enctype = "multipart/form-data" onsubmit="return posalji();">
                    <?php   if(isset($_FILES['image1'])){
                         $errors= array();
                         $file_name = $_FILES['image1']['name'];
                         $file_size = $_FILES['image1']['size'];
                         $file_tmp = $_FILES['image1']['tmp_name'];
                         $file_type = $_FILES['image1']['type'];
                         @$file_ext=strtolower(end(explode('.',$_FILES['image1']['name'])));
                         $expensions= array("jpeg","jpg","png");
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


                      </div>
                      <div class="form-group">
                        <label for="">Username</label>
                          <input type="text" class="form-control" name="username" id="reg_user" placeholder="Username" required>
                      </div>
                        <div class="form-group">
                          <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="reg_first" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Alter</label>
                            <input type="text" class="form-control" id="age" placeholder="26" name="age" required>
                        </div>

                        <div class="form-group">
                          <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="reg_email" placeholder="email" required>
                        </div>
                        <div class="form-group">
                          <label for="">Passwort</label>
                            <input type="password" class="form-control" name="password" id="reg_pass" placeholder="Passwort" required>
                        </div>
                        <div class="form-group">
                          <label for="">Passwort again</label>
                            <input type="password" class="form-control" name="password1" id="reg_pass1" placeholder="Repeat Passwort" required>
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
            <div class="col-md-12">
                <div class="registration_form_s">
                    <div class="form-group">
                      <label for="">Grösse</label>
                          <input type="text" class="form-control" id="reg_pass" name="grosse" placeholder="Grosse" required>
                      </div>
                      <div class="form-group">
                        <label for="">Titel</label>
                          <input type="text" class="form-control" name="titel" id="reg_pass" placeholder="Titel über dich!" required>
                      </div>
                      <div class="form-group">
                        <label for="">Über dich</label>
                          <textarea name="opis" rows="8" cols="" class='form-control' placeholder="Hallo ich bin Klara und mag es !!" required></textarea>
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
            <div class="col-md-12">
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
                <div class="registration_form_s regform">
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
                            echo "<div class='col-md-3'>";
                            echo "<input type='checkbox' name='kateg[]' class='checks' id='foo' value='{$r['id_kat']}'>".$r['kategorija']."<br/>";
                            echo "</div>";
                          }else {
                              echo "<div class='col-md-3'>";
                              echo "<input type='checkbox' name='kateg[]' class='checks' id='foo' value='{$r['id_kat']}'>".$r['kategorija']."<br/>";
                              echo "</div>";
                          }
                        } ?>





                			</div>
  		            </div>
                </div>
                </div>
            </div>
            <div class="col-md-12">
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

                            <input type="submit" name="register" value="jetzt registrieren" class="btn btn-danger btn-lg">
                        </div>

                </div>
            </div>

          </div>


      </form>
    <?php if(isset($_POST['register']))
    {
        $kategorijee=$_POST['kateg'];
        if(count($kategorijee)==0)
        {
          echo "<script>alert('Bitte Kategorijen auswahlen')</script>";
        }
        else
        {
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
                                                $stmtUserEmailExist = $conn-> prepare("SELECT email FROM user_oglas WHERE email=?");
                                                $stmtUserEmailExist->bind_param("s",$email);
                                                $stmtUserEmailExist->execute();
                                                $resultUserEmailExist = $stmtUserEmailExist->get_result();
                                                //if email already exists
                                                if($resultUserEmailExist->num_rows > 0)
                                                {
                                                  echo"
                                                        <script>
                                                            alert('es besteht bereits ein user mit dieser email adresse');
                                                        </script>";
                                                        $stmtUserEmailExist->close();
                                                }
                                                //if email doesn't exists
                                                else
                                                {
                                                    //data for email verification
                                                    $idUserOglas= "";
                                                    $hash_ver = md5(rand(0,1000));
                                                    $status_verified = 0;
                                                    $slidza = "/img/profiles/".$file_name;
                                                    $id_gal = 4; // Ovo ne treba ????????
                                                    $video = "vide ovde . ne treba ovo polje";
                                                    $id_status_gold = 1;
                                                    $id_user_uloga =2;
                                                    $bordel = 0;
                                                    $insertSql = "INSERT INTO user_oglas VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

                                                    $insertSqlQuery = $conn->prepare($insertSql);

                                                    $insertSqlQuery->bind_param('iiissiisssiiiiiiissisiiiiiisssssssissisiiiisi',$idUserOglas,$geschlecht,$interesse_am,$datum,$name,$herkunft,$kanton,$email,$username,$password,$poreklo,$whoseeme,$gebaut,$sex_orj,$status,$was_magst_du,$was_mag_er,$titel,$opis,$geschlecht,$grosse,$haarfarbe,$haarlength,$augenfarbe,$brille,$bh,$oberweite,$adresse_tref,$platz,$kanton1,$tel,$name_tref,$name_tref1,$klinge,$spremnost,$website,$slidza,$id_gal,$video,$id_status_gold,$id_user_uloga,$age,$bordel,$hash_ver,$status_verified);
                                                    $insertSqlQuery->execute();
                                                    if($insertSqlQuery)
                                                    {
                                                        $upitprikaz="SELECT id_user from user_oglas ORDER BY id_user DESC limit 1";
                                                        $rezupitprikazus=$conn->query($upitprikaz) or die("1 upit los");
                                                        $r3=mysqli_fetch_array($rezupitprikazus);
                                                        $iduser1=$r3['id_user'];
                                                        foreach($_POST['kateg'] as $item)
                                                        {
                                                          echo "<h1>$item</h1>";
                                                          echo "<h3>$iduser1</h3>";
                                                          $upitkat="INSERT INTO user_kat VALUES('',$iduser1,$item)";
                                                          $rezupitprikazus=$conn->query($upitkat) or die("2 upit los");
                                                        }
                                                      //After inserting, send an email verification
                                                      include('phpmailer/PHPMailerAutoload.php');
                                                      include("connectionFile/define.php");
                                                      $mail = new PHPMailer;
                                                      //Enable SMTP debugging.
                                                      //$mail->SMTPDebug = 3; -> client ---> server dialog
                                                      //Set PHPMailer to use SMTP.
                                                      // $mail->isSMTP();
                                                      //Set SMTP host name
                                                      $mail->Host = "smtp.gmail.com";
                                                      //Set this to true if SMTP host requires authentication to send email
                                                      $mail->SMTPAuth = true;
                                                      //Provide username and password
                                                      $mail->Username = USERNAME;
                                                      $mail->Password = PASSWORD;
                                                      //If SMTP requires TLS encryption then set it
                                                      $mail->SMTPSecure = "tls";
                                                      //Set TCP port to connect to
                                                      $mail->Port = 587;
                                                      $mail->From = EMAIL;
                                                      $mail->FromName = NAME;
                                                      $mail->addAddress($email, $username);
                                                      $mail->isHTML(true);
                                                      $mail->Subject = "Subject Text";
                                                      $mail->Body = "
                                                          <i>Your username is: $username</i><br/>
                                                          <p><strong>Click on the link below to verify you account</strong></p>
                                                          <b><a href='http://www.sexchange.alpikom.rs/verify_user.php?hash={$hash_ver}&email={$email}'>Klicken sie hier um Ihren Account zu verifizieren:</a></b>
                                                      ";
                                                      $mail->AltBody = "Your username is: $username";
                                                      //If there was an error with sending
                                                      if(!$mail->send())
                                                      {
                                                          echo "Mailer Error: " . $mail->ErrorInfo;
                                                          echo "<script>alert('verifikations email nicht gesendet!');</script>";
                                                      }
                                                      else
                                                      {
                                                           echo "<script>alert('Erfolgreich registert! Bitte verifizieren Sie ihre Email');</script>";
                                                      }
                                                    }
                                                }

    } }?>

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
