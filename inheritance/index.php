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
        return "merk: $this->merk, posesor: $this->prosesor, memory: $this->memory";
    }
}   
?>