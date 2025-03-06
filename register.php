<?php 
        session_start();
        include('server.php'); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <title>Register</title>
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>REGISTER FORM</h1>
        </div>
        <?php include('errors.php');  ?>
            <?php if (isset($_SESSION['error'])):  ?>
                    <div class="error">
                        <h3>
                            <?php 
                                echo $_SESSION['error'];
                                unset($_SESSION['error']);
                            
                            ?>
                        </h3>
                    </div>
            <?php endif ?>
        <form action="register_db.php" method='post'>
            <input type="text" name="fname" placeholder="First Name" required >
            <br>
            <input type="text" name="lname" placeholder="Last Name" required >
            <br>
            <input type="text" name="username" placeholder="Username" required >
            <br>
            <input type="password" name="pass" placeholder="Password" required >
            <br>
            <input type="password" name="compass" placeholder="Comfirm Password" required >
            <br>
            <input type="text" name="email" placeholder="Email" required >
            <br>
            <input type="text" name="phone" placeholder="Phone Number" required >
            <br>
            <div class="gender">
                <label>Gender</label>
                <input type="radio" name="gender" value="1">Male
                <input type="radio" name="gender" value="2">Female
                <input type="radio" name="gender" value="3">LGBT+
            </div>
            <br>
            <div class="dob"><label>Date Of Birth</label>
            <input type="text" name="dob" placeholder="yyyy-dd-mm" required ></div>
            <br>
            <div class="submith">
                <input type="submit" name="sub" value="Submit">
            </div>
            
        </form>
        <div class="txt">
            <p>Aleady have an acount <span><a href="login.php">Click here</a></span></p>
        </div>
    </div>
    


    
</body>
</html>