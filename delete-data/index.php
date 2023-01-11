<html>
    <head>
        <title>show data</title>
    </head>
    <body>
        <h1>tampilkan data buku</h1>
        <table border="1">

            <tr>
            <th>id_buku</th>
            <th>katalog</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>aksi</th>
        </tr>
        <!-- menampilkan data buku -->
        <?php
        include 'koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id = $row['id_buku']."</td>";
            echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td><a href="proses.php?id_buku=<?php echo $row['id_buku']?>">HAPUS</td>
            <?php
            echo "</tr>";
            
        }
        ?>
        </table>
    </body>
    </html>