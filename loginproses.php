<?php
    session_start();
?>
<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = MD5($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);

    if($row){
        header("Location:homeCRUD.php");
        $_SESSION["user"] = $username;
    }else{
        header("Location:login.php?error=gagal");
    }
?>