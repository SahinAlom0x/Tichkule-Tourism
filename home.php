<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tichkule Travel :: Best Service</title>
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function(){
          $(".scroll-top").click(function() {
              $("html, body").animate({ 
                  scrollTop: 0 
              }, "slow");
              return false;
          });
      });
   </script>
</head>
<body>
<!-- header section starts  -->
<section class="header">
   <a href="home.php" class="logo"><img src="images/logo.png"></a>
   <h1 style="color:black; font-size: 60px; padding-left: 150px;">Tichkule Tourism</h1>
   <nav class="navbar">
      <a href="home.php" class="active">Home</a>
      <a href="about.php">About</a>
      <a href="package.php">package</a>
      <a href="book.php">Book</a>
   </nav>
   <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!--home-->
<section class="home">
   <div class="swiper home-slider">
      <div class="swiper-wrapper">
         <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
            <div class="content">
               <span>Search, Express, Tour</span>
               <h3>Tour arround the universe</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>Search, Express, Tour</span>
               <h3>express the new destination</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>Search, Express, Tour</span>
               <h3>make your tour effective</h3>
               <a href="package.php" class="btn">See more</a>
            </div>
         </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
   </div>
</section>

<!--services-->
<section class="services">
   <h1 class="heading-title"> our services </h1>
   <div class="box-container">
      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>
      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
      </div>
      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>adventure</h3>
      </div>
      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>
      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>
      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>
   </div>
</section>

<!--about-->
<section class="home-about">
   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>
   <div class="content">
      <h3>About us</h3>
      <p>Amazing Tours a Best tour Operator and Travel agent in Bangladesh. We are Tour Package, Hotel booking. Bangladesh Tours & Travel agent. Find international and domestic tour packages from bangladesh at low prices including best ... Travel Package | Honeymoon Package | Tour Package</p>
      <a href="about.php" class="btn">read more</a>
   </div>
</section>

<!--packages-->
<section class="home-packages">
   <h1 class="heading-title"> Our Packages </h1>
   <div class="box-container">
      <div class="box">
         <div class="image">
            <img src="images/img-1.jpg" alt="">
         </div>
         <div class="content">
            <h3>Cox's Bazar</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Cox's Bazar top selling packages!</p>
            <h2>BDT 4,999</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-13.jpg" alt="">
         </div>
         <div class="content">
            <h3>Sajek</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Sajek top selling packages!</p>
            <h2>BDT 6,499</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      <div class="box">
         <div class="image">
            <img src="images/img-3.jpg" alt="">
         </div>
         <div class="content">
            <h3>Saint Martin's Island</h3>
            <p>Enjoy the Emirates with unforgettable fun with our Saint Martin's Island top selling packages!</p>
            <h2>BDT 8,999</h2>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
   </div>
   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
</section>



<section class="partner">
   <h1 class="heading-title"> our partners </h1>
   <div class="box-container">
      <div class="partner">
         <img src="images/sp1.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp2.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp3.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp4.png" alt="">
      </div>
      <div class="partner">
         <img src="images/sp5.png" alt="">
      </div>
   </div>
</section>


<!--Offers-->
<section class="home-offer home-packages">
   <div class="content">
      <div class="offerimage">
      <img src="images/offer.jpg">
      </div>
   </div>
   <div class="content">
      <br>
      <h3><br>upto 20% off</h3>
      <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

<!--footer-->
<section class="footer">
   <div class="box-container">
      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> Package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> Book</a>
      </div>
      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> About us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Terms of use</a>
         <a href="#"> <i class="fas fa-angle-right"></i> Privacy policy</a>
      </div>
      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +8809611341347 </a>
         <a href="#"> <i class="fas fa-phone"></i> +8809611341347 </a>
         <a href="#"> <i class="fas fa-envelope"></i> SahinAlom0x@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Rajshahi, Bangladesh </a>
      </div>
      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-linkedin"></i> Linkedin </a>
         <a href="#"> <i class="fab fa-facebook-f"></i> Facebook </a>
         <a href="#"> <i class="fab fa-instagram"></i> Instagram </a>
         <a href="#"> <i class="fab fa-twitter"></i> Twitter </a>
      </div>
   </div>
   <div class="credit"> designed by <span>SahinAlom0x</span> | Copyright@2023! </div>
</section>

<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>