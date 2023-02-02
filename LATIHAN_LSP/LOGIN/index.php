<html>
    <head>
        <title>SELAMAT DATANG DI PERPUSTAKAAN</title>
        <!-- <link rel="stylesheet" href="style1.css"> -->
    </head>
    <body>
    <div class="container">
        <div class="tengah">
            <form action="">
                <h1>Selamat Datang Di Perpustakaan</h1>
                <hr>
                <p>Pilih Akun Untuk Masuk</p>
                
                <!-- Buat DropDown  -->
                    <tr>
                        <td>
                            <a href="admin/login_admin.php"><button type="button" href="admin/login_admin.php">Masuk Sebagai Admin</button>
                        </td>
                        <td>
                            <a href="user/login.php"> <button type="button" href="admin/login_admin.php">Masuk Sebagai Anggota</button>
                        </td>
                    </tr>
                <!-- Akhir DropDown -->

            </form>
        </div>
        <!-- <div class="foto"> -->
            <!-- <img src="foto2.png" alt=""> -->
        <!-- </div> -->
        <table border="1">
        <tr>
            <!-- <th>id_buku</th> -->
            <!-- <th>katalog</th> -->
            <th>judul buku</th>
            <th>pengarang</th>
            <th>tahun terbit</th>
            <th>penerbit</th>
            <th>Harga</th>
            <th>Quantity</th>
            <!-- <th>Aksi</th> -->
        </tr>

        <!-- menampilkan data buku -->
        <?php 
        include 'koneksi-db.php';
        $buku = mysqli_query($koneksi, "SELECT * FROM buku");
        foreach ($buku as $row){
            echo "<tr>";
            // echo "<td>".$id_buku = $row['id_buku']."</td>";
            // echo "<td>".$katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$thn_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            echo "<td>Rp.".$harga = $row['harga']."</td>";
            echo "<td>".$qty = $row['qty']."</td>";
            ?>

            <!-- <td> 
                <a href="keranjang.php?id_buku=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">ADD TO CART</a>
            </td> -->

            <?php 
                echo "</tr>";
        }
        ?>
        

        </tbody>
        </table>
    </div>
    </body>
</html>