<?php

include '../koneksi-db.php';

// menangkap ada yang ada di from
$nama= $_POST['nama'];
$telp= $_POST['telp'];
$alamat= $_POST['alamat'];
$email= $_POST['email'];
$pass= $_POST['pass'];

// menginput database
$notif = mysqli_query($koneksi,"insert into anggota values('','$nama','$telp','$alamat','$email','$pass')");

if($notif){
    ?>
    <script>
        alert('Data Berhasil');
        window.location='index.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Data Gagal');
        window.location='index.php';
    </script>
    <?php
}
?>