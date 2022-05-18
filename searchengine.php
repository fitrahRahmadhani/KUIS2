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
    <div class="container">    
        <div class="heading">
            <h1>Hasil pencarian "<span class="highlight"><?php echo $_POST['carijudul']?></span>"</h1>
        </div>
    </div>
    <div class="container">
        <table>
            <thead>
                <th></th>
                <th> Kode Buku </th>
                <th> Judul </th>
                <th> Pengarang </th>
                <th></th>
            </thead>
            <?php
            $title = $_POST['carijudul'];
            include "myconnection.php";

            $query = "SELECT * FROM buku WHERE judul LIKE '%$title%'";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
            ?>
            <tbody>
                <td> <img src="img/<?php echo $row["foto"]; ?>" height="90"></td>
                <td> <?php echo $row["id_buku"]; ?> </td>
                <td> <?php echo $row["judul"]; ?> </td>
                <td> <?php echo $row["pengarang"]; ?> </td>
                <td>
                    <a href="detail.php?id_buku=<?php echo $row["id_buku"];?>">
                    <button>Detail</button></a>
                </td>
            </tbody>
            <tbody>
                <td></td>
            </tbody>
            <?php
                    }
                }
                else{
                    echo "0 results";
                }
            ?>
        </table>
    </div>
</body>
</html>