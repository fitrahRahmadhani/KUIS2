<?php
    include "myconnection.php";
    $id = $_POST['idbuku'];
    $title =  $_POST['judul'];
    $aut =  $_POST['pengarang'];
    $pub = $_POST['penerbit'];
    $dec =  $_POST['deskripsi'];
    $image = upload();
    $query = "UPDATE buku SET id_buku='$id', judul='$title', pengarang='$aut',
     penerbit='$pub', deskripsi='$dec', foto='$image' WHERE id_buku='$id'";
    if(mysqli_query($connect, $query)){
        echo "Data baru berhasil dibuat";
        header('Location:homeCRUD.php');
    }else{
        echo "Data baru gagal dibuat<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
    function upload(){
        $nameFile = $_FILES['foto']['name'];
        $tmpName = $_FILES['foto']['tmp_name'];
        move_uploaded_file($tmpName, 'img/' . $nameFile);
        return $nameFile;
    }
?>