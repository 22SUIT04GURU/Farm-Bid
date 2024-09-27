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
        <a href="farmers.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-person"></span>
          <span class="ml-2">Farmers</span>
        </a>
        <a href="dealers.php" class="list-group-item list-group-item-action border-0 align-items-center bg-dark text-light">
          <span class="bi bi-person"></span>
          <span class="ml-2">Dealers</span>
        </a>
        <a href="auction.php" class="list-group-item list-group-item-action border-0 align-items-center active">
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
    		<h1 class="mb-2 text-success">Tech Farm Bid - <span class="text-primary">Auction</span></h1>
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
                          <th>Farmer ID</th>
                          <th>Name</th>
                          <th>Category</th>
                          <th>Initial</th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Highest Bidder</th>
                          <th>Posted On</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                                  <?php

           $sql = "SELECT * FROM auction_item_tbl";

            $result = $conn->query($sql);
            $i = 1;
                        
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                      ?>

                        <tr>
                          <?php 
                            $created_at = date('d-m-Y', strtotime($row['created_at'])); 
                            $start_time = ($row['start_time']=='requested...') ? 'requested' : date('d-m-Y', strtotime($row['start_time']));
                            $end_time = ($row['end_time']=='requested...') ? 'requested' : date('d-m-Y', strtotime($row['end_time']));
                          ?>

                          <td><?php echo $i; ?></td>
                          <td><?php echo $row['farmer_id'] ?></td>
                          <td><?php echo $row['item_name'] ?></td>
                          <td><?php echo $row['item_category'] ?></td>
                          <td><?php echo $row['initial_amount'] ?></td>
                          <td><?php echo $start_time;  ?></td>
                          <td><?php echo $end_time; ?></td>
                          <td><?php echo $row['highest_bidder'] ?></td>
                          <td><?php echo $created_at ?></td>
                          <td><span class="bi bi-pen text-success" data-toggle="modal" data-target="#exampleModal<?php echo $i; ?>" data-whatever="@mdo"></span></td>
                          <div class="modal fade" id="exampleModal<?php echo $i++; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Start Auction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                              </div>
                              <div class="modal-body">
                                <form method="POST" action="start_action.php?id=<?php echo $row['id']; ?>">
                                  <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Start Time:</label>
                                    <input type="datetime-local" min="<?php echo date('Y-m-d H:i'); ?>" class="form-control start_time" name='start_time' id="recipient-name" required> 
                                  </div>
                                  <div class="form-group">
                                    <label for="end-time" class="col-form-label">End Time:</label>
                                    <input type="datetime-local" class="form-control" min="<?php echo date('Y-m-d H:i'); ?>" name="end_time" required id="end-time">
                                  </div>
                                  <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Start </button>
                              </div>
                                </form>
                              </div>
                              
                            </div>
                          </div>
                        </div>
                        </tr>

                          <?php
                          }
                        }
                          else {
                            echo "<div class='mb-3 bg-warning p-3 rounded'>No Item found !</div>";
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>