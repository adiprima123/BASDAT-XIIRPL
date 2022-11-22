<?php

$files = $_FILES;
$folder_upload = "./assets/uploads";

if (!is_dir($folder_upload)){
    //jika tidak ada maka folder harus dibuat terlebih dahulu
    mkdir($folder_upload, 0777, $rekursif = true);
}

//simpan masing2 file ke dalam variabel
// simpan file ke dalam array dan ubah menjadi objek
$filefoto = (object) @$_FILES['foto'];

//mulai upliad file
$uploadfotosukses = move_uploaded_file(
    $filefoto->tmp_name, "{$folder_upload}/{$filefoto->name}"
);

// echo "<pre>";
// print_r ($files);
// echo "</pre>";
?>