<?php
// function itu ada 2, ada yanng mengembalikan nilai dan ada yang tidak \
// array yang berisi tiga nilai 
$a = ['merah','kuning','hijau'];

// fungsi is_null itu mengembalikan nilai bernilai true atau false
$fungsi_is_null = is_null($a);

// fungsi dari is_array itu mengembalikan apakah array atau tidak 
$fungsi_is_array = is_array($a);

// fungsi dari count
$count = count($a);

// fungsi mengenkripsikan karakter MDS
$enkripsi = md5('pratam tukang tidur');

// fungsi 
var_dump($fungsi_is_null);
echo "<br>";
var_dump($fungsi_is_array);
echo "<br>";
var_dump($count);
echo "<br>";
var_dump($enkripsi);
?>