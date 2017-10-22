<section class="register_members_slider">
            <div class="container">
                <div class="welcome_title">
                    <h3>Zuletzt registrierte user</h3>
                    <img src="img/w-title-b.png" alt="">
                </div>
                <div class="r_members_inner">

                    <?php
                        include("connectionFile/connection.php");

                        $members = "SELECT id_user,umetnicko_ime,datum,profilna_slika FROM user_oglas ORDER BY id_user_uloga DESC";
                        $stmt = $conn->query($members);
                        if($stmt)
                        {
                            while($row=mysqli_fetch_array($stmt))
                            {
                                echo "<div class='item'>
                                            <a href='members-detail.php?id_girl={$row['id_user']}'>
                                                <img class='members_profile' src='{$row['profilna_slika']}' alt=''>
                                            </a>
                                            <h4>{$row['umetnicko_ime']}</h4>
                                            <h5>{$row['datum']}</h5>
                                      </div>";
                            }
                        }
                        else
                        {
                            echo "<script>alert('radi');</script>";
                        }
                     ?>


                </div>

            </div>
            <div class="container mt-35">
                <div class="row">
                    <div class="col-xs-12 text-center ">
                        <a href="members1.php" role='button' class='btn btn-lg dugmeSearch mtNula'>Alle anzeigen</a>

                    </div>
                </div>
            </div>
        </section>
