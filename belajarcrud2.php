<?php
//belajar koneksi database
$servername = "localhost";
$database = "db_perpusweb";
$username = "root";
$password = "";

//membuat koneksi
$connect = mysqli_connect($servername,$username,$password,$database);

// cek koneksi 
if(!$connect){
    echo die("wkwaww tak konek : " . mysqli_connect_error());
}else{
    echo "Skuy Party";
    mysqli_close($connect);
}
?>