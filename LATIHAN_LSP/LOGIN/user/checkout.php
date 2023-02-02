<?php
session_start();
require '../koneksi-db.php';
require 'item.php';

// simpan pesanan baru kedalam table
$simpan = 'insert into orders (name, date_create, status, username) values ("New Order", "'.date('Y-m-d').'", 0, "acc 2")';

// konekkan 
mysqli_query($koneksi, $simpan);

// order id (fungsiny utk membuat masing masing id)
$id_orders = mysqli_insert_id($koneksi);

// set keranjang sebagai array, serialize mengubah string menjadi array
$keranjang = unserialize(serialize($_SESSION['keranjang']));
if(is_countable($keranjang) && count($keranjang)>0)

for ($barang  = 0; $barang<count($keranjang); $barang++){
    $detail = 'insert into orders_detail(id_product, id_order, price, qty) values ('.$keranjang[$barang]->id_buku.', '.$id_orders.', '.$keranjang[$barang]->harga.', '.$keranjang[$barang]->qty.')';

    mysqli_query($koneksi, $detail);
}

// menghapus semua prodduk yg ada di keranjang di checlout
unset($_SESSION['keranjang'])

?>

<!-- arahkan untuk ke index lgi -->
<html>
    <head>
        <title>checkout</title>
    </head>
    <body>
        <p>
            Thanks for buying products, Click <a href="index.php">here</a> to continue purchasing
        </p>
    </body>
</html>
<!-- arahkan untuk ke index lgi -->