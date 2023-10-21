<?php
function cari ($array, $cari) :bool {
        //lakukan pencarian 
    if(in_array($array, $cari)) {
        // jika di temukan, return true
        return true;
    } else {
        // jika tidak, return false
        return false;
    }
}
    $angka = array(21, 22, 23, 24, 25);
    $array = 23;

if (cari($array, $angka)) {
    echo "Nilai $array ditemukan pada array";
} else {
    echo "Nilai $array tidak ditemukan pada array";
}
