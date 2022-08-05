<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Buku</title>
</head>
<body>
    <h2>Silahkan Tambah data buku</h2>
    <br>
    <form method="POST" action="proses_buku.php">
        <label for="id_katalog">Id Katalog</label>
        <input type="number" name="id_katalog" id="id_katalog">
        <br>
        <label for="judul_buku">Judul Buku</label>
        <input type="text" name="judul_buku" id="judul_buku">
        <br>
        <label for="pengarang">Pengarang</label>
        <input type="text" name="pengarang" id="pengarang">
        <br>
        <label for="thn_terbit">Tahun Terbit</label>
        <input type="date" name="thn_terbit" id="thn_terbit">
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit">
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>