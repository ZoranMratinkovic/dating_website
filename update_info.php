<?php include("connectionFile/connection.php");
if(isset($_GET['idgirla'])){
  $upitchange="SELECT * from user_oglas where id_user=".$_GET['idgirla'];
  $rezupit=$conn->query($upitchange);
  $r11=mysqli_fetch_array($rezupit);
?>
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
<script src="js/map-custome.js"></script>
<script type="text/javascript">

function posalji() {

var email = document.getElementById('reg_email').value;
var ime = document.getElementById('reg_first').value;
var user = document.getElementById('reg_user').value;
var pass=document.getElementById('reg_pass').value;
var pass1=document.getElementById('reg_pass1').value;




var greske= new Array();
var sadrzaj=new Array();
var greskeID = new Array();
var reime= /^[A-z\s0-9]{2,20}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-zA-Z0-9!@#$%^&*-_]{6,}/;
var reuser= /^[A-z0-9]{2,14}$/;

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
sadrzaj.push(pass)

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
else {alert('Bitte angaben überprüfen!!!');
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
 <body style="
    background: url(img/background.jpeg);
">
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
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategorien <b class="caret"></b></a>
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


                                <li><a href="members1.php">Users</a></li>




                        </li>



                        <li><a href="contact.php">Kontakt</a></li>
                    </ul>



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
                  <form class="" action="#" method="post" enctype = "multipart/form-data" onsubmit="return posalji();">
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



                      <div class="form-group">
                        <label for="">Username</label>
                          <input type="text" class="form-control" name="username" id="reg_user"  placeholder="Name" value="<?php echo  $r11['username'] ?>">
                      </div>
                        <div class="form-group">
                          <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="reg_first" placeholder="Name" value="<?php echo  $r11['umetnicko_ime'] ?>">
                        </div>

                        <div class="form-group">
                          <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="reg_email" placeholder="email" value="<?php echo  $r11['email'] ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Passwort</label>
                            <input type="password" class="form-control" name="password" id="reg_pass" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                          <label for="">Passwort again</label>
                            <input type="password" class="form-control" name="password1" id="reg_pass1" placeholder="Passwort again" required>
                        </div>

                        <?php $upituser="SELECT * FROM tip";

                        $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Geschlecht</label>
                            <select class="form-control" name="geschlecht">
                            <?php while($r=mysqli_fetch_array($rezupituser)){
                              if($r['id_tip']==$r11['id_tip']){
                                      echo "<option selected value='{$r['id_tip']}'>".$r['naziv_tip']."</option>";
                              }else{
                              echo "<option value='{$r['id_tip']}'>".$r['naziv_tip']."</option>";
                            } }?>
                            </select>
                            </div>
                        </div>
                        <div class="form-group"><label for="">Geburstag</label>
                            <div class="datepicker">

                              <input type="text" name="datum" value="<?php echo $r11['datum']; ?>">

                            </div>
                        </div>
                        <?php $upituser="SELECT * FROM poreklo";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Herkunft</label>
                            <select class="form-control" name="herkunft">
                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                if($r['id_poreklo']==$r11['id_drzava']){
                                        echo "<option selected value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                                }else{
                                echo "<option value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                              } }?>
                            </select>
                            </div>
                        </div>


                </div>
            </div>
            <div class="col-md-6">
                <div class="registration_form_s">
<h4>Registration</h4>                  <div class="form-group">
  <label for="">Grosse</label>
      <input type="text" class="form-control" id="reg_pass" name="grosse" placeholder="Grosse" value="<?php echo $r11['visina']; ?>">
  </div>
  <div class="form-group">
    <label for="">text</label>
      <input type="text" class="form-control" name="titel" id="reg_pass" placeholder="text uber dich" value="<?php echo $r11['title']; ?>">
  </div>
  <div class="form-group">
    <label for="">text</label>
      <textarea name="opis" rows="8" cols="40"><?php echo $r11['opis'] ;?></textarea>
  </div>
                              <?php $upituser="SELECT * FROM sex_orj";

                                        $rezupituser=$conn->query($upituser)or die("los upit");?>
                                        <div class="form-group">
                                            <div class="btn-group">
                                              <label for="">Sex Orientation</label>
                                            <select class="form-control" name="sex_orj">
                                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                                if($r['id_sexorj']==$r11['id_sex_orj']){
                                                        echo "<option selected value='{$r['id_sexorj']}'>".$r['naziv_sexorj']."</option>";
                                                }else{
                                                echo "<option value='{$r['id_sexorj']}'>".$r['naziv_sexorj']."</option>";
                                              } }?>
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
                                            if($r['id_trazim']==$r11['id_trazim']){
                                                    echo "<option selected value='{$r['id_trazim']}'>".$r['Naziv']."</option>";
                                            }else{
                                            echo "<option value='{$r['id_trazim']}'>".$r['Naziv']."</option>";
                                          } }?>
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
                                        if($r['id_brak_status']==$r11['id_brak_status']){
                                                echo "<option selected value='{$r['id_brak_status']}'>".$r['brak_status']."</option>";
                                        }else{
                                        echo "<option value='{$r['id_brak_status']}'>".$r['brak_status']."</option>";
                                      } }?>
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
                                            if($r['id_poreklo']==$r11['id_rasa']){
                                                    echo "<option selected value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                                            }else{
                                            echo "<option value='{$r['id_poreklo']}'>".$r['naziv_poreklo']."</option>";
                                          } }?>

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
                                            if($r['id_kanton']==$r11['id_kanton']){
                                                    echo "<option selected value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                                            }else{
                                            echo "<option value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                                          } }?>


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
                                            if($r['id_tvoja_uloga']==$r11['id_tvoja_uloga']){
                                                    echo "<option selected value='{$r['id_tvoja_uloga']}'>".$r['naziv_tvoja_uloga']."</option>";
                                            }else{
                                            echo "<option value='{$r['id_tvoja_uloga']}'>".$r['naziv_tvoja_uloga']."</option>";
                                          } }?>

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
                                            if($r['id_njeg_uloga']==$r11['id_njeg_uloga']){
                                                    echo "<option selected value='{$r['id_njeg_uloga']}'>".$r['naziv_njeg_uloga']."</option>";
                                            }else{
                                            echo "<option value='{$r['id_njeg_uloga']}'>".$r['naziv_njeg_uloga']."</option>";
                                          } }?>


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
                                          if($r['id_gradja']==$r11['id_gradja']){
                                                  echo "<option selected value='{$r['id_gradja']}'>".$r['naziv_gradja']."</option>";
                                          }else{
                                          echo "<option value='{$r['id_gradja']}'>".$r['naziv_gradja']."</option>";
                                        } }?>

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
                                          if($r['id_duz_kose']==$r11['id_duz_kose']){
                                                  echo "<option selected value='{$r['id_duz_kose']}'>".$r['duzina_kose']."</option>";
                                          }else{
                                          echo "<option value='{$r['id_duz_kose']}'>".$r['duzina_kose']."</option>";
                                        } }?>


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
                                          if($r['id_boja_kose']==$r11['id_boja_kose']){
                                                  echo "<option selected value='{$r['id_boja_kose']}'>".$r['boja_kose']."</option>";
                                          }else{
                                          echo "<option value='{$r['id_boja_kose']}'>".$r['boja_kose']."</option>";
                                        } }?>

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
                                          if($r['id_boja_ociju']==$r11['id_boja_ociju']){
                                                  echo "<option selected value='{$r['id_boja_ociju']}'>".$r['boja_ociju']."</option>";
                                          }else{
                                          echo "<option value='{$r['id_boja_ociju']}'>".$r['boja_ociju']."</option>";
                                        } }?>

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
                                          if($r['id_naocare_sociva']==$r11['id_naocare_sociva']){
                                                  echo "<option selected value='{$r['id_naocare_sociva']}'>".$r['naziv_naoc_soc']."</option>";
                                          }else{
                                          echo "<option value='{$r['id_naocare_sociva']}'>".$r['naziv_naoc_soc']."</option>";
                                        } }?>

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
                          if($r['id_oberweite']==$r11['id_oberweite']){
                                  echo "<option selected value='{$r['id_oberweite']}'>".$r['oberweite']."</option>";
                          }else{
                          echo "<option value='{$r['id_oberweite']}'>".$r['oberweite']."</option>";
                        } }?>

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
                          if($r['id_brus']==$r11['id_brus']){
                                  echo "<option selected value='{$r['id_brus']}'>".$r['naziv_brus']."</option>";
                          }else{
                          echo "<option value='{$r['id_brus']}'>".$r['naziv_brus']."</option>";
                        } }?>

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
                          if($r['id_kome_pojavljuje']==$r11['id_kome_pojavljuje']){
                                  echo "<option selected value='{$r['id_kome_pojavljuje']}'>".$r['naziv_pojava']."</option>";
                          }else{
                          echo "<option value='{$r['id_kome_pojavljuje']}'>".$r['naziv_pojava']."</option>";
                        } }?>

                      </select>
                      </div>
                  </div>
                  <div class="form-group">
                    <label for="">Meine Website</label>
                      <input type="text" class="form-control" id="reg_pass" name="website" placeholder="www.sexchange.ch" value="<?php echo $r11['link']; ?>">
                  </div>
                  <h4>Location Treffen wo</h4>
                  <div class="form-group">
                    <label for="">Tel</label>
                      <input type="text" class="form-control" id="reg_pass" name="tel" placeholder="Burgger Strasse 15" value="<?php echo $r11['tel']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="">Klinge</label>
                      <input type="text" class="form-control" id="reg_pass" name="klinge" placeholder="Burgger Strasse 15" value="<?php echo $r11['interfon']; ?>">
                  </div>
                        <div class="form-group">
                          <label for="">Adresse</label>
                            <input type="text" class="form-control" id="reg_pass" name="adresse_tref" placeholder="Burgger Strasse 15" value="<?php echo $r11['ulica']; ?>">
                        </div>
                        <?php $upituser="SELECT * FROM kanton";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Kanton</label>
                            <select class="form-control" name="kanton1">
                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                if($r['id_kanton']==$r11['id_mesto']){
                                        echo "<option selected value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                                }else{
                                echo "<option value='{$r['id_kanton']}'>".$r['naziv_kanton']."</option>";
                              } }?>

                            </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="">Platz</label>
                            <input type="text" class="form-control" id="reg_pass" name="platz" placeholder="Burgger Strasse 15" value="<?php echo $r11['platz']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Name der Location</label>
                            <input type="text" class="form-control" id="reg_pass" name="location" placeholder="Los Lita" value="<?php echo $r11['location_name']; ?>">
                        </div>
                        <div class="form-group">
                          <label for="">Name des Studio</label>
                            <input type="text" class="form-control" id="reg_pass" name="location1" placeholder="Los Lita" value="<?php echo $r11['studio_name']; ?>">
                        </div>

                        <?php $upituser="SELECT * FROM sredjenost";

                    $rezupituser=$conn->query($upituser)or die("los upit");?>
                        <div class="form-group">
                            <div class="btn-group">
                              <label for="">Ist die Location eingerichtet? </label>
                            <select class="form-control" name="spremnost">
                              <?php while($r=mysqli_fetch_array($rezupituser)){
                                if($r['id_sredjenost']==$r11['id_sredjenost']){
                                        echo "<option selected value='{$r['id_sredjenost']}'>".$r['sredjenost']."</option>";
                                }else{
                                echo "<option value='{$r['id_sredjenost']}'>".$r['sredjenost']."</option>";
                              } }?>

                            </select>
                            </div></div>
                        </div>
                        <div class="reg_chose form-group">

                            <input type="submit" name="register" value="Informationen aendern" class="btn">
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

        $kanton=$_POST['kanton'];

      $herkunft=$_POST['herkunft'];
      $grosse=$_POST['grosse'];
      $sex_orj=$_POST['sex_orj'];
      $interesse_am=$_POST['interessiert_an'];
      $status=$_POST['status'];
      $poreklo=$_POST['poreklo'];

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

      $titel=$_POST['titel'];
      $opis=$_POST['opis'];
      $platz=$_POST['platz'];
      $klinge=$_POST['klinge'];
      $tel=$_POST['tel'];
      $datum=$_POST['datum'];


