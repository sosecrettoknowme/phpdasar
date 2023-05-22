<?php

require "functions.php";

if( isset($_POST['submit'])){
    if(tambah($_POST) > 0){
        echo"
        <script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo"
    <script>
        alert('Data Berhasil Gagal ditambahkan');
        document.location.href = 'index.php';
    </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah</title>
</head>
<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="bp">bp</label>
                <input type="text" name="bp" id="bp">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <button type="submit" name="submit">SUBMIT</button>
        </ul>
       
    </form>
</body>
</html>