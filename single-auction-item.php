<?php

    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    require_once('database/db-connection.php');

    $user_id = $_GET['id'];
    $sql1 = "SELECT * FROM auction_item_tbl WHERE id = '$user_id'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_assoc($result1);

    if(isset($_POST['amount']))
    {
        $amount = $_POST['amount'];
        if($amount <= $row1['highest_bidder_amount'])
        {
            echo "<script>alert('Bid greater than ". $row1['highest_bidder_amount'] ."');</script>";
        }
        else
        {
            $highest_bidder = $_SESSION['user_id'];
            $highest_bidder_amount = $_POST['amount'];

            // echo "Current User : ".$highest_bidder."<br>";
            // echo "Current Highest Bidder : ".$row1['highest_bidder']."<br>";
            // echo "Current Highest Bidder Amount : ".$row1['highest_bidder_amount']."<br>";
            // echo "Auction ID : ".$user_id."<br>";

            $sql = "UPDATE `auction_item_tbl` SET `highest_bidder`= '$highest_bidder', `highest_bidder_amount`='$highest_bidder_amount' WHERE id=$user_id";

            if ($conn->query($sql) === TRUE) 
            {
                echo "<script>alert('Bidded Successfully');</script>";
                header('Location: single-auction-item.php?id='.$user_id);
            }
        }
    }

?>
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
    <section id="services" class="services section light-background d-flex justify-content-center">

      <div class="productcontainer">
      <div class="imgBx">
            <img src="uploads/<?php echo $row1['image']; ?>" alt="Nike Jordan Proto-Lyte Image">
        </div>
        <div class="details">
            <div class="content">
                <h2><?php echo $row1['item_name']; ?><br>
                    <span><?php echo $row1['item_category']; ?></span>
                </h2>
                <p>
                <?php echo $row1['description']; ?>
                </p>
                <?php 
                    if($row1['status'] == 'Ended' && $row1['highest_bidder'] == "No One")
                    { ?>
                        <h4><?php echo "Bid Failed !"; ?></h4>        
                    <?php }
                    else if ($row1['status'] == 'Ended' && $row1['highest_bidder'] != "No One")
                    { ?>
                        <h4><?php echo "Bid Won By ".$row1['highest_bidder']; ?></h4>        
                    <?php }
                    else if($row1['status'] == 'On_Going')
                    { ?>

                        <h3><?php echo "Rs. ".$row1['highest_bidder_amount']."/-"; ?></h3>
                        <form action="" method="POST">
                        <input type="number" name="amount" placeholder="Enter bid amount" autofocus id="bid">
                        <button>Bid Now</button>
                        </form>
                    <?php }
                ?>
                
            </div>
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
<style type="text/css">
  body{
    margin-top:20px;
}
.productcontainer {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    width: 900px;
    /* height: 600px; */
    background: #fff;
    margin: 20px;
}

#bid{
    margin-top: 20px;
    padding: 2%;   
    border: 2px solid gray;
    outline: none;
    border-radius: 5px; 
}
.productcontainer .imgBx {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    height: 100%;
    background: #1bbd36;
    transition: .3s linear;
}

/* .productcontainer .imgBx:before {
    content: 'Nike';
    position: absolute;
    top: 0px;
    left: 24px;
    color: #000;
    opacity: 0.2;
    font-size: 8em;
    font-weight: 800;
} */

.productcontainer .imgBx img {
    position: relative;
    width: 100%;
    /* transform: rotate(-30deg); */
    /* left: -50px; */
    transition: .9s linear;
}

.productcontainer .details {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    width: 50%;
    height: 100%;
    box-sizing: border-box;
    padding: 40px;
}

.productcontainer .details h2{
    margin: 0;
    padding: 0;
    font-size: 2.4em;
    line-height: 1em;
    color: #444;
}

.productcontainer .details h2 span {
    font-size: 0.4em;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #999;
}

.productcontainer .details p {
    max-width: 85%;
    margin-left: 15%;
    color: #333;
    font-size: 15px;
    margin-bottom: 36px;
}

.productcontainer .details h3 , h4 {
    margin: 0;
    padding: 0;
    font-size: 2.5em;
    color: #a2a2a2;
    float: left;
}
.productcontainer .details button {
    background: #1bbd36;
    color: #fff;
    border: none;
    outline: none;
    padding: 15px 20px;
    margin-top: 5px;
    font-size: 16px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 600;
    border-radius: 40px;
    float: right;
}

.product-colors span {
    width: 26px;
    height: 26px;
    top: 7px;
    margin-right: 12px;
    left: 10px;
    border-radius: 50%;
    position: relative;
    cursor: pointer;
    display: inline-block;
}

.black {
    background: #000;
}

.red {
    background: #D5212E;
}

.orange {
    background: #F18557;
}

.product-colors .active:after{
    content: "";
    width: 36px;
    height: 36px;
    border: 2px solid #000;
    position: absolute;
    border-radius: 50%;
    box-sizing: border-box;
    left: -5px;
    top: -5px;
}

</style>