<?php include_once '../database/db-connection.php';
  session_start();

    if(!isset($_SESSION['admin']))
    {
        header('location: index.php');
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
<body>
	<div class="container-fluid">
  <div class="row">
    <!-- sidebar -->
    <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-dark shadow-sm sidebar" id="sidebar">
      <h1 class="d-flex my-4 justify-content-center"><img src="../images/logo.png" height="50" width="50"></h1>
      <div class="list-group rounded-0 bg-dark">
        <a href="dashboard.php" class="list-group-item list-group-item-action border-0 d-flex align-items-center bg-dark text-light">
          <span class="bi bi-border-all"></span>
          <span class="ml-2">Dashboard</span>
        </a>
        <a href="farmers.php" class="list-group-item list-group-item-action border-0 align-items-center active">
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
    		<h1 class="mb-2 text-success">Tech Farm Bid - <span class="text-primary">Farmers</span></h1>
    		<p class="lead text-muted">A Better Auction Platform</p>
  			</div>
		</div>
      <!-- main content -->
      <main class="container-fluid">
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th>Date of Birth</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Gender</th>
                          <th>Username</th>
                          <th>Posted On</th>
                        </tr>
                      </thead>
                      <tbody>
                                  <?php

           $sql = "SELECT * FROM user_tbl WHERE role = 'farmer'";

            $result = $conn->query($sql);
            $i = 1;
                        
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                      ?>

                        <tr>
                          <?php $created_at = date('d-m-Y', strtotime($row['registered_date'])); ?>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $row['first_name'] ?></td>
                          <td><?php echo $row['date_of_birth'] ?></td>
                          <td><?php echo $row['email'] ?></td>
                          <td><?php echo $row['phone'] ?></td>
                          <td><?php echo $row['gender'] ?></td>
                          <td><?php echo $row['username'] ?></td>
                          <td><?php echo $created_at ?></td>
                        </tr>

                          <?php
                          }
                        }
                          else {
                            echo "<div class='mb-3 bg-warning p-3 rounded'>No Item found, why don't you post one</div>";
                          }
                          $conn->close();
                    ?>


                      </tbody>
                    </table>
                  </div>
                </div> 
              </div>
            </div>
            </div> 
      </main>
    </div>
  </div>
</div>
</body>
</html>