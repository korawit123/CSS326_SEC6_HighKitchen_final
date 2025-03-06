<?php
    session_start();
    include('server.php');
    $error = array();

    if (isset($_POST['sub'])){
        $fname = mysqli_real_escape_string($mysqli,$_POST['fname']);
        $lname = mysqli_real_escape_string($mysqli,$_POST['lname']);
        $username = mysqli_real_escape_string($mysqli,$_POST['username']);
        $pass = mysqli_real_escape_string($mysqli,$_POST['pass']);
        $compass = mysqli_real_escape_string($mysqli,$_POST['compass']);
        $email = mysqli_real_escape_string($mysqli,$_POST['email']);
        $phone = mysqli_real_escape_string($mysqli,$_POST['phone']);
        $gender = mysqli_real_escape_string($mysqli,$_POST['gender']);
        $dob = mysqli_real_escape_string($mysqli,$_POST['dob']);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            array_push($error, "Email is invalid");
            $_SESSION['error'] = "Email is invalid";
        }
        if ($pass != $compass){
            array_push($error, "The two passwords do not match");
            $_SESSION['error']=  "The two passwords do not match";
        }

        $user_check_query = "SELECT * FROM users WHERE username ='$username' OR email = '$email'";
        $query = $mysqli->query($user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result){
            if($result['username'] == $username)
                array_push($error, "Username already exists");
                $_SESSION['error']= "Username already exists";

            if($result['email'] == $email)
                array_push($error, "Email already exists");
                $_SESSION['error']= "Email already exists";
        }

        if (count($error) == 0){
            $password = md5($pass);

            $sql = "INSERT INTO users (fname, lname, username, password, email, phone_num, gender, DOB)
                    VALUES ('$fname','$lname','$username','$password','$email','$phone','$gender','$dob')";

            $result=$mysqli->query($sql);
            $_SESSION['membershipid'] = 0;
            $_SESSION['menu'] = 0;
            $_SESSION['select'] = "check2";
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "you are now logged in";
            header('location: index.php');

        }
        else {
            array_push($error, "Username , Email already exists or Password not mach");
            $_SESSION['error'] = "Username , Email already exists or Password not mach";
            header('location: register.php');
            
        }
    }






?>