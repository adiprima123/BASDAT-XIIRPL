<html>
    <head>
        <title>Pemesanan</title>
    </head>
    <body>
        <h1>Status Pemesanan Anda</h1>
        <h3>Silhakan hubungi admin untuk status pemesanan</h3>
        <table border="1">
            <tr>
                <th>Resi</th>
                <th>Barang</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>

            <?php
            require '../koneksi-db.php';
            $data = "select * from orders";
            $data_order = mysqli_query($koneksi, $data);
            foreach ($data_order as $list){
            echo "<tr>";
            echo "<td>". $list['id']."</td>";
            echo "<td>". $list['name']."</td>";
            echo "<td>";
            $status = $list['status'];
            if($status == 0){
                echo "paket sibuat";
            }elseif ($status == 1){
                echo "paket terkirim";
            }elseif ($status == 2){
                echo "paket reject";
            }else{
                echo "paket hilang";
            }
                echo "</td>";
            ?>
            <td>
            <a href="cetak_struk.php?id=<?php echo $list['id'];?> class="btn btn-sm btn-primary">Cetak Struk</a>
            </td>
        <?php
            echo "</tr>";
        }
            ?>
        </table>
        <a href="index.php">Home</a>
    </body>
</html>