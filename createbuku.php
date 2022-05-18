<?php
    include "myconnection.php";
    $query = "CREATE TABLE buku(
                id_buku VARCHAR(10) PRIMARY KEY,
                judul VARCHAR(200) NOT NULL,
                pengarang VARCHAR(100) NOT NULL,
                penerbit VARCHAR(50),
                deskripsi text
                )";
    if(mysqli_query($connect, $query)){
        echo "Tabel buku berhasil dibuat";
    }else{
        echo "Tabel buku gagal dibuat<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>