<html>
    <head>
        <title>SANDBOX</title>
    </head>
    <body> 
        <h1>Welcome to Sandbox</h1>
        <h3>Lets Experiments</h3>
    
        <!-- Form Searching -->
        <form action="sandbox.php" method="get">
            <label> Cari </label>
            <input type="text" name="cari">
            <input type="submit" value="search">
        </form>
        <!-- Form Searching -->
    
        <?php 
        // Judul Hasil Pencarian
        include '../koneksi-db.php';
        if (isset ($_GET['cari'])){
            $cari = $_GET['cari'];
            echo "Hasil Pencarian : ".$cari;
        }
        // Judul Hasil Pencarian
        ?>
    
        <table border="1">
            <tr>
                <th>NO</th>
                <th>Nama</th>
            </tr>
            
            <?php
            // Hasil Pencariannya muuncul disini
            include '../koneksi-db.php';
            if(isset($_GET['cari'])){
                $cari = $_GET ['cari'];
                $data = mysqli_query($koneksi, "SELECT * FROM anggota WHERE nama LIKE '%".$cari."%' ");
            }else{
                $data = mysqli_query($koneksi, "SELECT * FROM anggota");
            }
            $no=1;
            while($meledak = mysqli_fetch_array($data)){
            // Hasil Pencariannya muuncul disini
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $meledak["nama"]; ?></td>
            </tr>
                
            <?php 
            }
            ?>
    
    </table>
    </body>
</html>