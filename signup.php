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
  <div class="page-wrapper bg-signup p-t-100 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title"><img src="images/logo.png" alt="Farm Bid Logo" width="50" height="50">Registration Form <span>Already Have An Account? <a href="login.php">Login</a> </span> </h2>
                    <form method="POST" action="register.php">
                        <!-- PERSONAL DETAILS -->
                        <div id="personal_details">
                            <h2 class="title">Personal Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">first name</label>
                                            <input class="input--style-4" type="text" name="first_name" required="" data-regexp="regNamePattern" data-fieldname="First Name">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Date of Birth</label>
                                            <input class="input--style-4" type="date" name="date_of_birth" required="" data-fieldname="Date of Birth">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Email</label>
                                            <input class="input--style-4" type="text" name="email" required="" data-regexp="regEmailPattern" data-fieldname="Email">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Phone Number</label>
                                            <input class="input--style-4" type="text" data-regexp="regPhonePattern" name="phone" data-fieldname="Phone">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Gender</label>
                                            <select class="input--style-4 p-3" name="gender" data-fieldname="Gender" required="">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="prefer not to say">Prefer not to say</option>
                                        </select>
                                        </div>
                                        <div>Select</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Role</label>
                                            <select class="input--style-4 p-3" name="role" data-fieldname="Role" required="">
                                            <option disabled="disabled" selected="selected">Choose Role</option>
                                            <option value="farmer">Farmer</option>
                                            <option value="dealer">Dealer</option>
                                        </select>
                                        </div>
                                        <div>Select</div>
                                    </div>                                  
                                </div>
                                <div class="p-t-15">
                                        <div class="btn btn--radius-2 btn--blue next-btn">Next</div>
                                </div>
                        </div>

                        <!-- PROFILE DETAILS -->
                        <div id="profile_details">
                                <h2 class="title">Profile Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">User name</label>
                                            <input class="input--style-4" type="text" required="" name="username" data-regexp="regNamePattern" data-fieldname="Username" required="">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Password</label>
                                            <input class="input--style-4" type="password" required="" name="password" data-regexp="regPasswordPattern" data-fieldname="Password" required="">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                        <div class="btn btn--radius-2 btn--blue next-btn">Next</div>
                                </div>
                        </div>

                        <!-- FARMER DETAILS -->
                        <div id="farmer_details">
                                <h2 class="title">Farmer Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Address</label>
                                            <input class="input--style-4" type="text" name="address" data-regexp="regAddressPattern" data-fieldname="Address">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Nationality</label>
                                            <input class="input--style-4" type="text" disabled="" value="Indian" name="nationality" data-regexp="regNamePattern" data-fieldname="nationality">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">State</label>
                                            <input class="input--style-4" type="text" disabled="" value="Tamil Nadu" name="state" data-regexp="regNamePattern" data-fieldname="state">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">District</label>
                                            <select class="input--style-4 p-3" name="district" data-fieldname="District">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                                <option value="Ariyalur">Ariyalur</option>
                                                <option value="Chengalpattu">Chengalpattu</option>
                                                <option value="Chennai">Chennai</option>
                                                <option value="Coimbatore">Coimbatore</option>
                                                <option value="Cuddalore">Cuddalore</option>
                                                <option value="Dindigul">Dindigul</option>
                                                <option value="Ernakulam">Ernakulam</option>
                                                <option value="Thanjavur">Thanjavur</option>
                                                <option value="Thoothukudi">Thoothukudi</option>
                                                <option value="Trichy">Trichy</option>
                                                <option value="Virudhunagar">Virudhunagar</option>
                                                <option value="Vellore">Vellore</option>
                                                <option value="Tiruvallur">Tiruvallur</option>
                                                <option value="Tirunelveli">Tirunelveli</option>
                                                <option value="Nilgiris">Nilgiris</option>
                                                <option value="Namakkal">Namakkal</option>
                                                <option value="Pudukkottai">Pudukkottai</option>
                                                <option value="Sivagangai">Sivagangai</option>
                                                <option value="Salem">Salem</option>
                                                <option value="Theni">Theni</option>
                                                <option value="Tiruvannamalai">Tiruvannamalai</option>
                                                <option value="Kanyakumari">Kanyakumari</option>
                                                <option value="Krishnagiri">Krishnagiri</option>
                                                <option value="Madurai">Madurai</option>
                                                <option value="Nagapattinam">Nagapattinam</option>
                                                <option value="Perambalur">Perambalur</option>
                                                <option value="Ramnad">Ramnad</option>
                                                <option value="Ramanathapuram">Ramanathapuram</option>
                                                <option value="Tirupur">Tirupur</option>
                                        </select>
                                        </div>
                                        <div>Select</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Pin Code</label>
                                            <input class="input--style-4" type="text" name="pincode" data-regexp="regPinCodePattern" data-fieldname="Pincode">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                        <div class="btn btn--radius-2 btn--blue next-btn">Next</div>
                                </div>
                        </div>  

                        <!-- PRODUCT DETAILS -->
                        <div id="product_details">
                                <h2 class="title">Product Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Name</label>
                                            <input class="input--style-4" type="text" name="farm_name" data-regexp="regAddressPattern" data-fieldname="Farm Name">
                                        </div>
                                        <div>enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Location</label>
                                            <input class="input--style-4" type="text" name="farm_location" data-regexp="regAddressPattern" data-fieldname="Farm Location">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Size (in acres)</label>
                                            <input class="input--style-4" type="text" name="farm_size" data-regexp="regFarmSizePattern" data-fieldname="Farm Size">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                         <div class="input-group">
                                            <label class="label">Type of Crop/Products Grown</label>
                                            <select class="input--style-4 p-3" name="type_of_crop" data-fieldname="this Field" id="type_of_crop">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Wheat">Wheat</option>
                                            <option value="Paddy">Paddy</option>
                                            <option value="Millets">Millets</option>
                                            <option value="Grains">Grains</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2" id="Others">
                                        <div class="input-group">
                                            <label class="label">Others</label>
                                            <input class="input--style-4" type="text" name="Others" data-regexp="regNamePattern" data-fieldname="Others">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                        <div class="btn btn--radius-2 btn--blue next-btn">Next</div>
                                </div>
                        </div>  

                        <!-- ACCOUNT DETAILS -->
                        <div id="account_details">
                                <h2 class="title">Account Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Bank Name</label>
                                            <input class="input--style-4" type="text" name="bank_name" data-regexp="regNamePattern" data-fieldname="Bank Name">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">IFSC Code</label>
                                            <input class="input--style-4" type="text" name="ifsc_code" data-regexp="regIFSCPattern" data-fieldname="IFSC Code">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Account Number</label>
                                            <input class="input--style-4" type="text" name="account_number" data-regexp="regAccountNumberPattern" data-fieldname="Account Number">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                       <div class="btn btn--radius-2 btn--blue next-btn">Submit</div>
                                </div>
                        </div>  

                        <!-- DEALER DETAILS -->
                        <div id="dealer_details">
                                <h2 class="title">Dealer Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Shop Name</label>
                                            <input class="input--style-4" type="text" name="shop_name" data-regexp="regNamePattern" data-fieldname="Shop Name">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Shop Location</label>
                                            <input class="input--style-4" type="text" name="shop_location" data-regexp="regAddressPattern" data-fieldname="Shop Location">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                         <div class="input-group">
                                            <label class="label">Type of Crops Prefer to buy</label>
                                            <select class="input--style-4 p-3" name="type_of_crop_prefer_to_buy" data-fieldname="this Field" id="type_of_crop_prefer_to_buy">
                                            <option disabled="disabled" selected="selected">Choose option</option>
                                            <option value="Wheat">Wheat</option>
                                            <option value="Paddy">Paddy</option>
                                            <option value="Millets">Millets</option>
                                            <option value="Grains">Grains</option>
                                            <option value="Others">Others</option>
                                        </select>
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2" id="Others2">
                                        <div class="input-group">
                                            <label class="label">Others</label>
                                            <input class="input--style-4" type="text" name="Others" data-regexp="regNamePattern" data-fieldname="Others">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                        <div class="btn btn--radius-2 btn--blue next-btn">Submit</div>
                                </div>
                        </div>  
                        <input type="submit" id="register_submit" name="register_submit" class="" value="Submit">
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
<script type="text/javascript" src="js/script.js"></script>