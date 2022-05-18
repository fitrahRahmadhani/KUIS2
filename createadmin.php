<?php
    include "myconnection.php";
    $query = "CREATE TABLE admin(
                id_admin INT PRIMARY KEY AUTO_INCREMENT,
                username VARCHAR(20) NOT NULL,
                password VARCHAR(50) NOT NULL
                )";
    if(mysqli_query($connect, $query)){
        echo "Tabel admin berhasil dibuat";
    }else{
        echo "Tabel admin gagal dibuat<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>