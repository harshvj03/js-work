<?php

$connect = mysqli_connect("localhost","root","","ecomm");
if($connect == false){
    die("Error: Connection failed").mysqli_connect_error($connect);
}


?>