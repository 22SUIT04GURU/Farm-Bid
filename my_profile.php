<?php
    
    session_start();

    if(!isset($_SESSION['username']))
    {
        header('location: login.php');
    }

    require_once('database/db-connection.php');

    $user_id = $_GET['id'];
    $sql = "SELECT * FROM user_tbl WHERE id = '$user_id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $role = $row['role'];

    if($role=='farmer')
    {
        $sql1 = "SELECT * FROM farmers_tbl WHERE user_id = '$user_id'";
        $result1 = mysqli_query($conn, $sql1);
        $farmer = mysqli_fetch_assoc($result1);        
    }
    else
    {
        $sql2 = "SELECT * FROM dealers_tbl WHERE user_id = '$user_id'";
        $result2 = mysqli_query($conn, $sql2);
        $dealer = mysqli_fetch_assoc($result2);           
    }

?><!DOCTYPE html>
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
  <link href="css/my_profile.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
                                                     
</head>
<body class="index-page">

    <div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <a href="home.php"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        <div class="profile-img">
                            <img src="images/logo.png" alt="" />
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $row['first_name']; ?>
                                    </h5>
                                    <!-- <h6>
                                        Rice, Wheat, Millet, Paddy
                                    </h6> -->
                                    <!-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                                <?php 
                                    if($role == 'farmer')
                                    {
                                        ?>
                                        <li class="nav-item">
                                    <a class="nav-link active" id="address-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Address Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="farm-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Farm Details</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="bank-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Bank Details</a>
                                </li>
                                        <?php
                                    }
                                    else
                                    {
                                        ?>
                                            <li class="nav-item">
                                    <a class="nav-link active" id="shop-tab" data-toggle="tab" href="" role="tab" aria-controls="home" aria-selected="true">Shop Details</a>
                                </li>        
                                        <?php
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                        if($user_id == $_SESSION['user_id']){
                    ?><div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                <?php }
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>Personal Details</p>
                            <?php $dob = date('d-m-Y', strtotime($row['date_of_birth'])); ?>
                            <a href="">Date of Birth : <?php echo $dob; ?></a><br/>
                            <a href="">Email : <?php echo $row['email']; ?></a><br/>
                            <a href="">Phone : +91 <?php echo $row['phone']; ?></a><br/>
                            <a href="">Gender : <?php echo $row['gender']; ?></a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show <?php if($role == 'farmer') { ?> active <?php } ?>" id="address" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['address']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nationality</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Indian</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Tamil Nadu</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>District</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['district']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pin Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['pincode']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade show" id="farm" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Farm Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['farm_name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Farm Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['farm_location']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Farm Size</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['farm_size']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Types of Crops</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['type_of_crop']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade show" id="bank" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bank Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['bank_name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>IFSC Code</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['ifsc_code']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Account Number</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $farmer['account_number']; ?></p>
                                            </div>
                                        </div>
                            </div>
                            <div class="tab-pane fade show <?php if($role == 'dealer') { ?> active <?php } ?>" id="shop" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Shop Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dealer['shop_name']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Shop Location</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dealer['shop_location']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Types of Crop prefer to buy</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $dealer['type_of_crop_prefer_to_buy']; ?></p>
                                            </div>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

</body>
</html>
<script type="text/javascript">
    const navlink = document.querySelectorAll(".nav-link");
    navlink.forEach((e)=>{
        e.addEventListener("click",()=>{
            document.querySelector(".active").classList.remove("active");
            e.classList.add("active");
            const result = e.id.split('-')[0];
            document.querySelectorAll(".tab-pane").forEach((tab)=> tab.classList.remove("active"));
            document.getElementById(result).classList.add("active");
        })
    })
</script>