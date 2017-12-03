
            <div class="container mt-35">





                                <?php
                                    include("connectionFile/connection.php");

                                    $members = "SELECT * FROM partneri where status=2 ORDER BY RAND()  limit 12 ";
                                    $stmt = $conn->query($members);
                                    if($stmt)
                                    {
                                        while($row=mysqli_fetch_array($stmt))
                                        {

                                            echo "<div class='col-xs-6 col-md-3'>
                                                    <div class='item'>
                                                        <div class='team_items'>
                                                            <a href='{$row['link']}'>
                                                                <img class='banner' src='{$row['slika']}' height='130px' width='100%' alt=''>
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
