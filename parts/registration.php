      <?php include("connectionFile/connection.php");?>
<!DOCTYPE html>
<html>
  <body>


    <script type="text/javascript">

function posalji()
{
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
          		/*alert("Vaša poruka je poslata,odgovor ce biti najkasnije sledečeg radnog dana");*/
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
                        <img src="img/girl.jpg" alt="" class="imgreg" style="
    width: 366px;">
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
                                <input type="text" class="form-control" id="age" placeholder="26" name="age" required>
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
                            <div class="">
                              <label for="">Bordel oder user?</label><br/>
                              <input type="radio" name="bordel" value="1" checked="checked">User<br/>
                              <input type="radio" name="bordel" value="6">Bordel<br/>
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


                                <button type="submit" value="LogIn" class="btn form-control login_btn" name="registeru">Register</button>
                            </div>
                            <?php

                                  if(isset($_REQUEST['registeru']))
                                  {

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
                                                $bordel=$_REQUEST['bordel'];

                                                $stmtUserEmailExist = $conn-> prepare("SELECT email FROM user WHERE email=?");
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
                                                    $idUserRegular= "";
                                                    $hash_ver = md5(rand(0,1000));
                                                    $status_verified = 0;
                                                    $password = md5($password);
                                                    $insertSql = "INSERT INTO user VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";

                                                    $insertSqlQuery = $conn->prepare($insertSql);

                                                    $insertSqlQuery->bind_param('issssiiiiisi',$idUserRegular,$email,$username,$password,$geschlecht,$tag,$monat,$jahr,$bordel,$age,$hash_ver,$status_verified);

                                                    $insertSqlQuery->execute();

                                                    if($insertSqlQuery)
                                                    {


                                                      //After inserting, send an email verification

                                                      include('phpmailer/PHPMailerAutoload.php');
                                                      include("connectionFile/define.php");
                                                      $mail = new PHPMailer;

                                                      //Enable SMTP debugging.
                                                      //$mail->SMTPDebug = 3; -> client ---> server dialog
                                                      //Set PHPMailer to use SMTP.
                                                    //$mail->isSMTP();
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

                                                      $mail->addAddress($email, $fName);

                                                      $mail->isHTML(true);

                                                      $mail->Subject = "Subject Text";
                                                      $mail->Body = "

                                                          <br/>
                                                          <p><strong>Herzlich willkommen „$username“ bei sodom24.com - Details zur Anmeldung:</strong></p><br/><br/>
                                                          Ihr Benutzername ist: $username<br/>

                                                          <b><a href='http://www.sodom24.com/verify.php?hash={$hash_ver}&email={$email}'>Klicken sie hier um Ihren Account zu verifizieren:</a></b><br/>
                                                          Link zur Anmeldung : https://www.sodom24.com/index.php<br/>
                                                          <p>Der Freischaltecode verfällt nach 24 h. Danach musst du dich erneut registrieren.<br/> Viel Spaß und Erfolg wünscht euch das SwissHOT-Team. info@sodom24.com https://www.sodom24.com<br/>
Willkommen auf www.sodom24.com SODOM24 ist das Erotikportal auf dem Du die grösste Auswahl an Girls, Clubs, Studios und Escort Dienste der Schweiz hast. Schnell unkomplizierte und echte Sex- und Callgirls. SODOM24.Ch steht für private Sex und Erotik Kontaktanzeigen und Inserate und ist das Schweizer Erotik-Portal, welches alle Anzeigen und Kontakte der Schweiz aufweist. Dank der Möglichkeit Inserate gratis aufzugeben, sind unsere Informationen besonders aktuell und zuverlässig. </p>

                                                      ";
                                                      $mail->AltBody = "Verifikation Sodom24";

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


                                      }
                            ?>

                        </form>
                        <img class="mfp-close" src="img/close-btn.png" alt="">
                    </div>
                </div>
            </div>
        </div>
