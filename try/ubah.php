
<?php
require "functions.php";
$id = $_GET['id'];
$row = query("SELECT * FROM tb_try WHERE id = $id")[0];

if( isset($_POST['submit'])){
    if(ubah($_POST) > 0){
        echo"
        <script>
            alert('Data Berhasil Diubah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo"
    <script>
        alert('Data Gagal Diubah');
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
            
                <input type="hidden" name="id">
            
            <li>
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" value="<?= $row['nama'];?>">
            </li>
            <li>
                <label for="bp">bp</label>
                <input type="text" name="bp" id="bp" value="<?= $row['bp'];?>">
            </li>
            <li>
                <label for="gambar">gambar</label>
                <input type="text" name="gambar" id="gambar" value="<?= $row['gambar'];?>">
            </li>
            <button type="submit" name="submit">Ubah Data</button>
        </ul>
       
    </form>
</body>
</html>