<?php


    session_start();
// $username = $_POST['username'];
// $password = $_POST['password'];

    if(empty($_POST['username'])){
        header("Location:login.php");
    }else{
        $username = $_POST['username'];
    }

    if(empty($_POST['password'])){
        header("Location:login.php");
    }else{
        $password = $_POST['password'];
    }


echo $username;
if($username == "abc" && $password == "123"){
    // http://localhost:83/day8/authenticate.php?username=abc&password=123
    $_SESSION['username']="abc";  
        header("Location:home1.php");
}
    else{
        header("Location:login.php");
    }












?>