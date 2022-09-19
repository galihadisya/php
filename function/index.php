<?php

    function getBudiItem(){
        $barangBudi = ["Robot", "Kelereng", "Handphone"];
        foreach($barangBudi as $barang){
            echo $barang;
        }
    }

    function deleteArray(){
        $barangBudi = ["Robot", "Kelereng", "Handphone"];
        unset($barangBudi[1]);
        foreach($barangBudi as $barang){
            echo $barang;
        }
    }



    // getBudiItem();
    deleteArray();


?>