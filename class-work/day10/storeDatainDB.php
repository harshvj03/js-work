<?php

// $servername = "localhost";
// $username = "root";
// $password = "";

// $conn = new mysqli($servername,$username,$password,"ecomm");

// if($conn->connect_error){
//     die("Connection failed ". $conn->connect_error);
// }
// echo "connected successfully";

include'dbconnect.php';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];



$sql = "INSERT INTO registeruser (firstname, lastname, email, password, gender) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$gender."');";

if(mysqli_query($conn,$sql)){
    echo "<br>";
    echo "Insertion of data is successful";
    "<script>console.log('Insertion of data is successful');</script>";
}else{
    echo "Error".mysqli_error($conn);
}
     header("Location:registration.php");
?>

<h1>Store data in Mysql </h1>