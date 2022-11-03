<?php

//coba buat fungsi tisu
function tisu(){
    echo "<h1>HAI TOD!<h1>";
    echo "<h3>welcome back<h3>";
}

//coba buat fungsi yang ada parameterny
function kalimat($nama, $jumlah, $harga){
    echo "<h2>saat aku menggunakan {$nama}<h2>";
    echo "<h2>aku gunakan {$jumlah} satu lembar <h2>";
    echo "<h2>{$jumlah} harganya {$harga}<h2>";
}

kalimat('tisu', 'satu lembar', '2000');

//count
$a = ['saat','aku','menggunakan', 'tisu'];
$b = ['aku','gunakan','satu', 'lembar', 'satu', 'lembar'];
$c = ['satu','lembar','harganya', '2000'];

$count1 = count($a);
$count2 = count($b);
$count3 = count($c);

var_dump($count1);
echo "<br>";
var_dump($count2);
echo "<br>";
var_dump($count3);
echo "<br>";
?>