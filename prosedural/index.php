<?php 

// prosedural adalah pemrograman yang tidak perlu adanya instansiasi, cukup menggunakan fungsi 

// contoh dari prosedural 
echo date('d-m-y'); // membuat fungsi tanpa ada objek

// contoh dari pendekatan saja 
$date = new Datetime(); // objek
echo $date->format('d,m,y');

?>