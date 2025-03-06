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
    <script src="https://kit.fontawesome.com/c1960a80b1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <div class="heading">
            <h1>High Kitchen LOGIN</h1>
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
        <form action="login_db.php" method="post">
            
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" placeholder="Username" required >
            <br>
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="pass" placeholder="Password" required >
            <br>
            <div class="submith">
                <input type="submit" name="sub" value="Submit">
            </div>
            
        </form>
        <div class="txt">
            <p>create a new acount <span><a href="register.php">Click here</a></span></p>
        </div>
    </div>
    


    
</body>
</html>