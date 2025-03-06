

<?php  
  session_start();
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
    <link rel="stylesheet" href="Swiper.css">
    <script src="https://kit.fontawesome.com/c1960a80b1.js" crossorigin="anonymous"></script>

</head>
<body>
    <section class="header">
        <div class="banner">
            <div class="slider">
                <img src="images/bg2.jpg" id="sliderimg">
            </div>
            <div class="overlay">
                <div class="navbar">
                    <div class="logo">
                        <img src="images/logo.jpg" >
                    </div>
                    <div class="bar">
                        <ul>
                            <li><a href="index.php" style="background-color: white; color: black; border-radius: 15px;">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
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
                <div class="text">
                    <h1>HIGH KITCHEN</h1>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iste, 
                        possimus. Similique eos officia amet, repellat perspiciatis beatae eaque laborum hic?</p>
                     <div class="btn">
                        <button class="buttoni">More information</button>
                        <button class="buttoni">Let start</button>
                    </div>
                </div>
                
                
            </div>
        </div>

    </section>
   
    <section id="tranding">
        <div class="container">
          <h3 class="text-center section-subheading">- Popular Recipe -</h3>
          <h1 class="text-center section-heading">food</h1>
        </div>
        <div class="container">
          <div class="swiper tranding-slider">
            <div class="swiper-wrapper">
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-1.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Special Pizza
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-2.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Meat Ball
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-3.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Burger
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-4.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Frish Curry
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-5.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Pane Cake
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-6.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Vanilla cake
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
              <!-- Slide-start -->
              <div class="swiper-slide tranding-slide">
                <div class="tranding-slide-img">
                  <img src="images/tranding-food-7.png" alt="Tranding">
                </div>
                <div class="tranding-slide-content">
                  
                  <div class="tranding-slide-content-bottom">
                    <h2 class="food-name">
                      Straw Cake
                    </h2>
                    <h3 class="food-rating">
                      <span>4.5</span>
                      <div class="rating">
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                        <ion-icon name="star"></ion-icon>
                      </div>
                    </h3>
                  </div>
                </div>
              </div>
              <!-- Slide-end -->
            </div>
  
            <div class="tranding-slider-control">
              <div class="swiper-button-prev slider-arrow">
                <ion-icon name="arrow-back-outline"></ion-icon>
              </div>
              <div class="swiper-button-next slider-arrow">
                <ion-icon name="arrow-forward-outline"></ion-icon>
              </div>
              <div class="swiper-pagination"></div>
            </div>
  
          </div>
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
            <button class="buttoni" type="submit">SUBCRIBE NOW</button>
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
  
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
      <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
      <script src="Swiper.js"></script> 
</body>
</html>