<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Anggota</title>
</head>
<body>
    <h2>Silahkan Tambah data anggota</h2>
    <br>
    <form method="POST" action="proses_anggota.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="no_telp">No Telp</label>
        <input type="number" name="no_telp" id="no_telp">
        <br>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email" id="email">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>