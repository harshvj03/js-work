<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Store Data</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    
    <?php

    include"./nav.php";



    function storeData($firstname,$lastname,$email,$gender){
        $file = fopen("./storeData.txt",'a');
        fwrite($file,$firstname.':'.$lastname.':'.$email.':'.$gender."\n");

        fclose($file);
    }

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    echo $firstname;
    echo $lastname;
    echo $email;
    echo $gender;

    storeData($firstname,$lastname,$email,$gender);

    ?>
    <h1>Store Data</h1>
    
    
    
    
   
    <br>
    <a href="./product.php">Products</a>
</body>
</html>