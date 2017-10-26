 <section class="adms_slider_area">
            <div class="container">
                <div class="">
                    <div class="adms_head">
                        <div class="col-md-12">
                            <div class="row left_adms">
                                <div class="pull-left">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">



                                <?php
                                    include("connectionFile/connection.php");

                                    $members = "SELECT * FROM partneri where status=2 ORDER BY RAND()  limit 12 ";
                                    $stmt = $conn->query($members);
                                    if($stmt)
                                    {
                                        while($row=mysqli_fetch_array($stmt))
                                        {

                                            echo "<div class='col-xs-3 col-lg-3'>
                                                <div class='item'>
                                                    <div class='team_items'>
                                                        <a href='{$row['link']}'>
                                                            <img class='banner' src='{$row['slika']}' height='100px' width='300px' alt=''>
                                                        </a>
                                                    </div>
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
        </section>
