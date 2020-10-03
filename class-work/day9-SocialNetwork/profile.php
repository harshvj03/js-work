<?php
    session_start();

    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }

    $file = fopen("./storeRegister.txt",'r');
    $data = fread($file,filesize("./storeRegister.txt"));

    echo $data;

    fclose($file);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./styles/profile.css">
</head>
<body>
    <div class="nav">
        <div class="nav-content">
            <li></li>
            <li></li>
            <li></li>
        </div>
    </div>

    <h1>Profile</h1>
    <a href="./logout.php">Logout</a>
</body>
</html>



