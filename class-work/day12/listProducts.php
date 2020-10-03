<?php 
include "dbconnect.php";
$sql = "select * from products";
$result = mysqli_query($connect,$sql);
$productname = "";
$price = "";
$description = "";
$arr = array();
// echo "<div class='container col-12 row' id='container-home'>";
while($row = mysqli_fetch_array($result)){
    // while($row = mysqli_fetch_row($result)){
    // echo "<div class='card col-4 col'>";

    // echo "<div class='card-body'>";
    // echo "<h5 class='card-title mb-0'>";
    // echo "Products";
    // // echo "<\h5>";
    // echo "<p class='card-text'>";
    // $productname = $row['productname'];
    // $price = $row['price'];
    // $description = $row['description'];

    array_push($arr,$row);

    // echo $productname.'<br>'.$price.'<br>'.$description;
    // echo "</p>";
    // echo "</div>";
    // echo "</div>";
    // $arr = array(
    //     "one" => $productname,
    //     "two" => $price,
    //     "three" => $description
    // );
    // echo $productname.$price.$description;
    // echo json_encode($arr);
}

//  echo "</div>";
echo json_encode($arr);




// echo json_encode($arr);
?>