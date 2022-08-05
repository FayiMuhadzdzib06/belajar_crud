<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajarcrus5</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            user-select: none;
        }

        h1 {
            text-align: center;
            padding: 20px 0;
        }

        hr {
            border: 1px solid rgba(0, 0, 0, 0.5);
        }

        h3 {
            text-align: center;
            padding: 30px 0;
        }

        table {
            margin: auto;
        }

        .admin {
            width: 500px;
        }

        .admin tr td {
            text-align: center;
        }

        .anggota {
            width: 800px;
        }

        .anggota tr td {
            text-align: center;
        }

        .buku {
            width: 900px;
        }

        .buku tr td {
            text-align: center;
        }

        .ang {
            position: absolute;
            top: 80px;
            left: 290px;
            display: none;
        }

        .buk {
            position: absolute;
            top: 79px;
            left: 235px;
            display: none;
        }

        button {
            position: absolute;
            top: 90px;
            left: 420px;
            width: 100px;
            height: 30px;
            border: none;
            border-bottom: 1px solid black;
            background-color: transparent;
            transition: .1s;
        }

        button:hover {
            border-bottom: 2px solid black;
        }

        button:focus {
            border-bottom: 2px solid red;
        }


        .adm {
            left: 55px;
        }

        .agt {
            left: 175px;
        }

        .bk {
            left: 295px;
        }
        .tambahdata {
            position: absolute;
            width: 120px;
            height: 50px;
            background-color: #fff;
            border: 2px solid rgba(0, 0, 0, 0.5);
            top: 50px;
            right: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(0, 0, 0, 0.5);
            border-radius: 5px;
        }
        .tambahdata .kotak {
            width: 100%;
            height: calc(100% + 70px);
            background-color: rgb(34, 34, 34);
            position: absolute;
            top: 50px;
            display: flex;
            flex-direction: column;
            display: none;
            border-radius: 5px;
        }
        .tambahdata:hover .kotak {
            display: block;
        }
        .tambahdata .kotak a {
            text-decoration: none;
        }
        .tambahdata .kotak a li {
            width: 100%;
            height: 32px;
            list-style: none;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 13px;
        }
        .tambahdata .kotak a li:nth-child(1){
            margin-top: 5px;
        }
        .tambahdata .kotak a li:hover{
            background-color: red;
        }
    </style>
</head>

<body>
    <h1>CRUD Data Perpustakaan</h1>
    <hr>
    <div class="ad" id="kesatu">
        <h3>ADMIN</h3>
        <table class="admin" border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Id Admin</th>
                <th>username</th>
            </tr>

            <?php
            $no = 1;
            $data = mysqli_query($connect, "SELECT * FROM admin");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['id_admin'] ?></td>
                    <td><?php echo $d['username'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="ang" id="kedua">
        <h3>ANGGOTA</h3>
        <table class="anggota" border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>

            <?php
            $no = 1;
            $data = mysqli_query($connect, "SELECT * FROM anggota");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['nama'] ?></td>
                    <td><?php echo $d['no_telp'] ?></td>
                    <td><?php echo $d['alamat'] ?></td>
                    <td><?php echo $d['email'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="buk" id="ketiga">
        <h3>BUKU</h3>
        <table class="buku" border="1" cellspacing="0">
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Pengarang</th>
                <th>Tahun Terbit</th>
                <th>Penerbit</th>
            </tr>

            <?php

            $no = 1;
            $data = mysqli_query($connect, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['judul_buku'] ?></td>
                    <td><?php echo $d['pengarang'] ?></td>
                    <td><?php echo $d['thn_terbit'] ?></td>
                    <td><?php echo $d['penerbit'] ?></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <button onclick="admin()" class="adm">ADMIN</button>
    <button onclick="anggota()" class="agt">ANGGOTA</button>
    <button onclick="buku()" class="bk">BUKU</button>

    <div class="tambahdata">
        Tambah Data
        <div class="kotak">
            <ul>
                <a href="tambah_admin.php">
                    <li>Admin</li>
                </a>
                <a href="tambah_anggota.php">
                    <li>Anggota</li>
                </a>
                <a href="tambah_buku.php">
                    <li>Buku</li>
                </a>
            </ul>
        </div>
    </div>


    <script>
        function admin() {
            document.getElementById('kesatu').style.display = "block";
            document.getElementById('kedua').style.display = "none";
            document.getElementById('ketiga').style.display = "none";
        }

        function anggota() {
            document.getElementById('kesatu').style.display = "none";
            document.getElementById('kedua').style.display = "block";
            document.getElementById('ketiga').style.display = "none";
        }

        function buku() {
            document.getElementById('kesatu').style.display = "none";
            document.getElementById('kedua').style.display = "none";
            document.getElementById('ketiga').style.display = "block";
        }
    </script>
</body>

</html>