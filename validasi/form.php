<?php
$time = (object) @$_GET['time'];
$errors = (object) @$_GET['errors'];
?>

<html>
    <head>
        <title>validasi form</title>
    </head>
    <body>
        <form action="proses.php">
            <div style="margin-top: 10px;">
                <label>nama (harus input nama)</label> <br>
            <input type="text" value="<?php echo @$time->nama?>" name="nama">
            <?php
            if (@$errors->nama):?>
            <div style="color: red"><?php echo $errors->nama[0]?></div>
            <?php
            endif;?>
        </div>
        <div style="margin-top: 10px;">
            <label>email (harus input @)</label> <br>
            <input type="text" value="<?php echo @$time->email?>" name="email">
            <?php
            if (@$errors->email):?>
            <div style="color: red"><?php echo $errors->email[0]?></div>
            <?php
            endif;?>
        </div>
        <div style="margin-top: 10px;">
            <label>username (tidak boleh ada simbol)</label> <br>
            <input type="text" value="<?php echo @$time->username?>" name="username">
            <?php
            if (@$errors->username):?>
            <div style="color: red"><?php echo $errors->username[0]?></div>
            <?php
            endif;?>
        </div>
        <div style="margin-top: 10px;">
            <label>usia (harus angka)</label> <br>
            <input type="text" value="<?php echo @$time->usia?>" name="usia">
            <?php
            if (@$errors->usia):?>
            <div style="color: red"><?php echo $errors->usia[0]?></div>
            <?php
            endif;?>
        </div>
        <div style="margin-top: 10px;">
            <button>submit</button>
        </div>
    </form>
    </body>
    </html>