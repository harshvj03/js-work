<link rel="stylesheet" href="./style/login.css">

<?php
// include "nav.php";
// $file = fopen("./productlist.txt",'r');
// $data = fread($file,filesize("./productlist.txt"));

// echo $data;
// fclose($file);

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password, "ecomm");

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}
echo "connected successfully";

    $sql = "select * from products";
    $result = mysqli_query($conn,$sql);
    $productname = "";
    $price = "";
    $description="";
    echo "<br>";
    echo "Product Price Description";
    echo "<br>";
    echo "<table class='productlist'> ";
    
    while($row=mysqli_fetch_array($result)){
        echo "<tr>";
        $productname=$row['productname'];
        $price=$row['price'];
        $description=$row['description'];
        echo "<td>".$productname."</td><td> ".$price."</td><td> ".$description."</td>";
        echo "</tr>";
    }

    echo "</table>";

?>