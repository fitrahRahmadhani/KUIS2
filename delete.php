<?php
    include "myconnection.php";
    $id = $_GET["id_buku"];
    $query = "DELETE FROM buku WHERE id_buku='$id'";
    if(mysqli_query($connect, $query)){
        header('Location:homeCRUD.php');
    }else{
        echo "Gagal mengubah data <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>