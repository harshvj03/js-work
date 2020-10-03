<?php

session_start();
if (!isset($_SESSION['email'])) {
    header("location:login.php");
}

include "nav.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>

    <div class="container col-12 row" style="margin-top:30px" id="container-home">

    </div>

    <!-- <div class="container col-12 row" style="margin-top:30px" id="container-home">

        <div class="card col-4 col" id="card-container"> -->

    <!-- <img src="./images/1.jpg" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;"> -->

    <!-- <div class="card-body" id="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div> -->

    <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul> -->
    <!-- <div class="card-body">
                <a href="#" class="btn btn-primary">Add to cart</a>

                <a href="#" class="btn btn-default">add to wishlist</a>
            </div> -->

    <!-- </div> -->


    <!-- <div class="card col-4">

            <img src="./images/2.jpg" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;">

            <div class="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>

                <a href="#" class="btn btn-default">Add to wishlist</a>
            </div>

        </div> -->

    <!-- <div class="card col-4">

            <img src="./images/3.jpg" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;">

            <div class="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Add to Cart</a>

                <a href="#" class="btn btn-default">Add to Wishlist</a>
            </div>

        </div>

    </div> -->

    <!-- <div class="container col-12" style="margin-top:30px" id="container-home">

        <div class="card col-4">

            <img src="https://placeimg.com/640/480/nature" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;">

            <div class="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Button</a>

                <a href="#" class="btn btn-default">Button</a>
            </div>

        </div>


        <div class="card col-4">

            <img src="https://placeimg.com/640/480/nature" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;">

            <div class="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Button</a>

                <a href="#" class="btn btn-default">Button</a>
            </div>

        </div>

        <div class="card col-4">

            <img src="https://placeimg.com/640/480/nature" alt="card-header-img" class="card-img-top" style="height: 400px;width:400px;">

            <div class="card-body">
                <h5 class="card-title mb-0">
                    Card Title</h5>
                
                <p class="card-text">
                    Lorem ipsum dolar 
                </p>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">Item One</li>

                <li class="list-group-item">Item Two</li>
            </ul>
            <div class="card-body">
                <a href="#" class="btn btn-primary">Button</a>

                <a href="#" class="btn btn-default">Button</a>
            </div>

        </div>

    </div> -->

    <script src="./scripts/app.js"></script>
</body>

</html>