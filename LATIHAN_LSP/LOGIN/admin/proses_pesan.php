<?php
// include koneksi
include '../koneksi-db.php';

// menangkap data yang ada di form
$id = $_POST['id'];
$status = $_POST['status'];

// proses ke databse
$proses = "update orders set status='$status' where id='$id'";
$input= mysqli_query($koneksi,$proses);
if($input){
    ?>
    <script>
        alert('Paket Telah Di Kirim');
        window.location='pesan.php';
    </script>
    <?php
}else{
    ?>
    <script>
        alert('Paket Gagal Di kirim');
        window.location='pesan.php';
    </script>
    <?php
}

?>