$newupitunos="UPDATE user_oglas SET id_tip=$geschlecht,id_trazim=$interesse_am,umetnicko_ime='$name',id_drzava=$herkunft,email='$email',sifra='$password',id_rasa=$poreklo,id_kome_pojavljuje=$whoseeme,id_gradja=$gebaut,id_sex_orj=$sex_orj,id_brak_status=$status,id_tvoja_uloga=$was_magst_du,id_njeg_uloga=$was_mag_er,title='$titel',opis='$opis',id_pol=$geschlecht,visina='$grosse',id_boja_kose=$haarfarbe,id_duz_kose=$haarlength,id_boja_ociju=$augenfarbe,id_naocare_sociva=$brille,id_oberweite=$oberweite,ulica='$adresse_tref',platz='$platz',id_mesto=$kanton1,tel='$tel',studio_name='$name_tref',location_name='$name_tref1',interfon='$klinge',id_sredjenost=$spremnost,link='$website',id_brus=$bh,datum='$datum',id_kanton=$kanton where id_user=".$_GET['idgirla'];
$query =$conn->query($newupitunos) or die("los upit".mysqli_error());
echo "<script>alert('ihre informationen wurden geändert')</script>";


/*
,id_drzava=$herkunft,id_kanton=$kanton,email='$email',username='$username',sifra='$password',id_rasa=$poreklo,id_kome_pojavljuje=$whoseeme,id_gradja=$gebaut,id_sex_orj=$sex_orj,id_brak_status=$status,id_tvoja_uloga=$was_magst_du,id_njeg_uloga=$was_mag_er,title='$titel',opis='$opis',id_pol=$geschlecht,visina=$grosse,id_boja_kose=$haarfarbe,id_duz_kose=$haarlength,id_boja_ociju=$augenfarbe,id_naocare_sociva=$brille,brus=$bh,id_oberweite=$oberweite,ulica='$adresse_tref',platz=$platz,id_mesto=$kanton1,tel='$tel',studio_name='$name_tref',location_name='$name_tref1',interfon='$klinge',id_sredjenost=$spremnost,link='$website'
,id_kanton=$kanton
,brus=$bh
*/
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
<?php } ?>
