<?php

//varibael lokal hanya bisa di akses dari scope dimana dia di definisikan
$nama = " gg gamink";

function haloDunia(){
    $nama = "adiprima";
    echo $nama;
}

haloDunia();
echo $nama;



?>