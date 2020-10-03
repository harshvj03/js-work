<?php 
    session_start();
if (empty($_POST['email'])){
    header("location:login.php");
}else{
    $email = $_POST['email'];
}

if (empty($_POST['password'])){
    header("location:login.php");
}else{
    $password = $_POST['password'];
}

echo $email;
if($email == "abc@xyz.com" && $password == "123"){
    $_SESSION['email'] = "abc@xyz.com";
    header("location:profile.php");
}else{
    header("location:login.php");
}

?>