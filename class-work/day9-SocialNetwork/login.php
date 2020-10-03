<?php
session_start();
if (isset($_SESSION['email'])) {
    header("location:profile.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/register.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <form action="./authenticate.php" method="POST">
        <div class="top-container">
            <h1>Login</h1>

            <div>
                <input type="email" name="email" id="email" placeholder="Email">

            </div>

            <div>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>





            <div>
                <input type="submit" id="submit" value="Log in">

                <a href="./register.php">Register</a>
            </div>



        </div>


    </form>

    
</body>

</html>