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
      <a href="home.php">Home</a>
      <a href="about.php" class="active">About</a>
      <a href="package.php">Packages</a>
      <a href="book.php">Book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<div class="heading" style="background:url(images/header-bg-1.png) no-repeat">
   <h1>about us</h1>
</div>

<!--about-->

<section class="about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>why choose us?</h3>
      <p>Amazing Tours a Best tour Operator and Travel agent in Bangladesh. We are Tour Package, Hotel booking. Bangladesh Tours & Travel agent. Find international and domestic tour packages from bangladesh at low prices including best ... Travel Package | Honeymoon Package | Tour Package</p>
      <p>Fantastic getaway. Very good communication. Friendly and Easy to deal with.</p>
      <div class="icons-container">
         <div class="icons">
            <i class="fas fa-map"></i>
            <span>top destinations</span>
         </div>
         <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
         </div>
         <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>reasonable price</span>
         </div>
      </div>
   </div>

</section>

<!--reviews-->
<section class="reviews">

   <h1 class="heading-title"> clients reviews </h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>It was very helpful at finding me a reasonably priced hotel and close to trams with short notice for the GC marathon weekend. Will definitely use this service again.</p>
            <h3>Tilak Ahmed</h3>
            <span>Traveler</span>
            <img src="images/pic-04.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>As always great service, zero issues with connections. The best part of travel online is you can turn up at the airport with your passport and everything else is organised for you</p>
            <h3>Sumaiya Akther Suchi</h3>
            <span>traveler</span>
            <img src="images/pic-05.jpg" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Package was fantastic value, documents were sent to us in a timely manner and our holiday went off without a hitch. Everything was smoothly as can be! thank you to much.</p>
            <h3>Md. Sahin Alom</h3>
            <span>Traveler</span>
            <img src="images/pic-01.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>As always great service, zero issues with connections. The best part of travel online is you can turn up at the airport with your passport and everything else is organised for you</p>
            <h3>Kumar Shanu</h3>
            <span>Traveler</span>
            <img src="images/pic-03.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>It was very helpful at finding me a reasonably priced hotel and close to trams with short notice for the GC marathon weekend. Will definitely use this service again.</p>
            <h3>Jahadi Hasan Joy</h3>
            <span>Traveler</span>
            <img src="images/pic-02.png" alt="">
         </div>

         <div class="swiper-slide slide">
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <p>Package was fantastic value, documents were sent to us in a timely manner and our holiday went off without a hitch. everything was smoothly as can be! thank you to much.</p>
            <h3>Tareq</h3>
            <span>traveler</span>
            <img src="images/pic-06.jpg" alt="">
         </div>
      </div>
   </div>
</section>

<!--footer-->
<button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

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