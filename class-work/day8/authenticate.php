<?php
$username = $_POST['username'];
$password = $_POST['password'];


echo $username;
if($username == "abc" && $password == "123"){
    // http://localhost:83/day8/authenticate.php?username=abc&password=123
    header("Location:profile.php?username=".$username);
}
    else{
        header("Location:login.php");
    }












?>