<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Home</title>
    <link rel="stylesheet" href="./style/login.css">
</head>
<body>
    <h1>Home</h1>

    <?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    echo "First Name ".$firstname;
    echo "<br>";
    echo "Last Name ".$lastname;
    echo "<br>";
    echo "Email  ".$email;
    echo "<br>";
    echo "Gender  ".$gender;
    ?>
    <br>
    <a href="./product.php">Products</a>
</body>
</html>