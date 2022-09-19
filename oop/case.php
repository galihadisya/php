<?php

    // Buatlah objek mobil dengan atribut jenis mobil dan warna mobil.
    // Memiliki method menyalakan mesin
    class Mobil{
        public $jenisMobil;
        public $warnaMobil;

        function __construct($jenisMobil,$warnaMobil){
            $this->jenisMobil = $jenisMobil;
            $this->warnaMobil = $warnaMobil;
        }

        function startEngine(){
            echo 'Mesin dinyalakan';
        }
    }

    $car = new Mobil("Jeep", "Hijau Army");

    echo '<p>Saya punya mobil '.$car->jenisMobil.', warnanya '.$car->warnaMobil.'</p>';
    $car->startEngine();

    // Buatlah handphone dengan atribut kualitas kamera, nama handphone.
    // memiliki method untuk mengambil foto

    class Ponsel{
        public $kualitasKamera;
        public $namaHandphone;

        function __construct($kualitasKamera,$namaHandphone){
            $this->kualitasKamera = $kualitasKamera;
            $this->namaHandphone = $namaHandphone;
        }

        function ambilGambar(){
            echo 'Cekreeek';
        }
    }

    $hp = new Ponsel("VGA", "Mito");

    echo '<p>Kualitas Kamera hp saya '.$hp->kualitasKamera.', merknya '.$hp->namaHandphone.'</p>';
    $hp->ambilGambar();


?>