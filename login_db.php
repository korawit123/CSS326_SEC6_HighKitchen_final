<?php   
    session_start();
    include('server.php');
    $error = array();
    
    if (isset($_POST['sub'])){
        $username = mysqli_real_escape_string($mysqli,$_POST['username']);
        $password = mysqli_real_escape_string($mysqli,$_POST['pass']);
        if (count($error) == 0){
            $password = md5($password);
            $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
            $result = $mysqli->query($query);
            $result2 = $result->fetch_array();
            $_SESSION['membershipid'] = 0;
            if($result2['membership_id'] == 1)
                $_SESSION['membershipid'] = 1;
                $_SESSION['menu'] = 0;
                $_SESSION['check'] = "check";
                $_SESSION['select'] = "check2";
            if($result2['membership_id'] == 2)
                $_SESSION['membershipid'] = 2;
                $_SESSION['menu'] = 0;
                $_SESSION['check'] = "check";
                $_SESSION['select'] = "check2";
            if($result2['membership_id'] == 3)
                $_SESSION['membershipid'] = 3;
                $_SESSION['menu'] = 0;
                $_SESSION['check'] = "check";
                $_SESSION['select'] = "check2";
            
            if (mysqli_num_rows($result) == 1){
                $_SESSION['username'] = $username;
                header('location: index.php');
            }
            else {
                array_push($error, "Wrong username/password combimation");
                $_SESSION['error'] = "Wrong username or password try again!";
                header('location: login.php');
            }
        }
    }

    

?>