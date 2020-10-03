<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style/profile.css">
</head>
<body>
    <h1>Profile</h1>

    <?php
    echo $_SERVER['REQUEST_METHOD'];
    echo "<br>";
    echo "Hello ".$_GET["username"]; 
    ?>

    <!-- <form action="">
    <div>
       <label for="first-name">First Name</label>
       <input type="text" name="first-name"> 
    </div> -->

    <a href="./registration.php">Register</a>

    </form>
</body>
</html>

