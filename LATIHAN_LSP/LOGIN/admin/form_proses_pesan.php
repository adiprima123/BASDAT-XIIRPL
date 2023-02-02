<html>
    <head>
        <title>Update Data</title>
    </head>
    <body>
        <h1>Proses pengiriman</h1>
        <?php
        include '../koneksi-db.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi, "select * from orders where id = '$id'");
        // dataa yang sudah di cocokan dengan id_buku , di meledak menggunakakn facth array sehingga bisa di taro satu satu di formny
        while($meledak = mysqli_fetch_array($data)){
        ?>
        <form class="update" action="proses_pesan.php" method="post">
            <!-- id buku -->
            <input type="hidden" name="id" value="<?php echo $meledak ['id'];?>">
            <!-- id buku -->
            
            <label>Status</label>
            <br>
            <input type="number" name="status" value="<?php echo $meledak ['status'];?>" placeholder="status">
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