<html>
    <head>
        <title>Anggota Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
        <center> <h3>Halaman Anggota</h3> </center>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:../login.php?pesan=belum_login');
        }
        ?>

        <!-- END -->
        <center> <h4>Welcome <?php
        include '../koneksi-db.php';
        $email = $_SESSION['email'];
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota where email = '$email' ");
        foreach($anggota as $nama){
            echo $nama ['nama'];
            echo $nama['id_anggota'];
        }
        ?> anda telah Login</h4> </center>

        <body>
        <div class="container" style="margin-top: 80px">
        <div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <marquee direction="right"><h2>BUKU YANG TERSEDIA</h2></marquee>
            </div>
            <div class="card-body">
            <a href="update-anggota.php?id_anggota=<?php echo $nama ['id_anggota'] ?>" class="btn btn-primary" style="margin-bottom: 10px">EDIT PROFILE</a>
            <a href="../logout.php" class="btn btn-danger" style="margin-bottom: 10px">LOGOUT</a>
            <!-- menampilkan isi buku -->
        <table class="table table-bordered" id="myTable">
        <tr>
            <th>ID Buku</th>
            <th>Katalog</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Aksi</th>
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi-db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td>
            <a href="keranjang.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-info">Add To Cart</a> 
            </td>

            <?php 
            echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
        </div>
        </div>
        </div>

        </body>

</html>