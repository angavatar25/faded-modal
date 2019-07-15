<!DOCTYPE html>
<html lang="en">
<head>
   <?php $prefix="";?>
   <?php include($prefix."include/head.php"); ?>
   <?php include($prefix."include/tracking-script/head.php"); ?>
</head>
<body>
   <?php include($prefix."include/tracking-script/body.php"); ?>
   <div class="hamburger" id="burger">
      <div class="garis"></div>
      <div class="garis"></div>
      <div class="garis"></div>
      <div class="garis"></div>
   </div>
   <div class="hamburger-content" id="shownav">
      <ul class="navbar-content">
         <li><a href="#">About</a></li>
         <li><a href="#">People</a></li>
         <li><a href="#">Perspective</a></li>
         <li><a href="#">Companies</a></li>
         <li><a href="#">More</a></li>
      </ul>
   </div>
</body>
<?php include($prefix."include/script.php"); ?>
<script>
   // document.querySelector(".hamburger").addEventListener("click", e => {
   //    e.currentTarget.classList.toggle("is-active");
   // });

   function openNav() {
      document.getElementById("shownav").style.display = 'block'
   }

   $("#burger").click(function(){
      $(".hamburger-content").toggleClass("active");
      $(".garis").toggleClass("active");
      // $(".garis").css("background", "white");
   })
</script>
</html>