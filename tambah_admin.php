<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Admin</title>
</head>
<body>
    <h2>Silahkan Tambah data admin</h2>
    <br>
    <form method="POST" action="proses_admin.php">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>