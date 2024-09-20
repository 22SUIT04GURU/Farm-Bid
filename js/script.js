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
            regNamePattern : /^([a-z,\s,\-]{4,50})$/i,
            regEmailPattern : /^[a-zA-Z0-9._%+-]+@gmail\.com$/,
            regPhonePattern : /^\d{10}$/,
            regPasswordPattern : /^(?=.*[a-zA-Z])(?=.*[\W_]).{8,}$/,
            regPinCodePattern : /^\d{6}$|^\d{3}-\d{3}$/,
            regAddressPattern : /^[a-zA-Z0-9,.\s]+$/,
            regFarmSizePattern : /^\d+(\.\d+)?\s*(acres?|acre)?$/,
            regAccountNumberPattern : /^\d{8,12}$/,
            regIFSCPattern : /^[A-Z]{4}0[A-Z0-9]{6}$/
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
            if(FieldName == "Password") warningdiv.innerHTML = `Password contains atleast 8 characters <br>Password contains alphabets, numbers and special character 
                <br>Password contains atleast one special character`;
            else warningdiv.innerHTML = `Invalid ${FieldName}`;
            e.target.style.border = '2px solid red';
        }
    });
    })

    const nextBtn = document.querySelectorAll(".next-btn");
    othersSelected = false;
    role = "";

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
                        console.log('correct');
                    }
                    if(emptyElement==undefined)
                    {
                        emptyElement = invalid_element;   
                    }

                    if(div_input.getAttribute("data-fieldname") == 'this Field')
                    {
                        console.log("Type Corp " + div_input.value);
                        if(div_input.value == "Others")
                        {
                            othersSelected = true;
                        }
                        else if(div_input.id == "type_of_crop")
                        {
                            document.getElementsByName("Others")[0].value = "OthersnotSelected";
                        }
                        else
                        {
                            document.getElementsByName("Others")[1].value = "OthersnotSelected";   
                        }
                    }

                    if(div_input.getAttribute("data-fieldname") == 'Others' && othersSelected) 
                    {
                        if(div_input.value == "OthersnotSelected")
                        {
                            valid = false;
                        }
                    }

                    if(div_input.getAttribute("data-fieldname") == 'Role') 
                    {
                        role = div_input.value;   
                    }

            });

            console.log(valid);

            if(valid)
            {
                console.log(role);
                particularDiv.style.display = "none";
                if(role == 'farmer' && (particularDiv.nextElementSibling.id == 'farmer_details' || particularDiv.nextElementSibling.id == 'product_details' || particularDiv.nextElementSibling.id == 'account_details' || particularDiv.nextElementSibling.id == 'profile_details'))
                {
                    particularDiv.nextElementSibling.style.display  = "block";    
                }
                else if(role == 'dealer' && particularDiv.nextElementSibling)
                {
                       if(particularDiv.nextElementSibling.id == 'profile_details') particularDiv.nextElementSibling.style.display = "block";
                       else if(particularDiv.nextElementSibling.id == 'farmer_details') document.getElementById('dealer_details').style.display = "block";
                }
                else
                {
                    console.log("Registration Successful");
                }
            }
            else if(emptyElement!=undefined)
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


    // OTHER OPTIONS
    document.getElementById('type_of_crop').addEventListener("change",(e)=>{
        if(e.target.value == "Others")
        {   
            document.getElementById("Others").style.display = "block";
            document.getElementsByName("Others")[0].required = true;
        }
        else
        {   
            document.getElementById("Others").style.display = "none";
            document.getElementsByName("Others")[0].required = false;
        }
    })
    document.getElementById('type_of_crop_prefer_to_buy').addEventListener("change",(e)=>{
        if(e.target.value == "Others")
        {   
            document.getElementById("Others2").style.display = "block";
            document.getElementsByName("Others")[1].required = true;
        }
        else
        {   
            document.getElementById("Others2").style.display = "none";
            document.getElementsByName("Others")[1].required = false;
        }
    })

    