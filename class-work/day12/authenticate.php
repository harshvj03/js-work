<?php 

    session_start();
    if(empty($_POST['email'])){
        header("location:login.php");
    }else{
        $email = $_POST['email'];
    }

    if(empty($_POST['password'])){
        header("location:login.php");
    }else{
        $password = $_POST['password'];
    }

    include "dbconnect.php";

    $sql = "select count(*) as count from registeruser where email ='".$email."' and password = '".$password."';";

    $result = mysqli_query($connect,$sql);

    $row = mysqli_fetch_array($result);

    $count = $row['count'];

    if($count > 0){
        $_SESSION['email'] = $email;
        header("location:home.php");
    }
    else{
        header("location:login.php");
    }
    
?>

