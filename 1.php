<?php

$tabungan_awal  = 3000000;
$bunga          = 2.5 / 100;

$tabungan       = $tabungan_awal;
$bulan          = 12;

for($i = 1; $i <= $bulan; $i++) {
    $bunga_tabungan = $tabungan * $bunga;
    $tabungan += $bunga_tabungan;
    echo "$i . Uang tabungan menjadi = $tabungan - ";
    echo "bunga = $bunga_tabungan\n";
}


?>