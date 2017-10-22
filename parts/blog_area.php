<div class="container mt-35">
    <div class="welcome_title">
            <h3>Premium user</h3>
            <img src="img/w-title-b.png" alt="" title="">
    </div>
</div>
<section class="blog_slider_area mt-35">
            <div class="blog_slider_inner">
              <?php $upit="SELECT * FROM user_oglas where id_user_uloga=5 or id_user_uloga=7";
                    $rezupit=$conn->query($upit);
                    while($r=mysqli_fetch_array($rezupit)){
                          echo "  <div class='item'>
                                <div class='single_blog_slider'>
                                    <img src='{$r['profilna_slika']}' height='400' alt=''>
                                    <div class='blog_item_content'>
                                        <h4>{$r['umetnicko_ime']}</h4>
                                        <h5>{$r['datum']} <span>|</span> Dating</h5>
                                        <ul>

                                            <li><a href='members-detail.php?id_girl={$r['id_user']}'><i class='fa fa-search'></i></a></li>
                                            <li><a href='#'><i class='fa fa-link'></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>";
                    }
               ?>


            </div>
        </section>
