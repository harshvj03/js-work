<?php
include'nav.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="./style/login.css">
    
</head>
<body>
    <!-- <h1>Add Products  </h1> -->

    <div id="top-container">
        <h1>Add Products  </h1>
        <!-- <form action="./submitProd.php" method="POST">     -->
     <div>
            <label for="productname">Product Name</label>
            <input type="text" name="productname" id="productname">
        </div>

        <div>
            <label for="price" id="priceLbl">Price</label>
            <input type="number" name="price" id="price">
        </div>

        <div>
            <label for="description" id="labelDesc">Description</label>
            <input type="text" name="description" id="description"> 
        </div>
        <div>
            <button type="submit" id="sendButton">Submit</button>
        </div>

        

        <!-- </form> -->

    </div>

    <div id="msg">

    </div>
    <script src="./script/ajax.js"></script>
</body>
</html>