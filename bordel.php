<?php include("connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="img/fav-icon.png" type="image/x-icon" />
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>VeroDate - Dating Social Network Website</title>

<!-- Icon css link -->
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
<title></title>
</head>
<body>


<script type="text/javascript">
function posalji() {
alert('radii');
var email = document.getElementById('reg_email').value;
var ime = document.getElementById('reg_first').value;
var user = document.getElementById('reg_user').value;
var pass=document.getElementById('reg_pass').value;
var pass1=document.getElementById('reg_pass1').value;


var greske= new Array();
var sadrzaj=new Array();
var greskeID = new Array();
var reime= /^[A-z\s]{2,40}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-zA-Z0-9!@#$%^&*-_]{6,}/;
var reuser= /^[A-z0-9]{2,25}$/;


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



if(sadrzaj.length == 5)
{
alert("Vaša poruka je poslata,odgovor ce biti najkasnije sledečeg radnog dana");
return true;


}
else {alert('ima greske!!!');
return false;}
}

</script>
<?php include("parts/menu.php"); ?>
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
                          <input type="email" class="form-control" id="reg_email" placeholder="Email" name="email" required >
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" id="reg_first" placeholder="Bordel Name" name="fullname" required>
                      </div>

                      <div class="form-group">
                          <input type="text" class="form-control" id="reg_user" placeholder="Username" name="username" required>
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

                      <div class="reg_chose form-group">

                          <button type="submit" value="LogIn" class="btn form-control login_btn" name="register1">Register</button>
                      </div>

                      <?php     if(isset($_REQUEST['register1'])){
                          $email=$_POST['email'];
                          $fullname=$_POST['fullname'];
                          $username=$_POST['username'];
                          $password=$_POST['password'];
                          $password1=$_POST['password1'];






                            $upit1="INSERT INTO user VALUES('','$email','$username','$password','bordel',1,1,1,6,1)";
                            $rezupit=$conn->query($upit1)or die('losee');
                            echo "<script>alert('radii upit')</script>";


                          }
                      ?>

                  </form>
                  <img class="mfp-close" src="img/close-btn.png" alt="">
              </div>
          </div>
      </div>
  </div>
        <?php include("parts/footer.php"); ?>
