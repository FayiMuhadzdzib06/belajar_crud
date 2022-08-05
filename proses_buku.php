<?php 
    //panggil koneksi.php
    include 'koneksi.php';

    // ambil data yang ad di form tambah.php
    $id_katalog = $_POST['id_katalog'];
    $judul_buku = $_POST['judul_buku'];
    $pengarang = $_POST['pengarang'];
    $thn_terbit = $_POST['thn_terbit'];
    $penerbit = $_POST['penerbit'];

    //menginput data dari form ke database
    $input = mysqli_query($connect, "INSERT INTO buku VALUES('', '$id_katalog', '$judul_buku', '$pengarang', '$thn_terbit', '$penerbit')");

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
            window.location = 'tambah_buku.php';
        </script>
        ";
    }
?>