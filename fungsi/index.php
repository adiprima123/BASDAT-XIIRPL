<?php

//cara membuat fungsi
function ngoding(){

}

//function dikategorikan menggunakan public, protected, private
class vscode{
    public function coding_php(){

    }
}



//coba buat fungsi sapa teman
function sapa_teman(){
    echo "<h1>HAI TOD!<h1>";
    echo "<h3>welcome back<h3>";
}

//coba buat fungsi yang ada parameterny
function teman($teman_gw, $umur){

    echo "<h2>gua disini sama {$teman_gw}<h2>";
    echo "<h2>umur dia segini {$umur}<h2>";
}


//panggil fungsi
sapa_teman();

//(jika menggunakan parameter, harus ditulis saat memanggilnya)
teman("pratama", 30);

//membuat fungsi menggunakan percabankan
function kasir($nama, $jumlah){
    echo "<h3> hai {$nama}, terimakasih telah berbelanja!! <h3>";
    echo "<h3> jangan lupa datang kembali! <h3>";

    //membuat percabangan menggunakan if (jika jmlh lbh maka akan mendapat hadiah)
    if ($jumlah > 10){
        echo "<h3>mantab, kamu dapat HADIAH karena sering berkunjng sebanyak {$jumlah} kali<h3>";
    }
}

//panggil fungsi
kasir("pratama", 11);

?>