<?php

class manusia
{
    //property class manusia 
    var $nama;
    var $warna;

    //fungsi dari manusia
    function tampilkan_nama(){
        return "Nama Saya Pratama Syariep Ht dipanggil Pratama";
    }
    function tampilkan_warna(){
        return "Warna saya Coklat";
    }
}
//inisiasi class manusia
$orang = new manusia();

echo $orang->tampilkan_nama();
echo "</br>";
echo $orang->tampilkan_warna();

?>