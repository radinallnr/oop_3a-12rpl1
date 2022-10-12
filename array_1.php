<!-- table -->
<?php
$people = array("kode_barang"=>["1011","1012","1013"],
                "nama_barang"=>["topi","hoodie","varsity"],
                "Harga"=>[20000,50000,100000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            // echo "\n";
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>
<!-- end -->