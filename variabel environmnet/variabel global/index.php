<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah anggota Brizzer";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " g4y";
    function lokal(){
        $skil = " saya bisa belajar ";
        echo $skil;
    }
    lokal();
    echo $skil;

?>