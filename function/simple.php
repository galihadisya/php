<?php

    function getBudiItem($barangBudi){
        foreach($barangBudi as $barang){
            echo $barang;
        }
    }

    function deleteArray(){
        $barangBudi = ["Robot", "Kelereng", "Handphone"];
        unset($barangBudi[1]);
        unset($barangBudi[2]);
        getBudiItem($barangBudi);// memanggil function getBudiItem dengan 
                                //  argumen $barangBudi(parameter yang dibutuhkan 
                                //  untuk memanggil suatu function di dalam function)
    }



    // getBudiItem();
    deleteArray();


?>