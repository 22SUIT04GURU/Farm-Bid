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

  <!-- Bootstrap CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/signup.css" rel="stylesheet">
    
</head>
<body>
  <div class="page-wrapper bg-success p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"><img src="images/logo.png" alt="Farm Bid Logo" width="50" height="50">Registration Form <span>Already Have An Account? <a href="login.php">Login</a> </span> </h2>
                    <form method="POST">
                        <!-- PERSONAL DETAILS -->
                        <div id="personal_details">
                                <h2 class="title">Personal Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">first name</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Date of Birth</label>
                                            <input class="input--style-4" type="date" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Email</label>
                                            <input class="input--style-4" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Phone Number</label>
                                            <input class="input--style-4" type="text" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Gender</label>
                                            <select class="input--style-4 p-3" name="subject">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option>Subject 1</option>
                                            <option>Subject 2</option>
                                            <option>Subject 3</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Occupation</label>
                                            <input class="input--style-4" type="text" name="phone">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- PROFILE DETAILS -->
                        <div id="profile_details">
                                <h2 class="title">Profile Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">User name</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Password</label>
                                            <input class="input--style-4" type="password" name="last_name">
                                        </div>
                                    </div>
                                </div>
                        </div>

                        <!-- FARMER DETAILS -->
                        <div id="farmer_details">
                                <h2 class="title">Farmer Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Address Type</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Nationality</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">State</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">District</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Block Number</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                </div>
                        </div>  

                        <!-- PRODUCT DETAILS -->
                        <div id="product_details">
                                <h2 class="title">Product Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Name</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Location</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Size</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Type of Crop/Products Grown</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                        </div>  

                        <!-- ACCOUNT DETAILS -->
                        <div id="account_details">
                                <h2 class="title">Account Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Bank Name</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">IFSC Code</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Account Number</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                </div>
                        </div>  

                        <!-- DEALER DETAILS -->
                        <div id="account_details">
                                <h2 class="title">Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Shop Name</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Shop Location</label>
                                            <input class="input--style-4" type="text" name="last_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Types of Crops prefer to buy</label>
                                            <input class="input--style-4" type="text" name="first_name">
                                        </div>
                                    </div>
                                </div>
                        </div>  


                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
<style type="text/css">
  *
  {
    font-family: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
</style>