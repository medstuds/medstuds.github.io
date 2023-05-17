<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Tentang kami</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/krida5.png" alt="Image" height="30" width="30">
      </div>

      <div class="content">
         <h3>Alasan menggunakan layanan kami?</h3>
         <p>Kami menyediakan akses untuk berbagi pengetahuan dan materi pembelajaran untuk diajarkan dan dipelajari secara gratis</p>
         <a href="courses.php" class="inline-btn">Tema Pembelajaran</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>1000+</h3>
            <span>Pembelajaran Daring</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>25000+</h3>
            <span>Pengguna Pelajar</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>5000+k</h3>
            <span>Pengajar Ahli</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>Pengalaman</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">Ulasan Pengguna</h1>

   <div class="box-container">

      <div class="box">
         <p>Layanan ini cukup membantu bagi saya, aksesnya juga mudah dan saya dapat memilih tema pembelajaran yang saya inginkan atau butuhkan.</p>
         <div class="user">
            <img src="images/6rma.png" alt="">
            <div>
               <h3>Nadia Putri J</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Layanan ini cukup membantu bagi saya.</p>
         <div class="user">
            <img src="images/4rma.png" alt="">
            <div>
               <h3>Dedek Wahyu</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Akses layanan ini mudah dan saya dapat memilih tema pembelajaran yang saya inginkan atau butuhkan.</p>
         <div class="user">
            <img src="images/2rma.png" alt="">
            <div>
               <h3>Owen Jeremia</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Layanan ini cukup membantu saya, namun masih perlu banyak perbaikan dan pengembangan.</p>
         <div class="user">
            <img src="images/5rma.png" alt="">
            <div>
               <h3>Lintang Shafa</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Layanan ini masih perlu banyak perbaikan dan pengembangan.</p>
         <div class="user">
            <img src="images/3rma.png" alt="">
            <div>
               <h3>Mashuri</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Layanan ini bagi saya cukup bermanfaat, namun masih perlu adanya tambahan dan penyempurnaan.</p>
         <div class="user">
            <img src="images/1.png" alt="">
            <div>
               <h3>Malika R</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>