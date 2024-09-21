<?php

include '../database/db-connection.php';

session_start();

	if(isset($_POST['register_submit']))
	{
		$first_name = $_POST['first_name'];
		$date_of_birth = $_POST['date_of_birth'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$gender = $_POST['gender'];
		$role = $_POST['role'];
		$username = $_POST['username'];
		$password = $_POST['password'];

			// echo $first_name.' '.$date_of_birth.' '.$email.' '.$phone.' '.$gender.' '.$role.' '.$username.' '.$password;

		$user_tbl_query = "INSERT INTO user_tbl (first_name, date_of_birth, email, phone, gender, role, username, password) VALUES ('$first_name', '$date_of_birth', '$email', '$phone', '$gender', '$role', '$username', '$password' )";
        mysqli_query($conn, $user_tbl_query);

        $user_id = $conn->insert_id;           


			if($role == 'dealer')
			{
				$shop_name = $_POST['shop_name'];
				$shop_location = $_POST['shop_location'];
				$type_of_crop_prefer_to_buy = $_POST['type_of_crop_prefer_to_buy'];
				if($type_of_crop_prefer_to_buy == "Others") $type_of_crop_prefer_to_buy = $_POST['Others2'];
				// echo $shop_name.' '.$shop_location.' '.$type_of_crop_prefer_to_buy;
				$dealers_query = "INSERT INTO dealers_tbl (user_id, shop_name, shop_location, type_of_crop_prefer_to_buy) VALUES ('$user_id', '$shop_name', '$shop_location', '$type_of_crop_prefer_to_buy')";

                mysqli_query($conn, $dealers_query);
			}
			else if($role == 'farmer')
			{
				$address = $_POST['address'];
				$district = $_POST['district'];
				$pincode = $_POST['pincode'];
				$farm_name = $_POST['farm_name'];
				$farm_location = $_POST['farm_location'];
				$farm_size = $_POST['farm_size'];
				$type_of_crop = $_POST['type_of_crop'];
				if($type_of_crop=='Others') $type_of_crop = $_POST['Others1'];
				$bank_name = $_POST['bank_name'];
				$ifsc_code = $_POST['ifsc_code'];
				$account_number = $_POST['account_number'];
				// echo $address.' '.$district.' '.$pincode.' '.$farm_name.' '.$farm_location.' '.$farm_size.' '.$type_of_crop.' '.$bank_name.' '.$ifsc_code.' '.$account_number;	

				$farmers_query = "INSERT INTO farmers_tbl (user_id, address, district, pincode, farm_name, farm_location, farm_size, type_of_crop,	bank_name, ifsc_code, account_number) VALUES ('$user_id', '$address', '$district', '$pincode','$farm_name', '$farm_location', '$farm_size', '$type_of_crop', '$bank_name', '$ifsc_code', '$account_number')";

                mysqli_query($conn, $farmers_query);	
			}		
	}

	echo "<script>alert('New Account Created Successfully');</script>";
	$login_url = "../login.php?msg='New Account Created Successfully'";
	header("Location:".$login_url);
	mysqli_close($conn);


?>