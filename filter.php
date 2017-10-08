<?php 
    if(isset($_GET['filter']) && !empty($_GET['filter']))
    {
        
        $filter = "{$_GET['filter']}%";

        include("connectionFile/connection.php");

        $filterGirls = "SELECT * FROM kategorije WHERE kategorija LIKE ?";

        $stmtUpit = $conn->prepare($filterGirls);
        $stmtUpit->bind_param('s',$filter);
        $stmtUpit->execute();

        if($stmtUpit)
        {
            if($rez = $stmtUpit -> get_result())
            {
                    if($rez->num_rows > 0)
                    {
                        $lista = "";
                        while($row = $rez->fetch_assoc())
                        {
                            /*$lista.="<span class='spanAjax' onClick='ispis_u_polje(this)'>{$row['kategorija']}</span><br/>";*/
                            $lista.="<div class='spanAjax col-xs-12' onClick='ispis_u_polje(this)'>{$row['kategorija']}</div><br/>";
                        }
                        $lista.="";
                        echo $lista;
                    }
            }
        }
    }
    if(isset($_GET['filter_kanton']) && !empty($_GET['filter_kanton']))
    {
        
        $filter1 = "{$_GET['filter_kanton']}%";

        include("connectionFile/connection.php");

        $filterGirls1 = "SELECT * FROM kanton WHERE naziv_kanton LIKE ?";

        $stmtUpit1 = $conn->prepare($filterGirls1);
        $stmtUpit1->bind_param('s',$filter1);
        $stmtUpit1->execute();

        if($stmtUpit1)
        {
            if($rez = $stmtUpit1 -> get_result())
            {
                    if($rez->num_rows > 0)
                    {
                        $lista1 = "";
                        while($row = $rez->fetch_assoc())
                        {
                            $lista1.="<div class='spanAjax col-xs-12' onClick='ispis_u_polje1(this)'>{$row['naziv_kanton']}</div><br/>";
                        }
                        $lista1.="";
                        echo $lista1;
                    }
            }
        }
    }
 ?>