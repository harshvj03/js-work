<script src="./script/ajax.js"></script>
<?php
    session_start();

    if(!isset($_SESSION['username'])){
        header("location:login.php");
    }
    include"./nav.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <h1>Home</h1>

    <!-- <a href="./listProducts.php">Product List</a> -->

    <!-- <br> -->
    <!-- <a href="./product.php">Products</a> -->

    <div class="productContainer" id="productContainer"></div>

    <button id="getData" onclick="getData()">GetData</button>

    <div>
        <a href="./addProducts.php">Add Products</a>
    </div>
</body>
</html>

