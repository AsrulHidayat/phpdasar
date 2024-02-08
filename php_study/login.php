<?php 
    include "service/database.php";

    // syarat untuk menggunakan session
    session_start();

    // is_login : ketika sudah login maka kita akan tetap di arahkan langsung ke dashboard tanpa harus melakukan login kembali.
    if(isset($_SESSION["is_login"])){
        header("location: dashboard.php");
    }

    // diguankan untuk pengecualian saj ketika akun tidak ditamukan dan terisi dengan value baru
    $login_message = "";
    
    // isset berfungsi untuk memvalidasi apakah data tersebut atau sesuai dengan benar
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        // pengeksekusian query SQL
        $sql = "SELECT *  FROM users WHERE username = '$username' AND password = '$password'";

        // hasil eksekusian query SQL
        $result = mysqli_query($db, $sql);

        // jika hasilnya memiliki num_row (data di dalam database) lebih dari nol, maka muncul "data ada".
        if($result->num_rows > 0){
                // echo "datanya ada";

            //fetch_assoc : bawaan dari sananya
            $data = $result->fetch_assoc();

            // SESSION : Tempat untuk data ditampung
            $_SESSION["username"] = $data["username"];
            $_SESSION["is_login"] = true;

            header("location: dashboard.php");

            // digunakan hanya untuk testing saja
                // echo "data username adalah : " . $data["username"];
                // echo "data password adalah : " . $data["password"];

        } else {
            $login_message = "akun tidak ditemukan";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h3>MASUK AKUN</h3>
    <i><?= $login_message ?></i>

    <!-- POST berfungsi untuk mengirim data ke sistem atau di balik layar -->
    <form action="login.php" method="POST">
        <input type="text" placeholder="username" name="username"/>
        <input type="password" placeholder="password" name="password"/>

        <!-- Fungsi "name" disini ialah memberikan validasi ketika di klik -->
        <button type="submit" name="login">Masuk sekarang</button>
    </form>
    <?php include "layout/footer.html" ?>
</body>
</html>