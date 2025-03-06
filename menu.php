

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
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="Swiper.css">
    <script src="https://kit.fontawesome.com/c1960a80b1.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="header">
        <div class="banner">
            <div class="slider">
                <img src="images/BG5.jpg" id="sliderimg">
            </div>
            <div class="overlay">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.jpg" >
                    </div>
                    <div class="bar">
                        <ul>
                            <li><a href="index.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="membership.php">MEMBERSHIP</a></li>
                            <li><a href="menu.php"  style="background-color: white; color: black; border-radius: 15px;">MENU</a></li>
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
                <div class="search">
                  <div class="bar">
                  <h2>The select menu</h2>
                  <p>The select manu defines the button-down list:</p>
                  <?php
                    
                      if ($_SESSION['membershipid'] == 0){
                          header('location: membership.php');
                      }
                      if(isset($_POST['button1']) and $_SESSION['membershipid'] != 0) {
                        $_SESSION['menu'] = 1;
                        header('location: menu.php');
                      }
                      if(isset($_POST['button2']) and $_SESSION['membershipid'] != 0) {
                          $_SESSION['menu'] = 2;
                          header('location: menu.php');
                      }
                      if(isset($_POST['button3']) and $_SESSION['membershipid'] != 0) {
                          $_SESSION['menu'] = 3;
                          header('location: menu.php');
                      }
                      if(isset($_POST['cancel'])){
                        $_SESSION['select'] = "check2";
                      }
                      
                  
                  ?>
                  <form method="POST">
                    <button  class="member" type="submit" name="button1">Dish</button>
                    <button  class="member" type="submit" name="button2">Dessert</button>
                    <button  class="member" type="submit" name="button3">Beverage</button>
                  </form>
                  </div>
                </div>
            </div>
            
        </div>

    </section>






    <section>
    <?php  if($_SESSION['menu'] != 0) : ?>
      <div class="menu">
        <div class="listmenu">
                              <?php  if($_SESSION['menu'] == 1) : ?>
                                        

                                        <h1>Menu Dish</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat enim alias aliquam! 
                                          Aperiam consectetur animi vel! Adipisci, voluptatibus vitae commodi 
                                          iste eaque tempora quo id quaerat quisquam sit eius incidunt.</p>
                                        <?php
                                            $select = $_SESSION['menu'];
                                            $query = "SELECT * FROM recipe WHERE menu_id = '$select'";
                                            $result = $mysqli->query($query);
                                             ?>
                                        <div class="list">
                                          <?php
                                            if(isset($_POST['select'])) {
                                              $_SESSION['select'] = $_POST['select'];
                                              
                                            }
                                          ?>
                                        <?php while($row=$result->fetch_array()){ ?>
                                          <div class="m">
                                            <form method="POST">
                                                  <button class="member" type="submit" name="select" value="<?=$row['recipe_name']?>"><h4><?=$row['recipe_name']?></h4></button>
                                                </form>
                                          </div>
                                            
                                              
                                              
                                                                                
                                            <?php } ?>
                                          
                                          
                                        </div>
                                    <?php endif ?>
                                    <?php  if($_SESSION['menu'] == 2) : ?>
                                        

                                        <h1>Menu Dessert</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat enim alias aliquam! 
                                          Aperiam consectetur animi vel! Adipisci, voluptatibus vitae commodi 
                                          iste eaque tempora quo id quaerat quisquam sit eius incidunt.</p>
                                        <?php
                                            $select = $_SESSION['menu'];
                                            $query = "SELECT * FROM recipe WHERE menu_id = '$select'";
                                            $result = $mysqli->query($query);
                                             ?>
                                        <div class="list">
                                          <?php
                                            if(isset($_POST['select'])) {
                                              $_SESSION['select'] = $_POST['select'];
                                              
                                            }
                                          ?>
                                        <?php while($row=$result->fetch_array()){ ?>
                                          <div class="m">
                                            <form method="POST">
                                            <button class="member" type="submit" name="select" value="<?=$row['recipe_name']?>"><h4><?=$row['recipe_name']?></h4></button>
                                                </form>
                                          </div>
                                            
                                              
                                              
                                                                                
                                            <?php } ?>
                                          
                                          
                                        </div>
                                    <?php endif ?>
                                    <?php  if($_SESSION['menu'] == 3) : ?>
                                        

                                        <h1>Menu Bererage</h1>
                                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat enim alias aliquam! 
                                          Aperiam consectetur animi vel! Adipisci, voluptatibus vitae commodi 
                                          iste eaque tempora quo id quaerat quisquam sit eius incidunt.</p>
                                        <?php
                                            $select = $_SESSION['menu'];
                                            $query = "SELECT * FROM recipe WHERE menu_id = '$select'";
                                            $result = $mysqli->query($query);
                                             ?>
                                        <div class="list">
                                          <?php
                                            if(isset($_POST['select'])) {
                                              $_SESSION['select'] = $_POST['select'];
                                              
                                            }
                                          ?>
                                        <?php while($row=$result->fetch_array()){ ?>
                                          <div class="m">
                                            <form method="POST">
                                                  <button class="member" type="submit" name="select" value="<?=$row['recipe_name']?>"><h4><?=$row['recipe_name']?></h4></button>
                                                </form>
                                          </div>
                                            
                                              
                                              
                                                                                
                                            <?php } ?>
                                          
                                          
                                        </div>
                                    <?php endif ?>
                              
                            





        </div>
      <?php endif ?>
    </section>
    <section class="a">
    
      <?php  if($_SESSION['select'] != "check2") : ?>
        <div class="view">
          <?php
            $select = $_SESSION['select'];
            $query = "SELECT * FROM recipe WHERE recipe_name = '$select'";
            $result = $mysqli->query($query);
            $row=$result->fetch_array();
          ?>
            <div class="recipe">
              <h1><?=$row['recipe_name']?></h1>
              <h2>Ingredients</h2>
              <h6><?=$row['recipe_Ingredients']?></h6>
              <h2>method</h2>
              <h6><?=$row['recipe_method']?></h6>

            </div>    
            <div class="img">

            </div>       
        </div>
        
        <form method="POST">
          <button class="member" type="submit" name="cancel" value="check2">DONE</button>
        </form>
        
      <?php endif ?>
      
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