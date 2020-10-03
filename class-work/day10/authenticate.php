<?php


    session_start();
// $username = $_POST['username'];
// $password = $_POST['password'];

    if(empty($_POST['username'])){
        header("Location:login.php");
    }else{
        $firstname = $_POST['username'];
    }

    if(empty($_POST['password'])){
        header("Location:login.php");
    }else{
        $passwordlog = $_POST['password'];
    }


// echo $username;
// if($username == "abc" && $password == "123"){
//     // http://localhost:83/day8/authenticate.php?username=abc&password=123
//     $_SESSION['username']="abc";  
//         header("Location:home1.php");
// }
//     else{
//         header("Location:login.php");
//     }

include "dbconnect.php";

$sql = "SELECT count(*) as count FROM registeruser WHERE firstname = '".$firstname."' and password = '".$passwordlog."'";

$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);
$count = $row['count'];

if($count > 0){
    $_SESSION['username'] = $username;
    header("Location:Home1.php");

}else{
    echo "username or password do not match";
    echo $firstname;
    echo $passwordlog;
     header("Location:login.php");
}










?>