<?php 
//pewarisan / inheritance

//class induk
class komputer{
    public $merk;
    public $prosesor;
    public $memory;

    //function/operasi membuat beli komputer
    public function beli_komputer(){
        return "beli komputer baru";
    }
}


//class turunan/exteds dari class computer ke laptop
class laptop extends komputer{
    public function lihat_spek(){
        //ambil properti dari class komputer
        return "merk: $this->merk, posesor: $this->prosesor, memory: $this->memory";
    }
}   
//intansiasi
//membuat objek baru dari class laptop (kelas turunan)
$laptop_baru = new laptop();

//isi properti
$laptop_baru->merk = "asus";
$laptop_baru->prosesor = "amd ryzen 9x";
$laptop_baru->memory = "1 petabyte";

//panggil funtion
echo $laptop_baru-> beli_komputer();
echo "<br />";
echo $laptop_baru-> lihat_spek();
?>