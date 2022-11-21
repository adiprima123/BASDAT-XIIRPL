<html>
    <head>
        <title>kalkulator saintifik</title>
        <body>
            <h1>kalkulator saintifik sederhana</h1>
            <form>
                <input type="text" name="ekspresi">
                <div class="margin-top: 10px">
                <button type="button" onclick="localtion.href = '?'">Clear</button>
                <button type="submit">Hitung</button>
                </div>
                <!-- start count -->
                <?php
                if($_GET):
                    $ekspresi = $_GET['ekspresi'];
                    $hasil = eval("return {$ekspresi};"); ?>
                <div style="margin-top: 10px;">
                    hasil <strong><?php echo $hasil?></strong>
                </div>

                <?php
                endif;
                ?>
                <!-- end count -->
            </form>
        </body>
    </head>
</html>