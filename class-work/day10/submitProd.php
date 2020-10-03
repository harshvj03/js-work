<?php
// if(empty($_POST['productname'])){
//     header("location:addProduct.php");
// }else{
//     $productname = $_POST['productname'];
// }

// if(empty($_POST['price'])){
//     header("location:addProduct.php");
// }else{
//     $price = $_POST['price'];
// }

// if(empty($_POST['productname'])){
//     header("location:addProduct.php");
// }else{
//     $description = $_POST['description'];
// }


$data = file_get_contents('php://input');
$data = json_decode($data);



$productname = $data->productname;
$price = $data->price;
$description = $data->description;

// echo $productname;
// echo strval($price);
// echo string($description);

include "dbConnect.php";
 
if(empty($productname) && empty($price) && empty($description)){
    // header("location:addProduct.php");
    echo "Error";
}else{
    $sql = "INSERT INTO PRODUCTS(productname,price,description) VALUES ('".$productname."','".$price."','".$description."')";

    if(mysqli_query($conn,$sql)){
        echo "Data inseted successfully";
        // header("Location:Home1.php");
    }else{
        echo "error".mysqli_error($conn);
    }
}
