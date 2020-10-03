<?php

    session_start();
    if(!isset($_SESSION)){
        header("location:login.php");
    }
    include "dbconnect.php";

    $sql = "select firstname,email,gender from registeruser";

    $result = mysqli_query($connect,$sql);

    $firstname = "";
    $email = "";
    $gender = "";

    $arr = array();

    while($row = mysqli_fetch_array($result)){
        array_push($arr,$row);
    }

    echo json_encode($arr);


?>