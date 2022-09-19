<?php

    class Handphone{
       public $warna;
       public $bahan;

       public function __construct($warna,$bahan){
        $this->warna = $warna;
        $this->bahan = $bahan;
       }
        // Akan kita Override   
       function phoneCall(){
        echo 'Menelpon...';
       }

       function kirimSMS($namaSetan){
        echo 'Kirim SMS...'.$namaSetan;
       }
    }

    class Smartphone extends Handphone{
        public $os;

        public function __construct($warna,$bahan,$os){
            parent::__construct($warna,$bahan);
            $this->os = $os;
        }

        // overriding
        function phoneCall(){
            echo 'Telpon Seseorang....';
        }

        // overloading
        function kirimSMS($namaOrang){
            echo 'SMS ke '.$namaOrang;
        }
        // function playGame(){
        //     echo 'Game Start...';
        //}
    }

    $handphone = new Handphone("Kuning", "Plastik");
    $smartphone = new Smartphone("Space Grey", "Metal", "Android");

    // echo '<p>'.$handphone->warna.' '.$handphone->bahan.'</p>';
    // echo '<p>'.$handphone->phoneCall().'</p>';

    // echo '<p>'.$smartphone->warna.' '.$smartphone->bahan.' '.$smartphone->os.'</p>';
    // $smartphone->phonecall();
    // $smartphone->playGame();
    echo $handphone->phoneCall();
    echo $smartphone->phoneCall();
    echo '<p></p>';
    echo $handphone->kirimSMS("adad");
    echo '<p></p>';
    echo $smartphone->kirimSMS("Calvin");
?>