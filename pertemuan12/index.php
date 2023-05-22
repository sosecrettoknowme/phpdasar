<?php
require "functions.php";

$mahasiswa = query("SELECT * FROM mahasiswa");

if ( isset ($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Halaman Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data</a>
    <br><br>
    <form action="" method="post">
        <input type="text" name="keyword" size="50" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    </form>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nrp</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        <?php $i= 1; ?>
        <?php foreach($mahasiswa as $row) :?>
        </tr>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="ubah.php?id=<?= $row['id'];?>">Ubah</a> ||
                <a href="hapus.php?id=<?= $row['id'];?>" onclick="return confirm('Yakin?');">Hapus</a>
            </td>
            <td><img src="img/<?= $row['gambar'];?>" width="80"></td>
            <td><?= $row['nrp'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['email'];?></td>
            <td><?= $row['jurusan'];?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>