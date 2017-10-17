<?php include("connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
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
<title></title>
</head>
<body>


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
var reime= /^[A-z\s]{2,40}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-zA-Z0-9!@#$%^&*-_]{6,}/;
var reuser= /^[A-z0-9]{2,25}$/;
var reage= /^[0-9]{1,3}$/;

if(reime.test(ime))
{

  sadrzaj.push(ime);
    document.getElementById('reg_first').className = 'green';



}
else

{

  greske.push('erorr');
  document.getElementById('reg_first').className = 'red';



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

      greske.push('erorr');
      document.getElementById('reg_user').className = 'red';


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
      document.getElementById('reg_pass1').className = 'green';
}
else{
  greske.push('error');    document.getElementById('reg_pass1').className = 'red';
}
if(repass.test(pass))
{
  sadrzaj.push(pass);  document.getElementById('reg_pass').className = 'green';

}
else
{
    greske.push('erorr');
    document.getElementById('reg_pass').className = 'red';


}



if(sadrzaj.length == 6)
{
  alert("Angaben sind ok!");
  return true;


}
else {alert('Angaben überprüfen');
return false;}
}

  </script>
<?php include("parts/menu.php");

$upit="SELECT * FROM user where user_id=".$_GET['userch'];
$rez=$conn->query($upit) or die('los upit');
$r=mysqli_fetch_array($rez) ?>
<div class="register_form_inner zoom-anim-dialog margintp" id="register_form">
      <div class="row">
          <div class="col-md-6">
              <div class="registration_man">
                  <img src="img/girl.jpg" alt="" class="imgreg">
              </div>
          </div>
          <div class="col-md-6">
              <div class="registration_form_s">
                  <h4>Registration</h4>

                  <form class="" action="index.php" method="post" id="myform" onsubmit="return posalji();"  >


                      <div class="form-group">
                          <input type="email" class="form-control" id="reg_email" value="<?php echo $r['email']; ?>" placeholder="Email" name="email" required >
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" id="age" placeholder="26" value="<?php echo $r['age']; ?>" name="age" required>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="reg_user" placeholder="Username" value="<?php echo $r['username']; ?>" name="username" required>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" id="reg_pass" placeholder="Password" name="password" required>
                      </div>
                      <div class="form-group">
                          <input type="password" class="form-control" id="reg_pass1" placeholder="again password" name="password1" required>
                      </div>
                      <div class="form-group">
                          <div class="btn-group">

                              <select class="form-control" name="gender">
                                <option value="0">Geschlecht</option>
                                <option value="Mann">Mann</option>
                                <option value="Frau">Frau</option>
                                  <option value="Anderes">Anderes</option>
                              </select>
                          </div>
                      </div>
                      <div class="form-group">
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
                      <div class="reg_chose form-group">
                          <div class="reg_check_box">
                              <input type="radio" id="s-option" name="selector">
                              <label for="s-option">I`m Not Robot</label>
                              <div class="check"><div class="inside"></div></div>
                          </div>
                          <button type="submit" value="LogIn" class="btn form-control login_btn" name="registeru">Register</button>
                      </div>
                      <?php     if(isset($_REQUEST['registeru'])){
                          $email=$_POST['email'];
                          $fullname=$_POST['fullname'];
                          $username=$_POST['username'];
                          $password=$_POST['password'];
                          $password1=$_POST['password1'];
                          $geschlecht=$_POST['gender'];
                          $monat=$_REQUEST['monat'];
                          $tag=$_REQUEST['tag'];
                          $jahr=$_REQUEST['jahr'];
                          $age=$_REQUEST['age'];

    $reusername="/^[A-z0-9]{2,14}$/";
    $reime_prezime="/^[A-z0-9]{2,14}$/";
    $reemail="/^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/";
    $repw="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";
    $errors = array();
$podaci = array();

if(preg_match($reusername,$username)){
$podaci[]=$username;
}
else {
$gerrors[]="username nije dobroo!";
}
if(preg_match($reime_prezime,$fullname)){
$podaci[]=$reime_prezime;
}
else {
$errors[]="ime nije dobroo!";
}
if(preg_match($reemail,$email)){
$podaci[]=$reemail;
}
else {
$errors[]="email nije dobroo!";
}
if(preg_match($repw,$password)){
$podaci[]=$repw;
}
else {
$errors[]="pw nije dobroo!";
}





                            $upit="UPDATE user SET email='$email',username='$username',password='$password',male='$geschlecht',tag=$tag,monat=$monat,jahr=$jahr,age=$age";
                            $rezupit=$conn->query($upit)or die('losee');
                            echo "<script>alert('Update erfoglreich')</script>";


                          }
                      ?>

                  </form>
                  <img class="mfp-close" src="img/close-btn.png" alt="">
              </div>
          </div>
      </div>
  </div>
