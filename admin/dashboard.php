<?php
    
    session_start();

    if(!isset($_SESSION['admin']))
    {
        header('location: index.php');
    }


    include '../database/db-connection.php';
    // REGISTERED COUNT
    $sql = "SELECT COUNT(*) AS total FROM farmers_tbl";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $count = $row['total'];
    // ENTERED COUNT
    $sql2 = "SELECT COUNT(*) AS total FROM dealers_tbl";
    $result2 = $conn->query($sql2);
    $row2 = $result2->fetch_assoc();
    $count2 = $row2['total'];
    // REGISTERED COUNT
    $sql3 = "SELECT COUNT(*) AS total FROM auction_item_tbl";
    $result3 = $conn->query($sql3);
    $row3 = $result3->fetch_assoc();
    $count3 = $row3['total'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Tech Farm Bid - Admin</title>
	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
	<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
    <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-dark shadow-sm sidebar" id="sidebar">
      <h1 class="d-flex my-4 justify-content-center"><img src="../images/logo.png" height="50" width="50"></h1>
      <div class="list-group rounded-0 bg-dark">
        <a href="#" class="list-group-item list-group-item-action active border-0 d-flex align-items-center">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="farmers.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-person"></span>
          <span class="ml-2">Farmers</span>
        </a>
        <a href="dealers.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-person"></span>
          <span class="ml-2">Dealers</span>
        </a>
        <a href="auction.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-box"></span>
          <span class="ml-2">Auction</span>
        </a>
        <a href="logout.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-power"></span>
          <span class="ml-2">Logout</span>
        </a>
      </div>
    </div>
    <!-- note: in the layout margin auto is the key as sidebar is fixed -->
    <div class="col-md-9 col-lg-10 ml-md-auto px-0 h-100" >
    	<div class="jumbotron jumbotron-fluid rounded bg-white border-0 shadow-sm border-left px-4">
		  <div class="container">
    		<h1 class="mb-2 text-success">Tech Farm Bid</h1>
    		<p class="lead text-muted">A Better Auction Platform</p>
  			</div>
		</div>
      <!-- main content -->
      <main class="container-fluid">
        <section class="row">
          <div class="col-md-6 col-lg-4">
            <!-- card -->
            <article class="p-4 rounded shadow-sm border-left
               mb-4 bg-dark">
                <h5 class="ml-2 text-light"><span class="bi bi-person h5"></span> &nbsp; Farmers - <?php echo $count; ?></h5>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4 bg-dark ">
                <h5 class="ml-2 text-light"><span class="bi bi-person h5"></span> &nbsp; Dealers - <?php echo $count2; ?></h5>
            </article>
          </div>
          <div class="col-md-6 col-lg-4">
            <article class="p-4 rounded shadow-sm border-left mb-4 bg-dark">
                <h5 class="ml-2 text-light"><span class="bi bi-person h5"></span> &nbsp; Auction - <?php echo $count3; ?></h5>
            </article>
          </div>
        </section>
      </main>
    </div>
  </div>
</div>
</body>
</html>