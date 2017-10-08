<?php 
function all_members()
{
	$all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,k.naziv_kanton,bs.brak_status FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status";

	include('connectionFile/connection.php');

	$stmt = $conn->query($all_members);

	if($stmt)
	{
			while($row=mysqli_fetch_array($stmt))
			{
				echo " <div class='col-sm-2 col-xs-6'>
                        <div class='active_mem_item'>
                            <ul class='nav navbar-nav'>
                                <li class='dropdown tool_hover'>
                                <a href='' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'><img class='AllMembersPic img-circle' src='{$row['profilna_slika']}' alt=''></a>
                                    <ul class='dropdown-menu'>
                                        <li>
                                            <div class='head_area'>
                                                <h4>{$row['umetnicko_ime']}</h4>
                                                <h4>{$row['title']}</h4>
                                            </div>
                                            <div class='media'>
                                                <div class='media-left'>
                                                    <img class='img-60x60 img-circle' src='{$row['profilna_slika']}' alt='' title=''>
                                                </div>
                                                <div class='media-body'>
                                                    <h6>29 years old <br> From {$row['naziv_kanton']} <br> {$row['brak_status']}</h6>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <h4>{$row['umetnicko_ime']}</h4>
                            <h5>{$row['title']}</h5>
                        </div>
                    </div>";
			}
	}
}
///All_members_with_desc function lists all members on members1.php
function all_members_with_desc()
{
    $all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,uo.opis,k.naziv_kanton,bs.brak_status FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status";

    include('connectionFile/connection.php');

    $stmt = $conn->query($all_members);

    if($stmt)
    {
            while($row=mysqli_fetch_array($stmt))
            {
                $opis = substr($row['opis'],0,strlen($row['opis'])/4);
                echo " <div class='col-md-4 col-sm-6'>
                                    <div class='blog_grid_item'>
                                        <div class='blog_grid_img '>
                                            <img src='{$row['profilna_slika']}' class='img-270x299' alt=''>
                                            <div class='blog_share_area '>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'><i class='fa fa-heart' aria-hidden='true'></i>95</a>
                                            </div>
                                        </div>
                                        <div class='blog_grid_content'>
                                            <h3>{$row['title']}</h3>
                                            <div class='blog_grid_date'>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['umetnicko_ime']}</a>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['datum']}</a>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['brak_status']}</a>
                                            </div>
                                            <p>{$opis}...</p>
                                            <a href='members-detail.php?id_girl={$row['id_user']}'>Get in touch<i class='fa fa-angle-double-right'></i></a>
                                        </div>
                                    </div>
                                </div>";
            }
    }
}
function show_specific_category($id_cat)
{
    $all_members = "SELECT uo.id_user,uo.title,uo.umetnicko_ime,uo.datum,uo.profilna_slika,uo.opis,k.naziv_kanton,bs.brak_status,kat.kategorija FROM user_oglas uo INNER JOIN kanton k ON uo.id_kanton=k.id_kanton INNER JOIN brak_status bs ON uo.id_brak_status = bs.id_brak_status INNER JOIN user_kat uk on uo.id_user = uk.id_user INNER JOIN kategorije kat on uk.id_kat = kat.id_kat WHERE kat.id_kat=?";

    include('connectionFile/connection.php');

    $stmt = $conn->prepare($all_members);
    $stmt->bind_param('i',$id_cat);
    $stmt->execute();
    if($stmt)
    {
        if($rez = $stmt->get_result())
        {
            $count = $rez->num_rows;
            if($count > 0)
            {
                while($row=$rez->fetch_assoc())
                {
                    $opis = substr($row['opis'],0,strlen($row['opis'])/4);
                    echo " <div class='col-md-4 col-sm-6 sa'>
                                        <div class='blog_grid_item'>
                                            <div class='blog_grid_img '>
                                                <img src='{$row['profilna_slika']}' class='img-270x299' alt=''>
                                                <div class='blog_share_area '>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'><i class='fa fa-heart' aria-hidden='true'></i>95</a>
                                                </div>
                                            </div>
                                            <div class='blog_grid_content'>
                                                <h3>{$row['title']}</h3>
                                                <div class='blog_grid_date'>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['umetnicko_ime']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['datum']}</a>
                                                    <a href='members-detail.php?id_girl={$row['id_user']}'>{$row['brak_status']}</a>
                                                </div>
                                                <p>{$opis}...</p>
                                                <a href='members-detail.php?id_girl={$row['id_user']}'>Get in touch<i class='fa fa-angle-double-right'></i></a>
                                            </div>
                                        </div>
                                    </div>";
                }
            }
            else
            {
                        
                        echo "<div class='alert alert-warning'>
                            <strong>Warning!</strong> No results for that category!
                            </div>";
                        
            }
            
        }
    }

}	
 ?>
