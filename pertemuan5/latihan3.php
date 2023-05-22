<?php
$mahasiswa = [
    ["Sandika Galih", "20102323", "Teknik Informatika", "ahaaa@gmail.com"],
    ["Sandika", "20123202323", "Teknik Informatika", "adssdsaa@gmail.com"]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Halaman Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ( $mahasiswa as $mhs ) :?>
        <ul>
            <li>Nama : <?= $mhs[0]; ?></li>
            <li>Nrp<?= $mhs[1]; ?></li>
            <li>Jurusan<?= $mhs[2]; ?></li>
            <li>Email <?= $mhs[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </ul>
</body>
</html>