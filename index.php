<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Aufgabe</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div id="side-menu" class="fas fa-bars"></div>   

<div class="side-bar">
   <h1 class="heading">filter images</h1>
   <div class="box">
      <h3 class="title">Such nach image :</h3>
      <input type="text" placeholder="such nach image..." id="search-box">
   </div>
   <div class="box">
      <h3 class="title">category :</h3>
      <div class="category">
         <div class="btn active" data-category="all"> all </div>
         <div class="btn" data-category="tiere">tiere</div>
         <div class="btn" data-category="fütterung">fütterung</div>
         <div class="btn" data-category="fish">fish</div>
         <div class="btn" data-category="blumen">blumen</div>
         <div class="btn" data-category="baum">baum</div>
      </div>
   </div>
   <div class="box">
      <h3 class="title">type :</h3>
      <div class="type">
         <div class="btn active" data-type="all">all type</div>
         <div class="btn" data-type="jpg">jpg</div>
         <div class="btn" data-type="png">png</div>
         <div class="btn" data-type="svg">svg</div>
      </div>
   </div>
   <div class="reset-btn"><div class="btn">Zürucksetzen</div></div>
</div>

<div class="gallery">

   <h1 class="heading">image gallery</h1>

   <div class="image-container">
      <img src="images/img-1.jpg" data-cat="tiere" data-search="tiere vogel süß bird cute chicks" alt="">
      <img src="images/img-2.svg" data-cat="fütterung" data-search="cookies christmas" alt="">
      <img src="images/img-3.png" data-cat="fütterung" data-search="fütterung corn cartoon png" alt="">
      <img src="images/img-4.jpg" data-cat="fish" data-search="tiere fish dolphin" alt="">
      <img src="images/img-5.jpg" data-cat="tiere" data-search="tiere tiere süß cute" alt="">
      <img src="images/img-6.png" data-cat="tiere" data-search="tiere panda png cartoon" alt="">
      <img src="images/img-7.svg" data-cat="tiere" data-search="tiere penguine bird cartoon" alt="">
      <img src="images/img-8.jpg" data-cat="tiere" data-search="tiere bird cute" alt="">
      <img src="images/img-9.png" data-cat="tiere" data-search="tiere cat mouse cute png" alt="">
      <img src="images/img-10.svg" data-cat="tiere"  data-search="tiere fish shark vector" alt="">
      <img src="images/img-11.jpg" data-cat="fütterung" data-search="food orange" alt="">
      <img src="images/img-12.svg" data-cat="fütterung" data-search="food vector juice drink" alt="">
      <img src="images/img-13.png" data-cat="fütterung" data-search="food chicken cartoon png" alt="">
      <img src="images/img-14.jpg" data-cat="fütterung" data-search="food coffee bread breakfast" alt="">
      <img src="images/img-15.png" data-cat="fütterung" data-search="food burger png cartoon" alt="">
      <img src="images/img-16.svg" data-cat="fütterung" data-search="food popcorn vector" alt="">
      <img src="images/img-17.jpg" data-cat="fütterung" data-search="food pancake breakfast" alt="">
      <img src="images/img-18.svg" data-cat="blumen" data-search="blumen plants nature vector" alt="">
      <img src="images/img-19.png" data-cat="blumen" data-search="blumen plants nature cartoon" alt="">
      <img src="images/img-20.jpg" data-cat="blumen" data-search="plants blumen nature" alt="">
      <img src="images/img-21.jpg" data-cat="baum" data-search="plants blumen nature" alt="">
      <img src="images/img-22.jpg" data-cat="berg" data-search="berg plants blumen nature" alt="">
      <img src="images/img-23.jpg" data-cat="tiere" data-search="tiere plants blumen nature" alt="">
      <img src="images/img-24.jpg" data-cat="blumen" data-search="plants blumen nature" alt="">
      <img src="images/img-25.jpg" data-cat="blumen" data-search="plants blumen nature" alt="">
      <img src="images/img-26.jpg" data-cat="berg" data-search=" berg plants blumen nature" alt="">
      <img src="images/img-27.jpg" data-cat="Meer" data-search="Meer plants blumen nature" alt="">
   </div>

</div>

<div class="image-popup">
   <img src="" alt="">
</div>


<script src="js/script.js"></script>

</body>
</html>