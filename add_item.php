<?php

  if(isset($_POST['submit']))
  {
    session_start();
    require_once('database/db-connection.php');
    $user_id = $_SESSION['user_id'];
    $item_name = $_POST['item_name'];
    $item_category = $_POST['item_category'];
    $description = $_POST['description'];
    $initial_amount = $_POST['initial_amount'];

    $filename1 = $_FILES["item_image"]["name"];
    $tempname = $_FILES["item_image"]["tmp_name"];
    $folder = "uploads/" . $filename1;

      if (move_uploaded_file($tempname, $folder)) {
              echo "  ";
          } else {
              echo " ";
          }

    $query = "INSERT INTO auction_item_tbl (farmer_id, item_name, item_category, initial_amount, description, image) VALUES ('$user_id', '$item_name', '$item_category', '$initial_amount', '$description', '$filename1')";

        if(mysqli_query($conn, $query))
        {
            $my_history_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/my_history.php';
            header('Location: '.$my_history_url);
            exit();
        }
        else
        {
            echo "no";
            exit();
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="index-page">

   <?php include_once 'header.php'; ?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title accent-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Post Bid Item</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="home.php">Home</a></li>
            <li class="current"><a href="my_history.php">History</a></li>
            <li class="current">Add Bid Item</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- FORM START -->
      <div class="form-box mt-4">
            <h1 class="mb-5 text-success">Add Auction Item</h1>
          <form method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label>Product Name</label>
              <input class="form-control mb-3 mt-1" id="" type="text" name="item_name" required="">
            </div>
            <div class="form-group">
              <label>Product Category</label>
              <input class="form-control mb-3 mt-1" id="" type="text" name="item_category" required="">
            </div>
            <div class="form-group">
              <label>Product Description</label>
              <textarea class="form-control mb-3 mt-1" id="" name="description" required=""></textarea>
            </div>
            <div class="form-group">
              <label>Initial Amount (in Rs.)</label>
              <input class="form-control mb-3 mt-1" id="" type="number" name="initial_amount" required="">
            </div>
            <div class="form-group">
              <label for="formFile" class="form-label">Product Image</label>
              <input class="form-control" type="file" id="formFile" name="item_image">
            </div>
            <input class="btn btn-outline-success mt-3" name="submit" type="submit" value="Submit" />
      </div>
      </form>

    <!-- FORM END -->
   
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

.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}
</style>