<?php

function storeData($firstname,$lastname,$email,$password,$birthday,$gender){
    $file = fopen("./storeRegister.txt",'a');
    fwrite($file,$firstname.":".$lastname.":".$email.":".$password.":".$birthday.":".$gender."\n");
    fclose($file);
}


if (empty($_POST['firstname'])) {
    header("Location:register.php");
} else {
    $firstname = $_POST['firstname'];
}

if (empty($_POST['lastname'])) {
    header("Location:register.php");
} else {
    $lastname = $_POST['lastname'];
}

if (empty($_POST['email'])) {
    header("Location:register.php");
} else {
    $email = $_POST['email'];
}

if (empty($_POST['password'])) {
    header("Location:register.php");
} else {
    $password = $_POST['password'];
}

if (empty($_POST['birthday'])) {
    header("Location:register.php");
} else {
    $birthday = $_POST['birthday'];
}

if (empty($_POST['gender'])) {
    header("Location:register.php");
} else {
    $gender = $_POST['gender'];
}

if(!empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) && !empty($birthday) && !empty($gender)){
    storeData($firstname,$lastname,$email,$password,$birthday,$gender);
    header("Location:login.php");

}

   

?>