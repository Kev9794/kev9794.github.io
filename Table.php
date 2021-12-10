<?php
    $namaHost = "localhost";
    $username = "root";
    $password = "";
    $database = "kevinnattugas";

    $connect = mysqli_connect($namaHost, $username, $password, $database);

    if($connect){
        echo "Koneksi dengan MySQL berhasil <br>";
    }
    else{
        echo "Koneksi dengan MySQL gagal" . mysqli_connect_error();
    }

    $sql = "CREATE TABLE karyawan(
        username VARCHAR(50) PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL)";

    if (mysqli_query($connect,$sql)){
        echo "Tabel mahasiswa berhasil dibuat <br>";
    }
    else{
        echo "Tabel mahasiswa gagal dibuat <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>