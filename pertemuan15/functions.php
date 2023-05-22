<?php

// Koneksi Ke database
$conn = mysqli_connect("localhost","root", "", "phpdasar");


function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;

    }
    return $rows;
}

function tambah($data) {
    global $conn;

    
     // Ambil data tiap elemen pada form
     $nrp = htmlspecialchars($data["nrp"]);
     $nama = htmlspecialchars($data["nama"]);
     $email = htmlspecialchars( $data["email"]);
     $jurusan = htmlspecialchars($data["jurusan"]);
     $gambar = htmlspecialchars($data["gambar"]);
    
     //  Upload gambar

     $gambar = uploud();
     if(!$gambar) { // jika gambar gagal di upload
        return false;
     }
     
    
     // query inset data
    $query = "INSERT INTO mahasiswa VALUES
    ('', '$nrp', '$nama', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function uploud() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

      // Cek apakah tidak ada gambar yang di uploud 
      if ( $error === 4 ) {
        echo " <script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
            return false;
    }

      // cek apakah data yang di aploud adalah gambar 
      $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
      $ekstensiGambar = explode('.', $namaFile);
      $ekstensiGambar =strtolower(end(($ekstensiGambar)));
      if ( !in_array( $ekstensiGambar, $ekstensiGambarValid)) {
          echo " <script>
          alert('Yang anda uploud bukan gambar!');
          </script>";
          return false;
      }
  
      // Cek jika ukuranya terlalu besar 
      if ($ukuranFile > 1000000) {
          echo " <script>
          alert('Ukuran gambar  terlalu besar');
          </script>";
          return false;
      }
  
      // lolos pengecekan, gambar siap di uploud 
      // generate nama gamabr baru
      $namaFileBaru = uniqid();
      $namaFileBaru .= '.';
      $namaFileBaru .= $ekstensiGambar;
  
      move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
      return $namaFileBaru;
  
  }
  



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($data) {
    global $conn;

    
    // Ambil data tiap elemen pada form
    $id= $data["id"];
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars( $data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // Cek apakah user pilih gambar baru atau tidak

    if ( $_FILES['gambar'] ['error'] === 4 ) {
        $gambar = $gambarLama;

    } else {
        $gambar = uploud();  
    }
    
    
   
    // query inset data
   $query = "UPDATE mahasiswa SET 

                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            
   ";

   mysqli_query($conn, $query);

   return mysqli_affected_rows($conn);
}


function cari($keyword) {
    $query = "SELECT * FROM mahasiswa
                WHERE 
                nama LIKE '%$keyword%' OR
                nrp LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
                ";
    return query($query);
}



function registrasi($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek usrname sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if( mysqli_fetch_assoc($result)) {
        echo "<script>
                 alert('Username yang dipilih sudah terdaftar!')
             </script>";
             return false;
    }

    // cek konfirmasi passsword
    if ( $password !== $password2) {
        echo "<script>
                  alert('Konfirmasi Passwod tidak sesuai')
             </script>";
             return false;
    }

    // enskripsi password 
    $password = password_hash($password, PASSWORD_DEFAULT); 

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES ('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}




?>