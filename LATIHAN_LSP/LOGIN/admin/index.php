<html>
    <head>
        <title>Admin Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="style4.css">
    </head>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar w/ text</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
      </ul>
      <br>
      <span class="navbar-text">
        BOOKS STORE
      </span>
    </div>
  </div>
</nav>
        <!-- Cek halaman apakah sudah Login atau Belum -->
        
        <?php
        session_start();
        if($_SESSION['status']!='login'){
            header('location:login_admin.php?pesan=belum_login');
        }
        // ambil data semua dari tabel buku
        include '../koneksi-db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");

        // jumlahkan data yg ada di tabel
        $jumlah_buku = mysqli_num_rows($buku);
        $jumlah_anggota = mysqli_num_rows($anggota);
        ?>
        
        <!-- END -->
        <br>
        <center> <h4>Welcome <?php echo $_SESSION['admin']?> anda telah Login</h4> </center>
        <button><a href="sandbox.php">Sandbox</a></button>
        <button><a href="pesan.php">paket</a></button>
        <br>
        <body>
        <!DOCTYPE html>
        <html>
          <head>
            <title>Cara Design Table Dengan CSS | www.malasngoding.com</title>
            <link rel="stylesheet" type="text/css" href="style.css">
          </head>
          <body>
            <br>
            <br>
            <br>
            <br>
            <br>
            <h3>TOTAL BUKU TERSEDIA: <?php echo $jumlah_buku;?></h3>
    <a href="add.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Data</a>
    <a href="cetak_buku.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">Cetak</a>
    <a href="../logout.php" class="btn btn-md btn-danger" style="margin-bottom: 10px">Logout</a>
    <table class="table1">
      <tr>
        <th>Id_buku</th>
            <th>Katalog</th>
            <th>Judul buku</th>
            <th>Pengarang</th>
            <th>Tahun terbit</th>
            <th>Penerbit</th>
            <th>Harga</th>
            <th>Quantity</th>
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
            echo "<td>"."Rp. " . number_format($row['harga'])."</td>";
            echo "<td>".$qty = $row['qty']."</td>";
            
            ?>
            <td> 
                <a href="update.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">Edit</a>
                <a href="proses-delete.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">Hapus</a>
            </td>
            
            <?php 
            echo "</tr>";
        }
        ?>
	</table>	
  <br>
  <center>Total Harga Buku :<h6><?php
    $db = mysqli_query($koneksi, "SELECT * FROM buku;");
    while($r = mysqli_fetch_array($db)){
      $h[] = $r['harga'];
    }
    $totalHarga = array_sum($h);
    echo "Rp. " . number_format($totalHarga) . " ,-";
    ?></h6></center>
  <br>
  <br>
  <h1>Data Anggota</h1>
  <h3>Total Anggota : <?php echo  $jumlah_anggota; ?></h3>
    <a href="add_anggota.php" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Anggota</a>
    <a href="cetak_anggota.php" class="btn btn-md btn-warning" style="margin-bottom: 10px">Cetak</a>
	<table class="table1">
		<tr>
            <th>Id_anggota</th>
            <th>Nama</th>
            <th>No Telepon</th>
            <th>Alamat</th>
            <th>Email</th>
            <th>Password</th>
		</tr>

        <!-- menampilkan data buku -->
        <?php 
        include '../koneksi-db.php';
        $anggota = mysqli_query($koneksi, "SELECT * FROM anggota");
        foreach ($anggota as $rows){
            echo "<tr>";
            echo "<td>".$rows['id_anggota']."</td>";
            echo "<td>".$rows['nama']."</td>";
            echo "<td>".$rows['no_telp']."</td>";
            echo "<td>".$rows['alamat']."</td>";
            echo "<td>".$rows['email']."</td>";
            echo "<td>".$rows['password']."</td>";
            ?>
            
            <?php 
            echo "</tr>";
        }
        ?>
	</table>	
</body>
</html>