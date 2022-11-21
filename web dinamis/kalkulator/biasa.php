<html>
    <head>
        <title>kalkulator biasa</title>
    </head>
    <body>
        <h1>kalkulator biasa</h1>
        <form>
            <input type="number" name="angka1">
            <select name="operator">
                <option selected disabled>Pilih operator</option>
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" name="angka2">
            <div style="margin-top:10px;">
                <button type="reset">Clear</button>
                <button type="submit">Hitung</button>
            </div>
            <!-- logika kalkulator biasa -->
            <?php
            if ($_GET):
                $angka1 = (double) @$_GET['angka1'];
                $angka2 = (double) @$_GET['angka2'];
                $operator = @$_GET['operator'];
                //buat logika untuk penjumlahan
                switch($operator){
                    case '+':
                    $hasil = $angka1 + $angka2;
                        break;
                    case '-':
                    $hasil = $angka1 - $angka2;
                        break;
                    case '*':
                    $hasil = $angka1 * $angka2;
                    break;
                        case '/':
                    $hasil = $angka1 / $angka2;
                        break;
                }
            ?>
            <div style="margin-top: 10px">
            Hasil : <strong><?php echo $hasil; ?></strong>
            <?php
            endif; ?>
            </div>
            <!-- end logika -->
        </form>
    </body>
</html>