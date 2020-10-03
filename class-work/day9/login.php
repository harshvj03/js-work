<!-- <?php
echo "Hello World";


?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/login.css">
    <!-- <link rel="stylesheet" href="./style/nav.css"> -->
    <title>Login</title>
</head>

<body>
    
    <?php
    session_start();
    if(isset($_SESSION['username'])){
        header("location:home1.php");
    }

    include"./nav.php";  
    ?>

    <!-- <div class="nav">
        <div class="nav-content">
            <li>Home</li>
            <li>Login</li>
            <li>Register</li>
            <li>Logout</li>
        </div>    
    </div> -->

    
    <form action="./authenticate.php" method="POST">

        <div id="top-container">
            <div class="heading">
                <h1>Login</h1>
            </div>
            <div>
                <label for="username">User Name</label>
            </div>
            <div>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password</label></div>
            <div>
                <input type="password" name="password" id="password">
            </div>
            <div>
                <input type="submit" id="submit" value="submit">
            </div>
        </div>
    </form>
</body>

</html>