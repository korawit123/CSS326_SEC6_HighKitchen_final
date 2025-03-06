

<?php  
  session_start();
  include('server.php');
  if (!isset($_SESSION['username'])){
    $_SESSION['msg'] = "You must login first";
    header('location: login.php');
  }

  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }

  

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High Kitchen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="Swiper.css">
    <script src="https://kit.fontawesome.com/c1960a80b1.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="header">
        <div class="banner">
            <div class="slider">
                <img src="images/BG3.jpg" id="sliderimg">
            </div>
            <div class="overlay">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.jpg" >
                    </div>
                    <div class="bar">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a class="about" href="about.php" style="background-color: white; color: black; border-radius: 15px;">ABOUT</a></li>
                            <li><a href="membership.php">MEMBERSHIP</a></li>
                            <li><a href="menu.php">MENU</a></li>
                            <li><a href="history.php">HISTORY</a></li>
                            <li><a href="contact.php">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="account">
                    <div class="imguser">
                          <?php  if(isset($_SESSION['membershipid'])) : ?>
                            <?php  if($_SESSION['membershipid'] ==0) : ?>
                                  <img id="img" class="imguser" src="images/user.png" alt="">
                                  <?php endif ?>
                            <?php  if($_SESSION['membershipid'] ==1) : ?>
                                  <img id="img" class="imguser" src="images/silver-medal.png" alt="">
                                  <?php endif ?> 
                            <?php  if($_SESSION['membershipid'] ==2) : ?>
                                  <img id="img" class="imguser" src="images/gold-medal.png" alt="">
                                  <?php endif ?>
                            <?php  if($_SESSION['membershipid'] ==3) : ?>
                                  <img id="img" class="imguser" src="images/diamond.png" alt="">
                                  <?php endif ?>     
                          <?php endif ?>
                              
                        </div>
                        <div class="signout">
                            <?php  if(isset($_SESSION['username'])) : ?>
                              <strong><?php echo $_SESSION['username'] ?></strong>
                              <p><a href="index.php?logout='1'"><i class="fa-solid fa-right-from-bracket"></i></a></p>
                            <?php endif ?>
                        </div>
                        
                    </div>
                </div>
                <div class="exa">
                  <h1>Learn Cooking Online</h1>
                  <p>Sample text. Click to select the text box. Click again or double click to stare ending the text.</p>
                  <div class="ex">
                   <div class="img1"></div>
                   <div class="img2"></div>
                   <div class="img3"></div>
                  </div>
                </div>




            </div>
        </div>

    </section>
    <section>
        <div class="chef">
          <h1>Our High Kitchen Chef</h1>
          <?php
                                            
            $query = "SELECT  firstname, lastname, chef_type FROM chef";
            $result = $mysqli->query($query);
            ?>
            <div class="list">
              <?php while($row=$result->fetch_array()){ ?>
                <div class="ch">
                  <div class="d"></div>
                  <div class="text">
                    <h3><?=$row['firstname']?>&nbsp;&nbsp;&nbsp;<?=$row['lastname']?></h3>
                  </div>
              </div>
              <?php } ?>
          </div>
    </section>
    <section class="footer">
        <div class="col1">
          <h3>USEFULL LINK</h3>
          <a href="#">HOME</a>
          <a href="#">ABOUT</a>
          <a href="#">MENBERSHIP</a>
          <a href="#">MANU</a>
          <a href="#">HISTORY</a>
          <a href="#">CONTACT</a>

        </div>
        <div class="col2">
          <h3>NEWSLETTER</h3>
          <form action="">
            <input type="text" placeholder="Your Email Address" required>
            <br>
            <button type="submit">SUBCRIBE NOW</button>
          </form>
        </div>
        <div class="col3">
          <h3>CONTACT</h3>
          <p>123, XYZ, Road 3 <br> BANGKOK ,10000</p>
          <i class="fa-brands fa-facebook"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-instagram"></i>
          <i class="fa-brands fa-line"></i>
        </div>


      </section>
   
    
</body>
</html>