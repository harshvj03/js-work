<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername,$username,$password,"ecomm");

if($conn->connect_error){
    die("Connection failed ". $conn->connect_error);
}
echo "connected successfully";

?>