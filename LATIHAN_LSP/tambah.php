<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Tambah Data</title>
</head>
<body>
    <div class="judul"> 
        <ul>
            <li><a>Latihan LSP</a></li>
        </ul>
    </div>
    <br>
    <br>
    <h1>Menampilkan Data Buku</h1>
    <button class="tambah-data"><a href="add.php">Tambah data</button>
    <table class="table" border="1">
    <tr>
        <th>Katalog</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th>Aksi</th>
    </tr>
    <?php
    include 'koneksi.php';
    $buku = mysqli_query($koneksi, "SELECT * FROM buku");
    foreach ($buku as $row){
        echo "<tr>";
        echo "<td>".$id_katalog = $row['id_katalog']."</td>";
        echo "<td>".$judul_buku = $row['judul_buku']."</td>";
        echo "<td>".$pengarang = $row['pengarang']."</td>";
        echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
        echo "<td>".$penerbit = $row['penerbit']."</td>";
        ?>
        <td><a href="proses-delete.php?id_buku=<?php echo $row['id_buku']?>">HAPUS</td>
        <?php
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>