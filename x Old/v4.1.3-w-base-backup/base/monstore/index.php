<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>
<!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."base/monstore/include/navbar.php"); ?>

    <section class="pt-3 pt-md-5">
      <div class="container">
        <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
          <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-1-xs.jpg" class="d-block d-md-none w-100" alt="Image">
          <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-1-md.jpg" class="d-none d-md-block w-100" alt="Image">
        </a>
        <div class="row">
          <div class="col-md-6">
            <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
              <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-1.jpg" class="d-block w-100" alt="Image">
            </a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
              <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-2.jpg" class="d-block w-100" alt="Image">
            </a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
              <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-3.jpg" class="d-block w-100" alt="Image">
            </a>
          </div>
          <div class="col-md-6">
            <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
              <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-4.jpg" class="d-block w-100" alt="Image">
            </a>
          </div>
        </div>
        <a href="<?php echo $prefix;?>" class="link-opacity mb-3">
          <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-2-xs.jpg" class="d-block d-md-none w-100" alt="Image">
          <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-2-md.jpg" class="d-none d-md-block w-100" alt="Image">
        </a>
      </div>
    </section>

    <?php include($prefix."base/monstore/include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');

      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInUp delayp4");
        $(".anim-2").addClass("animated fadeInup delayp6");
        $(".anim-3").addClass("animated fadeInUp delayp8");
      });
    </script>

  </body>
</html>
