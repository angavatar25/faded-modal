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

    <!--START: Navbar Basic B-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <!-- <div class="navbar-header"> -->
            <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>">
              <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-absolute left" type="button" data-toggle="collapse" data-target="#navbarBasicB" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarBasicB">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic B-->

    <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/common/bg_trees.jpg) no-repeat center; background-size: cover;">
      <div class="container justify-content-center">
        <div class="cover-content text-center">
          <h1 class="cover-title">
            No More Diet,<br>
            No More Bullshit,<br>
            Just Eatlah
          </h1>
        </div>
      </div>
    </div>

    <?php //include($prefix."include/footer.php"); ?>
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
