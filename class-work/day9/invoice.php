<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice</h1>

    <?php
    
    $product1_name = $_POST['product1'];
    $product1_cost = $_POST['rate1'];
    $product1_qty = $_POST['qty1'];

    $product2_name = $_POST['product2'];
    $product2_cost = $_POST['rate2'];
    $product2_qty = $_POST['qty2'];

    $product3_name = $_POST['product3'];
    $product3_cost = $_POST['rate3'];
    $product3_qty = $_POST['qty3'];

    $totalCost = ($product1_cost * $product1_qty)
        + ($product2_cost * $product2_qty) + 
        ($product3_cost * $product3_qty);

    
    

    echo "Total Cost ".$totalCost."$";

    ?>
</body>
</html>

