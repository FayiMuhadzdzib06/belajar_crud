<?php

class mobil
{
    //property dari mobil
    var $warna; 
    var $merek;
    var $ukuran;

    //membuat operasi mobil
    function maju(){
        $move_forward = "Gaskeunn";
    }

    function mundur(){
        $move_forward = "Remkeunn";
    } 
}

//inisiasi ( panggil objek melaui kelas )
$kendaraan = new mobil();

echo $move_forward;

?>