<?php 
    session_start();
    if(isset($_POST['logout'])){
        session_unset(); // unset mengclear atau membersihkan semua data yang ada (refresh)
        session_destroy(); // destroy menghancurkan semua data yang ada (erase)
        header('Location: index.php');
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
    <?php include "layout/header.html"?>
    <main>
        
        <h3>Selamat datang 
            <!-- memanggil session username -->    
            <?= $_SESSION["username"]?>
        </h3>
        <form action="dashboard.php" method="POST">
            <button type="submit" name="logout">logout</button>
        </form>

    </main> 
    <?php include "layout/footer.html"?>
</body>
</html>

 
