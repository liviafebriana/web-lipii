<?php

    function salam($nama){
        echo "Hai, $nama";
    }

    salam("livi");
    echo "<br>";

    function luas_segitiga($tinggi, $alas){
        $hasil = 1/2 * $tinggi * $alas;
        echo "$hasil";
    }

    luas_segitiga(8,6);
?>