<?php
      session_start();

      if(isset($_POST['submit'])) 
      { 
          if( $_POST['username'] =='admin' && $_POST['password'] == 'admin123')
          {
            $_SESSION['admin'] = "Farm-Bid-Admin";
              header('Location: dashboard.php');
          } 
      }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tech Farm Bid - Admin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body class="bg-dark">
  <?php

  if(!isset($_SESSION['admin']))
                {
                  ?>
	 <div class="container">
    <div class="row ml-5">
      <div class="col-md-5 offset-3">
        <h2 class="text-center text-light mt-5">Admin Login</h2>
        <div class="text-center mb-5 text-light">Tech Farm Bid </div>
        <div class="card my-5">

          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="card-body cardbody-color p-lg-5">
            <div class="mb-3">
              <input type="text" class="form-control" id="Username" name="username" aria-describedby="emailHelp"
                placeholder="User Name">
            </div>
            <div class="mb-3">
              <input type="password" class="form-control" id="password" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" name="submit" class="btn btn-color px-5 mb-5 w-100">Login</button></div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <?php
  }
  else
  {
      header('location: dashboard.php');
  }
  ?>
</body>
</html>
<style type="text/css">
  .btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
</style>