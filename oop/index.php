<?php

class Cat {
    public $namaKucing;
    public $warnaKucing;
    public $jenisKucing;
    //constructor
    // constructor adalah sebuah function dimana
    // dia akan dipanggil pertama setelah pembuatan objek
    function __construct($namaCat,$warnaCat,$jenisCat){
        $this->namaKucing = $namaCat;
        $this->warnaKucing = $warnaCat;
        $this->jenisKucing = $jenisCat;
    }

    function mengeong(){
        echo 'Meooonggg...';
    }
}

$cat = new Cat("Moka", "Torti", "Persia");
$catAnggora = new Cat("Mochi", "Abu-abu", "Anggora");
$catKampung = new Cat("Moy", "Kembang Telon", "Kampung");


echo '<p>Saya punya kucing namanya '.$cat->namaKucing.', warnanya '.$cat->warnaKucing.' dan jenisnya adalah '.$cat->jenisKucing.'</p>';
echo '<p>Saya punya kucing namanya '.$catAnggora->namaKucing.', warnanya '.$catAnggora->warnaKucing.' dan jenisnya adalah '.$catAnggora->jenisKucing.'</p>';
echo '<p>Saya punya kucing namanya '.$catKampung->namaKucing.', warnanya '.$catKampung->warnaKucing.' dan jenisnya adalah '.$catKampung->jenisKucing.'</p>';
$cat->mengeong();

?>