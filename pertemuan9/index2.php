<?php
// Koneksi ke database
$conn = mysqli_connect("Localhost", "root", "", "phpdasar");

// ambil data di tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasaiswa dari object result
// mysqli_fetch_row() = mengembambalikan array numeric
// mysqli_fetch_assoc() = mengembambalikan array associative
// mysqli_fetch_array() = mengembambalikan keduanya
// mysqli_fetch_object() = mengembalikan object

// while ( $mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }


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
        <?php while ( $row = mysqli_fetch_assoc($result)) :?>
        </tr>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> ||
                <a href="">Tambah</a>
            </td>
            <td><img src="img/<?= $row['gambar'];?>" width="80"></td>
            <td><?= $row['nrp'];?></td>
            <td><?= $row['nama'];?></td>
            <td><?= $row['email'];?></td>
            <td><?= $row['jurusan'];?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>