 <section class="adms_slider_area">
            <div class="container">
                <div class="adms_inners">
                    <div class="adms_head">
                        <div class="col-md-12">
                            <div class="row left_adms">
                                <div class="pull-left">
                                    <h3>Banners</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="adms_slider_inners">
                        <div class="slider_adms_active team_inner_area">
                            

                                <?php
                                    include("connectionFile/connection.php");

                                    $members = "SELECT * FROM partneri";
                                    $stmt = $conn->query($members);
                                    if($stmt)
                                    {
                                        while($row=mysqli_fetch_array($stmt))
                                        {
                                           
                                            echo "
                                                <div class='item'>
                                                    <div class='team_items'>
                                                        <a href='{$row['link']}'>
                                                            <img class='members_profile' src='{$row['slika']}' alt=''>
                                                        </a>
                                                    </div>
                                                </div>
                                            ";
                                        }
                                    }
                                    else
                                    {
                                        echo "<script>alert('radi');</script>";
                                    }
                                ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>