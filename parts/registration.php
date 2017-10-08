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
var reime= /^[a-z]{2,14}$/;
var reemail= /^(\w+[\-\.])*\w+@(\w+\.)+[A-Za-z]+$/;
var repass= /^[a-z]{2,14}$/;
var reuser= /^[a-z]{2,14}$/;

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



if(sadrzaj.length == 4)
	{
		alert("Vaša poruka je poslata,odgovor ce biti najkasnije sledečeg radnog dana")

}
else {alert('ima greske!!!')}
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
                        <form class="" action="#" method="post" >


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
                            <div class="reg_chose form-group">
                                <div class="reg_check_box">
                                    <input type="radio" id="s-option" name="selector">
                                    <label for="s-option">I`m Not Robot</label>
                                    <div class="check"><div class="inside"></div></div>
                                </div>
                                <button type="button" value="LogIn" class="btn form-control login_btn" name="registeru" onclick="posalji();">Register</button>
                            </div>

                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
