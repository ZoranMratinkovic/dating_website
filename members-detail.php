<?php session_start(); 

?>

<!DOCTYPE html>
<html lang="en">
    <head>
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

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php 
        if(isset($_GET['id_girl']))
        {
            /*Ne zaboravi da proveris id girl*/
            include('connectionFile/connection.php');
            $id_girl = (int)$_GET['id_girl'];
         
           $sqlGirl = "SELECT * FROM user_oglas ug INNER JOIN boja_kose bk ON ug.id_boja_kose = bk.id_boja_kose INNER JOIN boja_ociju bo ON ug.id_boja_ociju = bo.id_boja_ociju INNER JOIN brak_status bs ON ug.id_brak_status = bs.id_brak_status INNER JOIN brus br ON ug.id_brus = br.id_brus INNER JOIN drzava drz ON ug.id_drzava = drz.id_drzava INNER JOIN duzina_kose dk ON ug.id_duz_kose=dk.id_duz_kose INNER JOIN gradja g on ug.id_gradja = g.id_gradja INNER JOIN kanton k ON ug.id_kanton=k.id_kanton INNER JOIN user_kat uk on ug.id_user = uk.id_user INNER JOIN kategorije kat on uk.id_kat = kat.id_kat INNER JOIN kome_se_pojavljuje kms ON ug.id_kome_pojavljuje = kms.id_kome_pojavljuje INNER JOIN njegova_uloga nju ON ug.id_njeg_uloga = nju.id_njeg_uloga INNER JOIN nocare_sociva naocs ON ug.id_naocare_sociva = naocs.id_naocare_sociva INNER JOIN oberweite ober ON ug.id_oberweite = ober.id_oberweite INNER JOIN poreklo po ON ug.id_rasa = po.id_poreklo INNER JOIN sex_orj sex ON ug.id_sex_orj = sex.id_sexorj INNER JOIN sredjenost sredj ON ug.id_sredjenost = sredj.id_sredjenost INNER JOIN status_gold sg ON ug.id_status_gold = sg.id_status INNER JOIN tip tp ON ug.id_tip = tp.id_tip INNER JOIN trazim traz ON ug.id_trazim = traz.id_trazim INNER JOIN tvoja_uloga tu ON ug.id_tvoja_uloga = tu.id_tvoja_uloga WHERE ug.id_user =? GROUP BY uk.id_user";
           
           

            $stm = $conn->prepare($sqlGirl);
            $stm->bind_param("i",$id_girl);
            $stm->execute();
            if($stm)
            {   
                if($rez=$stm->get_result())
                { 
                    while($row=$rez->fetch_assoc())
                    {
                         $usernm = $row['username'];
                         $id_user_uloga = $row['id_user_uloga'];
                         $name = $row['umetnicko_ime'];
                         $datum = $row['datum'];
                         $boja_kose = $row['boja_kose'];
                         $boja_ociju = $row['boja_ociju'];
                         $brak = $row['brak_status'];
                         $brus = $row['naziv_brus'];
                         $drzava = $row['naziv'];
                         $duz_kose = $row['duzina_kose'];
                         $gradja = $row['naziv_gradja'];
                         $kanton = $row['naziv_kanton'];
                         $kategorija = $row['kategorija'];
                         $ko_vidi = $row['naziv_pojava'];
                         $njeg_uloga = $row['naziv_njeg_uloga'];
                         $naoc = $row['naziv_naoc_soc'];
                         $oberweite = $row['oberweite'];
                         $poreklo = $row['naziv_poreklo'];
                         $sex_orj = $row['naziv_sexorj'];
                         $sredjenost = $row['sredjenost'];
                         $status = $row['status'];
                         $tip = $row['naziv_tip'];
                         $trazim = $row['Naziv'];
                         $tvoja_ul = $row['naziv_tvoja_uloga'];
                         $email = $row['email'];
                         $title = $row['title'];
                         $opis = $row['opis'];
                         $visina = $row['visina'];
                         $ulica = $row['ulica'];
                         $platz = $row['platz'];
                         $tel = $row['tel'];
                         $interfon = $row['interfon'];
                         $link = $row['link'];
                         $video = $row['video'];
                         $slika = $row['profilna_slika'];
                         $studio_name = $row['studio_name'];
                         $location_name = $row['location_name'];
                    }

                }
                else
                {
                    echo "<script>alert('nema rez');</script>";
                }
            }
            else
            {
                echo "<script>alert('nije izvrseno');</script>";
            }
        }
        else
        {
            echo "<script>alert('nije je');</script>";
        }

     ?> 
        
        <!--================ login.php =================-->
            <?php include('parts/login.php'); ?>
       <!--================ login.php =================-->

        <!--================ Registration.php =================-->
            <?php include('parts/registration.php'); ?>
        <!--================ Registration.php =================-->

        <!--================Frist Main hader Area =================-->
            <?php include('parts/menu_others.php'); ?>
        <!--================Frist Main hader Area =================-->
        
        <!--================Banner Area =================-->
        <?php 
            if(isset($_SESSION['id_uloga']) && $_SESSION['id_uloga']==$id_user_uloga && $_SESSION['username']==$usernm)
            {
                //the last comparison is to make user that we separated user and user_oglas table, because of id matches
                include('parts/members_detail_user_oglas.php');

            }
            else
            {
                include('parts/members_detail_user.php');
            }
         ?>
        <!--================End Banner Area =================-->
        
        <!--================Blog grid Area =================-->

        <!--================End Blog grid Area =================-->
        
        <!--================Footer Area =================-->
        <?php include('parts/footer.php'); ?>
        <!--================End Footer Area =================-->
        
        
        
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.1.4.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <!--RS5.0 Extensions-->
        <script src="vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
  
        <!-- Extra plugin js -->
        <script src="vendors/image-dropdown/jquery.dd.min.js"></script>
        <script src="vendors/animate-css/wow.min.js"></script>
        <script src="vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="vendors/bootstrap-selector/bootstrap-select.js"></script>
        <script src="vendors/bootstrap-datepicker/js/moment-with-locales.js"></script>
        <script src="vendors/bootstrap-datepicker/js/bootstrap-datetimepicker.min.js"></script>
        <script src="vendors/counter-up/waypoints.min.js"></script>
        <script src="vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/tooltip/tooltip.js"></script>
        <script src="vendors/bs-tooltip/jquery.webui-popover.min.js"></script>
        <script src="vendors/progress-circle/circle-progress.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        
        
        <script src="js/video_player.js"></script>
        <script src="js/costome-circle.js"></script>
        <script src="js/theme.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#ChangeProfilePic').change(function(){
                    $('#SubmitProfileChange').fadeIn();

                });
                $('#video1').change(function(){
                    $('#insertVideo').fadeIn();

                });
            });
        </script>
    </body>
</html>