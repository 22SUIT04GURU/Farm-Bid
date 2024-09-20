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
                                            <select class="input--style-4 p-3" name="gender" data-fieldname="Gender">
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
                                            <select class="input--style-4 p-3" name="role" data-fieldname="Role">
                                            <option disabled="disabled" selected="selected">Choose Role</option>
                                            <option value="male">Farmer</option>
                                            <option value="female">Dealer</option>
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
                                            <input class="input--style-4" type="text" required="" name="username" data-regexp="regNamePattern" data-fieldname="Username">
                                        </div>
                                        <div>Enter</div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Password</label>
                                            <input class="input--style-4" type="password" required="" name="password" data-regexp="regPasswordPattern" data-fieldname="Password">
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
                                            <input class="input--style-4" type="text" name="address">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Nationality</label>
                                            <input class="input--style-4" type="text" disabled="" value="Indian" name="nationality">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">State</label>
                                            <input class="input--style-4" type="text" disabled="" value="Tamil Nadu" name="state">
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
                                            <label class="label">Pin Code</label>
                                            <input class="input--style-4" type="text" name="pincode">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                        <button class="btn btn--radius-2 btn--blue next-btn">Next</button>
                                    </div>
                        </div>  

                        <!-- PRODUCT DETAILS -->
                        <div id="product_details">
                                <h2 class="title">Product Details</h2>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Name</label>
                                            <input class="input--style-4" type="text" name="farm_name">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Location</label>
                                            <input class="input--style-4" type="text" name="farm_location">
                                        </div>
                                    </div>
                                </div>
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Farm Size</label>
                                            <input class="input--style-4" type="text" name="farm_size">
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group">
                                            <label class="label">Type of Crop/Products Grown</label>
                                            <input class="input--style-4" type="text" name="type_of_crop">
                                        </div>
                                    </div>
                                </div>
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue next-btn">Next</button>
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
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue next-btn">Next</button>
                                </div>
                        </div>  

                        <!-- DEALER DETAILS -->
                        <div id="dealer_details">
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
                                <div class="p-t-15">
                                    <button class="btn btn--radius-2 btn--blue next-btn" id="submit-btn">Submit</button>
                                </div>
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
<script type="text/javascript">
    const personal_details = document.getElementById('personal_details');
    const profile_details = document.getElementById('profile_details');
    const farmer_details = document.getElementById('farmer_details');
    const product_details = document.getElementById('product_details');
    const account_details = document.getElementById('account_details');
    const dealer_details = document.getElementById('dealer_details');

    var opacity=0; 
    var intervalID=0; 

    function fadeout(element){ 
            setInterval(hide, 200, element); 
        } 

    function hide(element){ 
        opacity = element.style.opacity; 
      
            if(opacity>0){ 
                opacity=opacity-0.1; 
                element.style.opacity=opacity 
            } 
            else{ 
                clearInterval(intervalID); 
            } 
        } 

        const regularExpressions = 
        {
            regNamePattern : /^([a-z,\s,\-]{1,50})$/i,
            regEmailPattern : /^[a-zA-Z0-9._%+-]+@gmail\.com$/,
            regPhonePattern : /^\d{10}$/,
            regPasswordPattern : /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()]).{8,}$/
        };

        function validatingPatterns(e)
        {
            regexp = e.getAttribute("data-regexp");
            if(regularExpressions[regexp].test(e.value))
            {
                return true;
            }
            else
            {
                return false;
            }
        }

    document.querySelectorAll('input[type="text"], input[type="password"]').forEach((inp) =>{
        inp.addEventListener("keyup",function(e){
        regexp = e.target.getAttribute("data-regexp");
        if(regularExpressions[regexp].test(e.target.value))
        {
            let warningdiv = e.target.parentElement.nextElementSibling;
            e.target.style.border = '2px solid green';
            warningdiv.style.opacity = 0;
        }
        else
        {
            let FieldName = e.target.getAttribute("data-fieldname");
            let warningdiv = e.target.parentElement.nextElementSibling;
            warningdiv.style.opacity = 1;
            warningdiv.innerHTML = `Invalid ${FieldName}`;
            e.target.style.border = '2px solid red';
            if(FieldName == "Passoword")
            {
                const requirements = [];
                password = e.target;
                // Check password length
                if (password.length < 8) {
                    requirements.push('At least 8 characters');
                }
                // Check for uppercase letter
                if (!/[A-Z]/.test(password)) {
                    requirements.push('At least one uppercase letter');
                }
                // Check for lowercase letter
                if (!/[a-z]/.test(password)) {
                    requirements.push('At least one lowercase letter');
                }
                // Check for digit
                if (!/\d/.test(password)) {
                    requirements.push('At least one digit');
                }
                // Check for special character
                if (!/[!@#$%^&*()]/.test(password)) {
                    requirements.push('At least one special character (e.g., !@#$%^&*())');
                }

                // Alert requirements if any are not met
                if (requirements.length > 0) {
                    alert('Your password must meet the following requirements:\n- ' + requirements.join('\n- '));
                } else {
                    alert('Password is valid!');
                }
            }
        }
    });
    })

    const nextBtn = document.querySelectorAll(".next-btn");

    nextBtn.forEach((e) => {
        e.addEventListener("click",()=>{

            var invalid_element,emptyElement;
            particularDiv = e.parentElement.parentElement;
            valid = true;

            particularDiv.querySelectorAll("input, select").forEach((div_input)=>{
                if(div_input.value == '' || div_input.value == 'Choose option' || div_input.value == 'Choose Role') 
                    {
                        valid = false;
                        invalid_element = div_input;
                    }
                    else if(div_input.type == "text" && !validatingPatterns(div_input))
                    {
                        valid = false;
                    }
                    if(emptyElement==undefined)
                    {
                        emptyElement = invalid_element;   
                    }
            });

            console.log(valid);

            if(valid)
            {
                console.log(particularDiv);
                console.log(particularDiv.nextElementSibling);
                particularDiv.style.display = "none";
                particularDiv.nextElementSibling.style.display  = "block";
            }
            else
            {
                console.log(emptyElement);
                let FieldName = emptyElement.getAttribute("data-fieldname");
                console.log(FieldName);
                let warningdiv = emptyElement.parentElement.nextElementSibling;
                console.log(warningdiv);
                warningdiv.style.opacity = 1;
                warningdiv.innerHTML = `Enter ${FieldName}`;
                fadeout(warningdiv);
            }

        });
    });

    document.getElementById('submit-btn').addEventListener("click",()=>{

    });

</script>