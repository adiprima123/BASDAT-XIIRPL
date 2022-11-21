<html>
    <head>
        <title>menggunakan metode POST</title>
    </head>
    <body>
        <h1>menggunakan metode POST</h1>
        <form method="POST">
            <!-- passing data di dlm body request tanpa menampilkan secara url -->
            <div>
                <label>email</label><br>
                <input type="email" name="email">
            </div>
            <div>
                <label>password</label><br>
                <input type="password" name="password">
            </div>
            <div>
                <button>login</button>
            </div>
            <br>
            <?php
            
            $email = @$_POST['email'];
            $password = @$_POST['password'];
            
            echo "email = {$email} <br>";
            echo "password = {$password}";
            ?>
        </form>
    </body>
</html>