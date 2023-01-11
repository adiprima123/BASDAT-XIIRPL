<html>
    <head>
        <title>Login Anggota</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    </head>
    <center>
        <body>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
</head>

<body>
    <div class="container">
        <div class="login">
            <form action="proses.php" method="post">
                <h2>Login Anggota</h2>
                <hr>
                <br>
                <br>
                <label for="">Email</label>
                <input type="text" name="email" id="email" placeholder="example@gmail.com">
                <label for="">Password</label>
                <input type="password" name="pass" id="pass" placeholder="Password">
                <td><button type="submit" value="login" type="button" class="btn btn-success">login</button></td>
                <p>
                    <td>admin klik <a href="../admin/login_admin.php"> Disini</a> </td>
                </p>
                <tr>
                    <td>
                        <h3>Belum Punya Akun? <a href="daftar.php">Disini</a></h3>
                    </td>
                </tr>
                <p>
                    <td> <a href="../index.php">Kembali</a></td>
                </p>
            </form>
        </div>
        <div class="right">
            <img src="undraw_Bibliophile_re_xarc_prev_ui.png" alt="">
        </div>
    </div>
</body>
</html>