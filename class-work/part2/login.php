<?php
    session_start();
    if(isset($_SESSION['email'])){
        header("Location:index.php");
    }
    include "./nav.php"

?>

<link rel="stylesheet" href="./styles/nav.css">

<div class="jumbotron">
    <div class="heading">
        <h1>Login</h1>
    </div>
<form action="./authenticate.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <div class="anywhere-button">
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
  
</form>
</div>