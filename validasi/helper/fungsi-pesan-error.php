<?php

$listpesanerror = [
    'required' => function($field){
        return "field ($field) harus di isi";
        //pesan error jika tidak di isi
    },
    'email' => function($field){
        return "field($field) harus berupa email yg valid";
        //pesan error jika isiny blm ada @ keong
    },
    'username' => function($field){
        return "field($field) hanya boleh angka huruf dan underscore";
        //pesan error JIKALAU
    },
    'numeric' => function($field){
        return "field($field) harus berupa angka";
        //pesan error muncul jika isiny huruf
    }
]

?>