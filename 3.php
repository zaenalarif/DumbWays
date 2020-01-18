<?php

function cetak_gambar($panjang) {
    $angka = $panjang % 2;
    if($angka == 0){

        for($i = 1; $i <= $panjang; $i++){
            for($j = 1; $j <= $panjang; $j++){
                if($i == 1 || $i == ($panjang)){
                    echo "+";
                }else{
                    if($j == 3 || $j == 6)
                        echo "+";
                    else
                        echo "-";
                }                
            }
            echo "\n";
        }

    }else{
        echo "bukan bilangan genap harap ulangi";
    }
}

cetak_gambar(8);
?>