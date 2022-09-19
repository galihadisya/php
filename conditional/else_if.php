<?php   

$uangAndi = 330;
$hargaSosis = 3000;
$hargaTelur = 1000;

if($uangAndi >= $hargaSosis) {
    echo 'Beli Sosis';
} else if($uangAndi >= $hargaTelur) {
    echo 'Beli Telur';
} else {
    echo 'Beli yang lain';
}

?>