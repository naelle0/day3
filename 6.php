<?php


// $a = 100;
// $b = "alfa";
// $alfa =  0.05;
// $sakit = 0.03;
// $izin = 0.03;


// $keterangan = $b == "alfa" ? $a - $a * $alfa : ($b == "sakit" || $b == "izin" ? $a - $a * 0.03 : "tidak berkurang");
//ternary
// echo "$keterangan";

$izinsakit = 1;
$alfa = 0;
$persentase = 100;  

$hasil = $izinsakit ? $persentase - 3 : ($alfa ? $persentase - 5 : $persentase);

echo $hasil;
//booleans

?>
