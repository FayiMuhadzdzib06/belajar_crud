<?php 
    //panggil koneksi.php
    include 'koneksi.php';

    // ambil data yang ad di form tambah.php
    $username = $_POST['username'];
    $password = $_POST['password'];

    //menginput data dari form ke database
    $input = mysqli_query($connect, "INSERT INTO admin VALUES('', '$username', '$password')");

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