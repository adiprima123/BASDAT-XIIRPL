<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <div class="container">
            <h1>Tambahkan Data Anggota</h1>
            <form action="proses-tambah-anggota.php" method="post">
            <label>Nama</label>
            <input type="text" name="nama">
            <br>
            <label>No.Telp</label>
            <input type="number" name="telp">
            <br>
            <label>Alamat</label>
            <input type="text" name="alamat">
            <br>
            <label>Email</label>
            <input type="text" name="email">
            <br>
            <label>Password</label>
            <input type="text" name="pass">
            <br>
            <input class="submit" type="submit" value="submit"></input>
            <input class="cancel" type="reset" value="cancel"></input>
            </form>
        </div>
    </body>
</html>