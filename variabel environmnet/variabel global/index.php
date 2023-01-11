<?php 
    // global
    require 'global.php';

    // statis
    function statis(){
        static $var = " saya adalah anggota perpus";
        echo $var;
        $var++;
    }
    statis();

    // lokal
    $skil = " gtw";
    function lokal(){
        $skil = " saya bisa belajar ";
        echo $skil;
    }
    lokal();
    echo $skil;

?>