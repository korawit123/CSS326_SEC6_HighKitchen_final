<?php
            session_start();
            include('server.php'); 
            
            $username = $_SESSION['username'];
            if(isset($_POST['button1'])) {
                $query = "UPDATE users SET membership_id = 1 WHERE username = '$username'";
                $result = $mysqli->query($query);
                $_SESSION['membershipid'] = 1;
                header('location: membership.php');
            }
            if(isset($_POST['button2'])) {
                $query = "UPDATE users SET membership_id = 2 WHERE username = '$username'";
                $result = $mysqli->query($query);
                $_SESSION['membershipid'] = 2;
                header('location: membership.php');
            }
            if(isset($_POST['button3'])) {
                $query = "UPDATE users SET membership_id = 3 WHERE username = '$username'";
                $result = $mysqli->query($query);
                $_SESSION['membershipid'] = 3;
                header('location: membership.php');
            }

       
?>