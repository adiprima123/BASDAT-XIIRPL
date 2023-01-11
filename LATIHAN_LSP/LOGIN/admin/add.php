<html>

<head>
    <title>Latihan LSP</title>
    <link rel="stylesheet" href="style6.css">
</head>

<body>
    <h1>Menambahkan Data Buku</h1>
    <form class="tambah" action="proses.php" method="post">
        <label>Masukan Id Katalog</label>
        <br>
        <input type="number" name="id_katalog">
        <br>
        <label>Masukan Judul_Buku</label>
        <br>
        <input type="text" name="judul_buku">
        <br>
        <label>Masukan Pengarang</label>
        <br>
        <input type="text" name="pengarang">
        <br>
        <label>Masukan Thn_Terbit</label>
        <br>
        <input type="date" name="thn_terbit">
        <br>
        <label>Masukan Penerbit</label>
        <br>
        <input type="text" name="penerbit">
        <br>
        <label>Masukan Harga</label>
        <br>
        <input type="number" name="harga">
        <br>
        <input class="submit" type="submit" value="submit">
        <input class="cancel" type="reset" value="cancel">
    </form>
</body>

</html>