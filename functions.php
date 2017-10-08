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
	
 ?>
