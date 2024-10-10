<?php
    
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
  }

    if(!isset($_SESSION['username']))
    {
        header('location: login.php');
    }

    require_once('database/db-connection.php');

    $user_id = $_SESSION['user_id'];

    $sql = "SELECT first_name,role FROM user_tbl WHERE id = '$user_id'";
  	$result = mysqli_query($conn, $sql);
  	$row = mysqli_fetch_assoc($result);

  	$user_role = $row['role'];
	
?>
<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center">

      <a href="#" class="logo d-flex align-items-center me-auto">
        <img src="images/logo.png" alt="">
        <h1 class="sitename">Tech Farm Bid</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="home.php" class="">Home</a></li>
          <?php if($user_role=='dealer') { ?><li><a href="aution-items.php" class="">Auction</a></li><?php } ?>
          <?php if($user_role=='farmer') { ?><li><a href="my_history.php">My History</a></li><?php } ?>
          <li><a href="our_farmers.php">Our Farmers</a></li>
          <?php if($user_role=='dealer') { ?><li><a href="our_dealers.php">Our Dealers</a></li><?php } ?>
          <li><a href="my_profile.php?id=<?php echo $user_id; ?>">My Profile</a></li>
          <li><a href="authentication/logout.php">LogOut</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <script type="text/javascript">
    const fullUrl = window.location.pathname.split('/')[2];
    console.log(document.querySelector(`a[href="${fullUrl}"]`));
    document.querySelector(`a[href="${fullUrl}"]`).classList.add("active");
  </script>