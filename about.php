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
   <title>About Us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/home_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">
      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>
      <div class="content">
         <h3>why choose us?</h3>
         <p></p>
         <a href="contact.php" class="inline-btn">contact us</a>
      </div>
   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="heading">3 simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>search boarding house</h3>
         <p>Search listed boarding house and view information that suits your desired place to stay.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>contact owners</h3>
         <p>You can contact owners by viewing their information in the listed boarding houses.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>stay with comfort</h3>
         <p>stay and be comfortable </p>
      </div>

   </div>











<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>