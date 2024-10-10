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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/css/boxicons.min.css" integrity="sha512-pVCM5+SN2+qwj36KonHToF2p1oIvoU3bsqxphdOIWMYmgr4ZqD3t5DjKvvetKhXGc/ZG5REYTT6ltKfExEei/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="index-page">

  <?php include 'header.php'; ?>
  <?php if($user_role == 'farmer') { header('location: home.php'); } ?>
  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Auction</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current">Auction Items</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

     <!-- Services Section -->
    <section id="services" class="services section light-background">

      <div class="container mb-5" id="filterDiv">
      <a class="btn btn-outline-primary btn-lg btn-primary text-light" href="#all" role="button" data-status='all'>All</a>
      <a class="btn btn-outline-primary btn-lg" href="#on" role="button" data-status='On_Going'>On Going</a>
      <a class="btn btn-outline-primary btn-lg" href="#up" role="button" data-status='Assigned'>Up Coming</a>
      <a class="btn btn-outline-primary btn-lg" href="#end" role="button" data-status='Ended'>Ended</a>
      </div>

      <div class="container">

        <div class="row gy-4">

          <?php

           $sql = "SELECT * FROM auction_item_tbl WHERE status!='pending'";
           date_default_timezone_set('Asia/Kolkata');
          $currentTime = date( 'Y-m-d H:i', time () );
            $result = $conn->query($sql);
                        
            if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                      ?>

          <div class="col-lg-4 col-md-6 filterOut all <?php echo $row['status']; ?>" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item item-cyan position-relative">
              <div class="icon">
                <img src="uploads/<?php echo $row['image']; ?>" style='border-radius: 50%; height: 100%; width: 100%'>
                <i class="bi bi-activity"></i>
              </div>
              <a href="single-auction-item.php" class="stretched-link">
                <h3><?php echo $row['item_name']; ?></h3>
              </a>
              <p><i class='bx bxs-category'></i> <?php echo $row['item_category'] ?></p>
              <?php 
                $start_time = date("Y-m-d H:i", strtotime($row['start_time']));
                $end_time = date("Y-m-d H:i", strtotime($row['end_time']));

                if($currentTime < $start_time) { ?> 
                  <p>Starts in  <?php echo date("d-m-Y H:i", strtotime($start_time)) ?></p>  
              <?php 
                }
                else if($currentTime >= $start_time && $currentTime <= $end_time) 
                {
              ?>
                <p>Live Auction</p>
                <p>Ends in <?php echo date("d-m-Y H:i", strtotime($end_time)) ?></p>
                <?php
              }
              else if($currentTime > $end_time)
              {
            ?>
                <p>Auction Ended !</p>
            <?php }
              ?></div>
          </div><!-- End Service Item -->

          <?php
                          }
                        }
                          else {
                            echo "Sorry! Not Found";
                          }
                          $conn->close();
                    ?>

        </div>

      </div>

    </section><!-- /Services Section -->

  </main>

  <footer id="footer" class="footer dark-background mt-5">

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Farm Bid</strong> <span>All Rights Reserved</span></p>
    </div>
  </footer>
</body>
</html>

<script>
  const nodeList = document.querySelectorAll('a.btn.btn-outline-primary.btn-lg');

  function filter(filterOptions)
  {
    document.querySelectorAll(".filterOut").forEach(element =>{
        element.style.display = "none";
    });
    document.querySelectorAll("."+filterOptions).forEach(element =>{
        element.style.display = "block";
    });
  }

  nodeList.forEach(element => {
    element.addEventListener("click", (e)=>{
      document.querySelectorAll('.btn.btn-outline-primary.btn-lg').forEach(button => {
        button.classList.remove("btn-primary");
        button.classList.remove("text-light");
    });

      //  console.log(e.target);
       e.target.classList.add("btn-primary");
       e.target.classList.add("text-light");

       filter(e.target.getAttribute('data-status'));
    });
  });
  
</script>