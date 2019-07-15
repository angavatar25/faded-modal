<!DOCTYPE html>
<html lang="en">
<head>
   <?php $prefix="";?>
   <?php include($prefix."include/head.php"); ?>
   <?php include($prefix."include/tracking-script/head.php"); ?>
</head>
<body>
   <?php include($prefix."include/tracking-script/body.php"); ?>
   <div class="hamburger" onclick="openNav()" id="nav">
      <div class="hamburger__container">
         <div class="hamburger__inner"></div>
         <div class="hamburger__hidden"></div>
      </div>
      <div class="hamburger-content">
         <ul class="navbar-content">
            <li><a href="#">About</a></li>
            <li><a href="#">People</a></li>
            <li><a href="#">Perspective</a></li>
            <li><a href="#">Companies</a></li>
            <li><a href="#">More</a></li>
         </ul>
      </div>
   </div>

</body>
<script>
   document.querySelector(".hamburger").addEventListener("click", e => {
      e.currentTarget.classList.toggle("is-active");
   });
</script>
</html>