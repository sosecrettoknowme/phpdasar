<?php
// // Varibale scope / lingkuo variable

// $x = 10;

// function tampilX(){
//     global $x;
//     echo $x;
// }
// tampilX();


// //superglobals
// // varible global milik php
// // Merupakan array associative
// var_dump($_GET)


$mahasiswa = [
    [
        "nama" => "sandika",
        "nrp" => "23323",
        "email" => "adadnan@gamil.com",
        "jurusan" => "Teknik informatika",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Afdal",
        "nrp" => "25335",
        "email" => "afdal@gamil.com",
        "jurusan" => "sistem infomasi",
          "gambar" => "2.jpg"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Daftar Mhasiswa</title>
</head>
<body>
    <h1>Halaman daftar mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs) : ?>
        <li>
            <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
        </li>
    <?php endforeach; ?>
</body>
</html>