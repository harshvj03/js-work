<?php

include "dbconnect.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = test_input($_POST['firstname']);
    $lastname = test_input($_POST['lastname']);
    $email = test_input($_POST['email']);
    $password = test_input($_POST['password']);
    $gender = test_input($_POST['gender']);
    $repassword = test_input($_POST['repassword']);
    
}

// echo $firstname." ".$lastname." ".$gender;



// if(!empty($firstname)){
//     htmlspecialchars($firstname);
//     trim($firstname);
//     //  echo $firstname;
// }


if($password == $repassword){
    $sql = "INSERT INTO `registeruser` ( firstname, lastname, email, password, gender) VALUES ( '".$firstname."', '".$lastname."', '".$email."', '".$password."', '".$gender."');";
    if(mysqli_query($connect,$sql)){
        echo "Insertion is successfull";
    }else{
        echo "Error".mysqli_error($connect);
    }
    header("Location:login.php");
}else{
    echo "Incorrect Password Entry";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


?>