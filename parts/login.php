<div class="login_form_inner zoom-anim-dialog mfp-hide" id="small-dialog">
           <h4>User Login</h4>
             <form class="" action="index.php" method="post">


               <input type="text" placeholder="Username" name="username">
               <input type="password" placeholder="Password" name="pass">
               <div class="login_btn_area">
                   <button type="submit" value="LogIn" name="login" class="btn form-control login_btn">LogIn</button>
                   <div class="login_social">
                       <h5>Login With</h5>
                       <ul>
                           <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                       </ul>
                   </div>
               </div>
           </form>
           <img class="mfp-close" src="img/close-btn.png" alt="">
</div>


        <?php



              if(isset($_POST['login'])){

                           $greske1 = array();
                           $podaci1 = array();
                           $reusername1="/^[A-z0-9_-]{3,15}$/";
                           $repw1="/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/";
                           $username1=$_POST['username'];
                           $password1=$_POST['pass'];

                           if(preg_match($reusername1,$username1)){
                             $podaci1[]=$username1;
                           }
                           else {
                             $greske1[]="username nije dobroo!";
                           }
                           if(preg_match($repw1,$password1)){
                             $podaci1[]=$password1;

                           }
                           else
                           {
                             $greske1[]="Greska u password";
                           }



                        if(count($greske1) == 0)
                        {
                           include("connectionFile/connection.php");
                           $upitlogin1 = "SELECT * FROM user where username='$username1' and password ='$password1'";
                           $rezupit1=$conn->query($upitlogin1)or die('losee');
                           if(mysqli_num_rows($rezupit1)==1)
                           {
                                  $row=mysqli_fetch_array($rezupit1);
                                  echo "<script>alert('radi');</script>";
                                  $_SESSION['username'] = $row['username'];
                                  $_SESSION['id_uloga'] = $row['id_user_uloga'];
                                  $_SESSION['id'] = $row['user_id'];
                                  $_SESSION['age'] = $row['age'];
                                  
                           }
                           else
                           {

                               $upitlogin12 = "SELECT * FROM user_oglas where username='$username1' and sifra ='$password1'";
                               $rezupit12=$conn->query($upitlogin12)or die('losee');
                               if(mysqli_num_rows($rezupit12)==1)
                               {
                                      $row=mysqli_fetch_array($rezupit12);
                                      echo "<script>alert('radi');</script>";
                                      $_SESSION['username'] = $row['username'];
                                      $_SESSION['id_uloga'] = $row['id_user_uloga'];
                                      $_SESSION['id'] = $row['id_user'];
                                      $_SESSION['age'] = $row['age'];
                               }
                               else
                               {
                                  echo "<script>alert('oglas nema rez');</script>";
                               }
                           }
                        }
                        else
                        {
                          echo "<script>alert('ima gresaka');</script>";
                        }


         }

         ?>
