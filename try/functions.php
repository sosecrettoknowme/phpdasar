<?php
$conn = mysqli_connect("Localhost", "root", "", "try");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;

    $nama = $data['nama'];
    $bp = $data['bp'];
    $gambar = $data['gambar'];

    $query = "INSERT INTO tb_try VALUES ('', '$nama', '$bp', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);


}

function ubah($data){
    global $conn;
    $id = $data['id'];
    $nama = $data['nama'];
    $bp = $data['bp'];
    $gambar = $data['gambar'];

    $query = "UPDATE tb_try SET 
            nama = '$nama',
            bp = '$bp',
            gambar = '$gambar'
            WHERE id = $id
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}


?>