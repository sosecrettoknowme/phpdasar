<?php
require 'functions.php';

$biodata = query("SELECT * FROM tb_try");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Index</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah Data</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Nama</th>
            <th>Bp</th>
            <th>Gambar</th>
        </tr>
    <?php foreach($biodata as $row) :?>
        <tr>
            <td>1</td>
            <td>
                <a href="ubah.php?id=<?= $row['id']; ?>">ubah</a>||
                <a href="hapus.php">hapus</a>
            </td>
            <td><img src="img/<?= $row['gambar'] ?>" alt="" width="100"></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['bp'] ?></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>