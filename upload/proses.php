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
$filektp = (object) @$_FILES['ktp'];

//mulai upliad file
$uploadfotosukses = move_uploaded_file(
    $filefoto->tmp_name, "{$folder_upload}/{$filefoto->name}"
);

$uploadfotoktpsukses = move_uploaded_file(
    $filektp->tmp_name, "{$folder_upload}/{$filektp->name}"
);

if ($uploadfotosukses) {
    $link = "{$folder_upload}/{$filefoto->name}";    
    echo "sukses upload foto : <a href = '{$link}'> {$filefoto->name} </a>";
    echo "<br>";
}
if ($uploadfotoktpsukses) {
    $link = "{$folder_upload}/{$filektp->name}";    
    echo "sukses upload ktp : <a href = '{$link}'> {$filektp->name} </a>";
    echo "<br>";
}

//batas ukuran file yg di upload
if ($filefoto->size > 1000 * 2000){
    die("file tidak boleh lebih dari 2mb");
}

//jenis gambar yg bisa di upload
if ($filektp->type !== 'image/jpg'){
    die("foto harus berformat jpg");
}
// echo "<pre>";
// print_r ($files);
// echo "</pre>";
?>