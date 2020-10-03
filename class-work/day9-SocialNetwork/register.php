<?php
    session_start();

    if(isset($_SESSION['email'])){
        header("location:profile.php");
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>

<body>
    <form action="storedata.php" method="POST">
        <div class="top-container">
            <h1>Sign Up</h1>
            <div>
                <input type="text" name="firstname" id="firstname" placeholder="First name">
            </div>
            <div>
                <input type="text" name="lastname" id="lastname" placeholder="Last name">
            </div>
            <div>
                <input type="email" name="email" id="email" placeholder="Email">
                <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
            </div>

            <div>
                <input type="password" name="password" id="password" placeholder="Password">
            </div>

            <div>
                <label for="birthday">Birthday:</label>
            </div>
            <div>
                <input type="date" id="birthday" name="birthday" placeholder="Birthday">
            </div>

            <div>
                <label for="gender">Gender</label>
            </div>
            <div>
                <input type="radio" name="gender" id="male" value="male">
                <label for="male" id="labelMale">Male</label>

                <input type="radio" name="gender" id="female" value="female">
                <label for="female">Female</label>
                
            </div>

            <div>
                <input type="submit" id="submit" value="Submit">

                <a href="./login.php">Login</a>
            </div>
            <p>
            <p class="_58mv">By clicking Sign Up, you agree to our <a href="/legal/terms/update" id="terms-link" target="_blank" rel="nofollow">Terms</a>, <a href="/about/privacy/update" id="privacy-link" target="_blank" rel="nofollow">Data Policy</a> and <a href="/policies/cookies/" id="cookie-use-link" target="_blank" rel="nofollow">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
            </p>
        </div>


    </form>
</body>

</html>