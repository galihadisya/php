<?php
// Array case 

// Andi memiliki keranjang berisi telur, daging, dan sayur
// Tampilkan isi keranjang Andi

// $keranjangAndi = ["telur", "daging", "sayur"];

// foreach ($keranjangAndi as $keranjang){
//     echo $keranjang;
//     echo '<p></p>';
// }

// Budi memiliki kelereng warna hitam, merah, dan emas
// Tampilkan semua kelereng Budi
// Jika kelereng budi berwarna emas, maka tampilkan
// ini kelereng mahal

$kelerengBudi = ["hitam", "merah", "emas"];

foreach($kelerengBudi as $kelereng){
    if($kelereng == "emas"){
        echo 'ini kelereng mahal: ';
    }//bisa begini juga : elseif($kelereng != "emas")
    else{
        echo 'ini kelereng murah: ';
    }
    echo $kelereng;
    echo '<p></p>';
}

// bawah ini jawaban ngarang saya
// if($kelerengBudi = ["emas"]){
//     echo 'ini kelereng mahal';
// } else {
//     echo 'ini kelereng murah';
// }


?>