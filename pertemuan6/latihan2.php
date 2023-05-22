<?php

// $mahasiswa = [
//                 ['sandika', '0232942', 'sandka@gmail.com', 'teknik informtika'],
//                 ['afdak', '0434343', 'afdal@gmail.com', 'sistem informasi']
//             ];

// Arrayy associative
// definisinya sama seperti array numeric
// keynya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "sandika",
        "nrp" => "23323",
        "email" => "adadnan@gamil.com",
        "jurusan" => "Teknik informatika"
    ],
    [
        "nama" => "Afdal",
        "nrp" => "25335",
        "email" => "afdal@gamil.com",
        "jurusan" => "sistem infomasi"
    ]
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
    <?php foreach( $mahasiswa as $mhs) : ?>
    <ul>
        <li>Nama : <?php echo $mhs['nama']; ?></li>
        <li><?php echo $mhs['nrp']; ?></li>
        <li><?php echo $mhs['email']; ?></li>
        <li><?php echo $mhs['jurusan']; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>