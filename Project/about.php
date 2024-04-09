<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>We students at College CCT are working on a final project called PharmaConnect, a website for easy access to medications. We're using Our skills to make it simple for people to find and learn about medicines online. This project is Our big task before We finish college, and We're excited to help people get the medicines they need easily.</p>

         <p>We would like to thank <a href="https://www.facebook.com/ravi.tiwari2064? target="_blank">Ravi Tiwari</a> Sir for guiding us through the session and making us able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/samip.jpg" alt="">
         <p>PharmaConnect has truly simplified my life! As a busy man, being able to order my family's medications online with ease is a game-changer.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3> <a href="https://www.facebook.com/profile.php?id=100089281557955&mibextid=sCpJLy" target="_blank">Samip Ghimire</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Anish.jpg" alt="">
         <p>I've always been skeptical about online pharmacies, but PharmaConnect has earned my trust.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/profile.php?id=100041129685649&mibextid=sCpJLy" target="_blank">Anish Mainali</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Anurag.jpg" alt="">
         <p>Living in a rural area, accessing medications used to be a challenge. Thanks to Pharma Connect for easy access.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/ghimire.anurag?mibextid=sCpJLy" target="_blank">Anurag Ghimire</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/Sagar.jpg" alt="">
         <p>"PharmaConnect's informative platform helped me better understand my medications  to make informed decisions about my health.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/SaGaR.THapA3232?mibextid=sCpJLy" target="_blank">Sagar Thapa</a></h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/reajanchor.jpg" alt="">
         <p>PharmaConnect has been a lifesaver for me.Their seamless ordering process makes sure I never run out of my essential medications</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3><a href="https://www.facebook.com/rejan.sapkota.3?mibextid=sCpJLy" target="_blank">Rejan Sapkota</a></h3>
      </div>

      

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>