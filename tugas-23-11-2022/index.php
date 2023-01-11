<html>
<head>
    <title>Form Biodata</title>
    <style>
        div {padding: 4px};
    </style>
</head>
<body>
        <form action="proses.php" method="POST" enctype="multipart/form-data">
            <div>
                <label>Nama :</label> <br>
                <input name="nama" type="text">
            </div>
            <div>
                <label>Jurusan</label> <br>
            <select name ="jurusan">
            <option value="RPL">RPL</option>
                <option value="OTKP">OTKP</option>
                <option value="BDP">BDP</option>
                <option value="AKL">AKL</option>
            </select>
            </div>
            <div>
                <label>Nama Ayah :</label> <br>
                <input name="nama_ayah" type="text">
            </div>
            <div>
                <label>Nama Ibu :</label> <br>
                <input name="nama_ibu" type="text">
            </div>
            <div>
                <label>Alamat :</label> <br>
                <input name="alamat" type="text">
            </div>
            <br>
            <div tyle="margin-top:10px">
                <label>foto </label>
                <input type="file" name="foto">
            </div>
            <div>
                <input type="submit" value="Simpan">
            </div>
        </form>
</body>
</html>