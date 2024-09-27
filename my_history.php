<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Tech Farm Bid</title>

  <!-- Favicons -->
  <link href="images/logo.png" rel="icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Main CSS File -->
  <link href="css/main.css" rel="stylesheet">

  <!-- Box Icon cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="index-page">

 <?php include 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">My History</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">History</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="add-bid-item mb-3"><a href="add_item.php"><span>+</span></a></div>
        <div class="row container d-flex justify-content-center">
<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>S.No.</th>
                          <th>Product Name</th>
                          <th>Product Category</th>
                          <th>Initial Bid</th>
                          <th>Start Time</th>
                          <th>End Time</th>
                          <th>Highest Bidder</th>
                          <th>Posted On</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                                  <?php

           $sql = "SELECT * FROM auction_item_tbl WHERE farmer_id = '$user_id'";

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
                            $status = ($row['status'] == 'pending') ? 'warning' : 'success';
                          ?>
                          <td><?php echo $i++; ?></td>
                          <td><?php echo $row['item_name'] ?></td>
                          <td><?php echo $row['item_category'] ?></td>
                          <td><?php echo "&#8377; ".$row['initial_amount'] ?></td>
                          <td><?php echo $start_time ?></td>
                          <td><?php echo $end_time ?></td>
                          <td><?php echo $row['highest_bidder'] ?></td>
                          <td><?php echo $created_at ?></td>
                          <td><label class="badge badge-<?php echo $status; ?>"><?php echo $row['status']; ?></label></td>
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
              </div>
            </div>

  </main>

  <footer id="footer" class="footer dark-background mt-5">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Farm Bid</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>
</body>
</html>
<style type="text/css">
   body {
     background-color: #f9f9fa
 }

 .flex {
     -webkit-box-flex: 1;
     -ms-flex: 1 1 auto;
     flex: 1 1 auto
 }

 @media (max-width:991.98px) {
     .padding {
         padding: 1.5rem
     }
 }

 @media (max-width:767.98px) {
     .padding {
         padding: 1rem
     }
 }

 .padding {
     padding: 5rem
 }

 .card {
     box-shadow: none;
     -webkit-box-shadow: none;
     -moz-box-shadow: none;
     -ms-box-shadow: none
 }

 .pl-3,
 .px-3 {
     padding-left: 1rem !important
 }

 .card {
     position: relative;
     display: flex;
     flex-direction: column;
     min-width: 0;
     word-wrap: break-word;
     background-color: #fff;
     background-clip: border-box;
     border: 1px solid #d2d2dc;
     border-radius: 0
 }

 .card .card-title {
     color: #000000;
     margin-bottom: 0.625rem;
     text-transform: capitalize;
     font-size: 0.875rem;
     font-weight: 500
 }

 .card .card-description {
     margin-bottom: .875rem;
     font-weight: 400;
     color: #76838f
 }

 p {
     font-size: 0.875rem;
     margin-bottom: .5rem;
     line-height: 1.5rem
 }

 .table-responsive {
     display: block;
     width: 100%;
     overflow-x: auto;
     -webkit-overflow-scrolling: touch;
     -ms-overflow-style: -ms-autohiding-scrollbar
 }

 .table,
 .jsgrid .jsgrid-table {
     width: 100%;
     max-width: 100%;
     margin-bottom: 1rem;
     background-color: transparent
 }

 .table thead th,
 .jsgrid .jsgrid-table thead th {
     border-top: 0;
     border-bottom-width: 1px;
     font-weight: 500;
     font-size: .875rem;
     text-transform: uppercase
 }

 .table td,
 .jsgrid .jsgrid-table td {
     font-size: 0.875rem;
     padding: .875rem 0.9375rem
 }

 .badge {
     border-radius: 0;
     font-size: 12px;
     line-height: 1;
     padding: .375rem .5625rem;
     font-weight: normal
 }

 .badge-success
 {
  background-color: green;
 }
 .badge-warning
 {
  background-color: gray;
 }
 .badge-danger
 {
  background-color: red;
 }
</style>