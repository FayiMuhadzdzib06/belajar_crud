<?php 
    //panggil koneksi.php
    include 'koneksi.php';

    // ambil data yang ad di form tambah.php
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    //menginput data dari form ke database
    $input = mysqli_query($connect, "INSERT INTO anggota VALUES('', '$nama', '$no_telp', '$alamat', '$email', '$password')");

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
            window.location = 'tambah_anggota.php';
        </script>
        ";
    }
?>