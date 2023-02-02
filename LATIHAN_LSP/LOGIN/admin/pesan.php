<html>
    <head>
        <title>Pemesanan</title>
    </head>
    <body>
        <h1>List Pemesanan</h1>
        <h3>Klik valid untuk menyelesaikan Pemesanan</h3>
        <h3>Klik not valid untuk membatalkan Pemesanan</h3>
        <table border="1">
            <form action="proses_pesan.php" method="post">
                <tr>
                    <th>Resi</th>
                    <th>Barang</th>
                    <th>Status</th>
                    <th>Username</th>
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
            echo "<td>". $list['status']."</td>";
            echo "<td>". $list['username']."</td>";
            ?>
            <td>
            <a href="form_proses_pesan.php?id=<?php echo $list['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
            </td>
            <?php
            echo "</td>";
            ?>
        <?php
            echo "</tr>";
        }
            ?>
            </form>
        </table>
    </body>
</html>