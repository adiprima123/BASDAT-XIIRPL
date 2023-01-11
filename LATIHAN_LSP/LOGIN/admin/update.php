<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <h1>Update Buku</h1>
        <?php
        include '../koneksi-db.php';
        $id_buku = $_GET['id_buku'];
        $data = mysqli_query($koneksi, "select * from buku where id_buku = '$id_buku'");
        // dataa yang sudah di cocokan dengan id_buku , di meledak menggunakakn facth array sehingga bisa di taro satu satu di formny
        while($meledak = mysqli_fetch_array($data)){
        ?>
        <form class="update" action="proses-update.php" method="post">
            <!-- id buku -->
            <input type="hidden" name="id_buku" value="<?php echo $meledak ['id_buku'];?>">
            <!-- id buku -->
            
            <label>Masukan Id Katalog</label>
            <br>
            <input type="number" name="id_katalog" value="<?php echo $meledak ['id_katalog'];?>" placeholder="Masukkan ID Katalog">
            <br>
            <label>Masukan Judul Buku</label>
            <br>
            <input type="text" name="judul_buku"value="<?php echo $meledak ['judul_buku'];?>" placeholder="Masukkan Judul Buku">
            <br>
            <label>Masukan pengarang</label>
            <br>
            <input type="text" name="pengarang"value="<?php echo $meledak ['pengarang'];?>" placeholder="Masukkan Nama Pengarang">
            <br>
            <label>Masukan Tahun Terbit</label>
            <br>
            <input type="date" name="thn_terbit"value="<?php echo $meledak ['thn_terbit'];?>" placeholder="Masukkan Tahun Terbit">
            <br>
            <label>Masukan Harga</label>
            <br>
            <input type="number" name="harga"value="<?php echo $meledak ['harga'];?>" placeholder="Masukkan harga">
            <br>
            <label>Masukan penerbit</label>
            <br>
            <input type="text" name="penerbit"value="<?php echo $meledak ['penerbit'];?>" placeholder="Masukkan Penerbit">
            <br>
            <br>
            <input class="submit" type="submit" value="submit"></input>
            <input class="cancel" type="reset" value="cancel"></input>
        </form>
        <?php
        }
        ?>
    </body>
</html>