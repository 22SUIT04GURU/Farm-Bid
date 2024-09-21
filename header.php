<?php
    
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location: login.php');
    }

    require_once('database/db-connection.php');
?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <img src="images/logo.png" alt="">
        <h1 class="sitename">Farm Bid</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.php" class="active">Home</a></li>
          <li><a href="my_history.php">My History</a></li>
          <li><a href="our_farmers.php">Our Farmers</a></li>
          <li><a href="my_profile.php">My Profile</a></li>
          <li><a href="authentication/logout.php">LogOut</a></li>
        </ul>
      </nav>
    </div>
  </header>

