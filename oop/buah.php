<!DOCTYPE html>
<html>
<body>

<?php
class Buah {
  public $nama;
  public $warna;
  public function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna; 
  }
  //atribut juga bisa dipanggil dari dalam method
  public function intro() {
    echo "Buah ini namanya {$this->nama} dan warnanya adalah $this->warna."; 
  }
}

// Strawberry is inherited from Buah
class Strawberry extends Buah {
  public function message() {
    echo "Apakah aku buah atau berry?"; 
  }
}

$strawberry = new Strawberry("Strawberry", "merah");
$strawberry->message();
echo "<p></p>";
$strawberry->intro();
?>
 
</body>
</html>
