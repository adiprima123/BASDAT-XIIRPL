<?php
// include koneksi
include '../koneksi-db.php';

// menangkap data yang ada di form
$id_buku = $_POST['id_buku'];
$id_katalog = $_POST['id_katalog'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];
$thn_terbit = $_POST['thn_terbit'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];

// menginput database
$input = mysqli_query($koneksi,"update buku set id_katalog ='$id_katalog',judul_buku='$judul_buku',pengarang='$pengarang',thn_terbit='$thn_terbit',penerbit='$penerbit',harga='$harga'where id_buku='$id_buku'");

// Mengembalikan ke halaman awal
if($input){
    ?>
    <script>
        alert('data berhasil Diubah');
        window.location = "index.php"
    </script>

    <script>
        alert('data gagal Diubah');
        window.location = "index.php";
    </script>
    <?php
}
?>