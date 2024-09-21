<?php

  if(isset($_GET['msg']))
  {
    $msg = $_GET['msg'];
    echo '<script>alert('.$msg.');</script>';
  }

  session_start();

  if(!isset($_SESSION['username']))
                {

?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tech Farm Bid</title>

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
    <!-- Login 7 - Bootstrap Brain Component -->
<section class="p-3 p-md-4 p-xl-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-6 col-lg-7 col-xl-4 col-xxl-4">
        <div class="card border border-light-subtle rounded-4 glass-effect">
          <div class="card-body p-3 p-md-4">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <div class="text-center mb-4">
                    <a href="index.php">
                      <img src="images/logo.png" alt="Farm Bid Logo" width="100" height="100">
                    </a>
                  </div>
                  <h4 class="text-center text-light">Sign In</h4>
                </div>
              </div>
            </div>
            <form action="authentication/signin.php" method="POST">
              <div class="row gy-3 overflow-hidden">
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="text" class="form-control" name="username" id="text" placeholder="Enter your UserName" required>
                    <label for="text" class="form-label">User Name</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Password" required>
                    <label for="password" class="form-label">Password</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn bsb-btn-xl btn-success" name="submit" type="submit">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="signup.php" class="link-light text-decoration-none">Create new account</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <?php
  }
  else
  {
    header('location: home.php');
  }
      ?>
</body>
</html>
<style type="text/css">
  *
  {
    font-family: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    overflow: hidden;
  }
  section
  {
    background: url('images/background-4.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    height: 100vh;
  }
  .glass-effect
  {
    background-color: rgba(255, 255, 255, 0.228);
  backdrop-filter: blur(20px);
  }
</style>