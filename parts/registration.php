      <?php include("connectionFile/connection.php");?>
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
var reime= /^[A-z/s]{2,14}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-zA-Z0-9!@#$%^&*-_]{6,}/;
var reuser= /^[A-z0-9]{2,14}$/;

if(reime.test(ime))
	{
		sadrzaj.push(ime);


	}
	else

	{

		greske.push('erorr');

	}
  if(reuser.test(user))
  	{
  		sadrzaj.push(user)


  	}
  	else

  	{

  			greske.push('erorr');

  	}
	if(reemail.test(email))
	{
		sadrzaj.push(email);

	}
	else
	{
		greske.push('erorr');

	}

  if(pass==pass1){
      sadrzaj.push(pass)
  }
  else{
    greske.push('error')
  }
	if(repass.test(pass))
	{
		sadrzaj.push(pass)

	}
	else
	{
			greske.push('erorr');

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
    <div class="register_form_inner zoom-anim-dialog mfp-hide" id="register_form">
            <div class="row">
                <div class="col-md-6">
                    <div class="registration_man">
                        <img src="img/girl.jpg" alt="">
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
                                <input type="text" class="form-control" id="reg_first" placeholder="Full Name" name="fullname" required>
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
  $errors[]="username nije dobroo!";
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





                                  $upit="INSERT INTO user VALUES('','$email','$username','$password','$geschlecht',$tag,$monat,$jahr,1)";
                                  $rezupit=$conn->query($upit)or die('losee');


                                }
                            ?>

                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
