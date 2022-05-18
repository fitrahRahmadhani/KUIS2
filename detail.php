<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;800&display=swap">
    <title>GudangBuku</title>
</head>
<header>
    <h1>GudangBuku</h1>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.html" class="button">Login</a></li>
        </ul>
    </nav>
</header>
<body>
    <div class="wrapper">
    <?php
        include "myconnection.php";
        $id = $_GET['id_buku'];
        $query = "SELECT * FROM buku WHERE id_buku='$id'";
        $result = mysqli_query($connect, $query);
        $row = mysqli_fetch_array($result);
    ?>
        <div class="heading">
            <br>
            <h1>Detail Buku</h1>
        </div>
        <table cellspacing="0" cellpadding="0px">
            <tr>
                <td rowspan="7"><img src="img/<?php echo $row["foto"]; ?>" height="400px"></td>
                <td><h3>Kode Buku</h3></td>
                <td><?php echo $row["id_buku"];?></td>
            </tr>
            <tr>
                <td><h3>Judul</h3></td>
                <td><?php echo $row["judul"];?></td>
            </tr>
            <tr>
                <td><h3>Pengarang</h3></td>
                <td><?php echo $row["pengarang"];?></td>
            </tr>
            <tr>
                <td><h3>Penerbit</h3></td>
                <td><?php echo $row["penerbit"];?></td>
            </tr>
            <tr>
                <td><h3>Deskripsi</h3></td>
                <td><?php echo $row["deskripsi"];?></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</body>
</html>