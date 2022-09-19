<?php
//logical operator

// Jika umur calvin sudah lebih dari 18 dan punya ktp,
// maka dia bisa menonton film Joker
// $umurCalvin = 20;
// $punyaKTP = true;

// if($umurCalvin > 18 && $punyaKTP) {
//     echo 'Calvin boleh menonton film Joker';
// } else {
//     echo 'Calvin tidak boleh nonton';
// }

// Jika Ihza menguasai Javascript atau php
// maka Ihza bisa membuat website
$bisaJavascript = false;
$bisaPHP = true;

if($bisaJavascript || $bisaPHP) {
    echo 'Ihza bisa membuat website';
} else {
    echo 'Ihza tida bisa membuat website';
}

?>