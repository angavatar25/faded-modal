<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."include/head.php"); ?>
    <?php include($prefix."include/tracking-script/head.php"); ?>
  </head>
  <body>
    <?php include($prefix."include/tracking-script/body.php"); ?>

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> 

    <?php include($prefix."include/navbar.php"); ?>

    <!--Cover: Static-->
    <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover;">
        <div class="container justify-content-center">
          <div class="cover-content text-center">
            <h1 class="cover-title animated fadeInUp delayp1">Hello, world! <i class="fa fa-search"></i></h1>
            <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
          </div>
        </div>
        <a href="#" class="scroll-hint bottom-0 animated fadeInDown delayp4">
          <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
        </a>
    </div>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Navbar active state
      // $('#navHome').addClass('active');

      // Animation on load
      document.addEventListener("DOMContentLoaded", function(event) {
        $(".loader").fadeOut('slow');
        $(".loader-wrapper").fadeOut("slow");
      //  $(".anim-1").addClass("animated fadeInLeft delayp10");
       // $(".anim-2").addClass("animated fadeInUp delayp12");
        //$(".anim-3").addClass("animated fadeInUp delayp14");  
      });

    </script>

  </body>
</html>
