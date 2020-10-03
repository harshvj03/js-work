<?php 

    session_start();
    if(!isset($_SESSION['email'])){
        header("location:login.php");
    }

    include "./nav.php";

    include "./carousel.html"


?>

<body>
    <h1 class="heading">Index</h1>
<div class="user-table">

</div>

<div class="getdata" >
    <button id="getdata" type="submit">Get Details</button>
</div>

<script src="./script/app.js"></script>
</body>
