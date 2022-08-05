<?php 
    //panggil koneksi.php
    include 'koneksi.php';

    // ambil data yang ad di form tambah.php
    $nama = $_POST['nama'];
    $password = $_POST['password'];

    //menginput data dari form ke database
    $input = mysqli_query($connect, "INSERT INTO admin VALUES('', '$nama', '$password')");

    if($input){
        echo "
        <script>
            alert('Data Berhasil Ditambahkan');
            window.location = 'belajarcrud5.php';
        </script>
        ";
    }else {
        echo "
        <script>
            alert('Data Gagal Ditambahkan');
            window.location = 'tambah_admin.php';
        </script>
        ";
    }
?>