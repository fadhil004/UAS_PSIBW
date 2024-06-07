<?php

class OrangTua {
    
    public $ayah = "default";
    public $ibu = "default";

    public function __construct($ayah, $ibu) {
        $this->ayah = $ayah;
        $this->ibu = $ibu;
    }

    public function printOrangTua() {
        echo "Ayah: " . $this->ayah. " Ibu: ". $this->ibu. "\n";
    }
}

class Anak extends OrangTua {

    public $namaAnak = "default nama anak";
    
    public function __construct($nama, $namaAyah, $namaIbu) {
        $this->namaAnak = $nama;
        parent::__construct($namaAyah, $namaIbu);
    }

    public function printAnak() {
        echo "Nama saya adalah: " . $this->namaAnak."\n";
    }
}

$gibran = new Anak("gibran", "joko", "riana");
$gibran->printAnak();
$gibran->printOrangTua();

?>