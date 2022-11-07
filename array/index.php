<?php

//array adalah tipe daata yg berisi beberapa tipe data (string maupun integer)
//keynya diawali 

//array asosiatif
//keynya berubah menjadi tipe data string

$siswa = [
    //keynya bisa int/string
    '1' => 'pratama',
    'sipalingwibu' => 'yoga',
    'sipalingnetral' => 'hasan'
];

echo "siapa si paling ganz...?";
echo "<br/>";
echo "{$siswa['1']}";
//array multideimension
//ada array di dalam array

$togel = [
    [1,2,3,4,5],    
    [6,7,8,9,22],
    [12,15,13,14,51],
    [19,21,31,47,35]
];

//cara panggil array
echo $togel [2][3];

//array push
//array push berguna untuk menerima 2 parameter, parameter pertama untuk target, paramaeter ke 2 untuk nilai yg dimasukkan

$sayur = ['bayem', 'kangkung', 'sawi'];
$buah = ['pisang', 'kelapa', 'coklat'];

//cara pertama utk menampilkan item
array_push($buah, 'timun');

//cara ke 2
$sayur[] = 'labu';

echo $buah [3];
echo $sayur [3];


?>