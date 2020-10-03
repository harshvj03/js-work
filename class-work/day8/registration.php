<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./style/login.css">
</head>

<body>
    <form action="./home.php" method="POST">
        <div id="top-container">

            <div>
                <label for="firstname">First Name</label>
                <input type="text" name="firstname">
            </div>

            <div>
                <label for="lastname">Last Name</label>
                <input type="text" name="lastname">
            </div>

            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
            </div>


            <div>
                <label for="gender" id="labelGender">Gender  </label>

                <label for="male" id="labelMale">Male</label>
                <input type="radio" name="gender" id="male" value="male">
                <label for="female">Female</label>
                <input type="radio" name="gender" id="female" value="female">
            </div>

            <div>
                <input type="submit" value="submit">
            </div>



        </div>


    </form>
</body>

</html>