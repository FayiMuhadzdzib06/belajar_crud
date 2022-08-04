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
            transition: .5s;
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
                <th>username</th>
                <th>passsword</th>
            </tr>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "db_perpusweb";

            $connect = mysqli_connect($servername, $username, $password, $database);

            $no = 1;
            $data = mysqli_query($connect, "SELECT * FROM admin");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $d['username'] ?></td>
                    <td><?php echo $d['password'] ?></td>
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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "db_perpusweb";

            $connect = mysqli_connect($servername, $username, $password, $database);

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
                <th>id_katalog</th>
                <th>judul_buku</th>
                <th>pengarang</th>
                <th>thn_terbit</th>
                <th>penerbit</th>
            </tr>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "db_perpusweb";

            $connect = mysqli_connect($servername, $username, $password, $database);

            $data = mysqli_query($connect, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                    <td><?php echo $d['id_buku']  ?></td>
                    <td><?php echo $d['id_katalog'] ?></td>
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