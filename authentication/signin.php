<?php

		include '../database/db-connection.php';

		session_start();


        if (isset($_POST['submit'])) {

                    $user_username = mysqli_real_escape_string($conn, trim($_POST['username']));
                    $user_password = mysqli_real_escape_string($conn, trim($_POST['password']));

                    if (!empty($user_username) && !empty($user_password)) 
                    {

                        $query = "SELECT id,username, password FROM user_tbl WHERE username = '$user_username' AND password = '$user_password'";

                        $data = mysqli_query($conn, $query);

                        if (mysqli_num_rows($data) == 1) 
                        {

                            $row = mysqli_fetch_array($data);

                            $_SESSION['user_id'] = $row['id'];
                            $_SESSION['username'] = $row['username'];
                            
                            $home_url = 'http://' . $_SERVER['HTTP_HOST'] . '/Farm-Bid/home.php';

                            $admin_page = './admin/index.php';

                            header('Location: ' . $home_url);
                        }
                        else {
                        // The username/password are incorrect so set an error message
                        $login_url = "../login.php?msg='Incorrect Username or Password'";
						header("Location:".$login_url);
                        echo $error_msg;
                        }
                    }

        }