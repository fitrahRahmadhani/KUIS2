<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap">
    <link rel="stylesheet" href="style_logreg.css">
    <title>Edit Data</title>
</head>
<body>
    <div id="container">
        <div id="content">
            <div id="title">
                <h1>Edit Data</h1>
            </div>
                <?php
                    include "myconnection.php";
                    $id = $_GET['id_buku'];
                    $query = "SELECT * FROM buku WHERE id_buku='$id'";
                    $result = mysqli_query($connect, $query);
                    $row=mysqli_fetch_array($result);
                ?>
                <form action="editprocess.php" method="post" enctype="multipart/form-data">
                    <div class="form_field">
                        <input type="text" name="idbuku" value="<?php echo $row['id_buku'];?>" readonly>
                    </div>
                    <div class="form_field">
                        <input type="text" name="judul" value="<?php echo $row['judul'];?>">
                    </div>
                    <div class="form_field">
                        <input type="text" name="pengarang" value="<?php echo $row['pengarang'];?>">
                    </div>
                    <div class="form_field">
                        <input type="text" name="penerbit" value="<?php echo $row['penerbit'];?>">
                    </div>
                    <div class="form_field">
                        <input type="text" name="deskripsi" value="<?php echo $row['deskripsi'];?>">
                    </div>
                    <div class="file">
                        <p>update gambar</p>
                        <input type="file" name="foto">
                    </div>
                    <div class="button">
                        <button type="submit">Edit</button>
                    </div>
                </form>
            <div id="cp">
                <p>@Fitrah Rahmadhani Ahmad</p>
            </div>
        </div>
    </div>
</body>
</html>