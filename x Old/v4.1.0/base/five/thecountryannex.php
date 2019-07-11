<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="index-five.css">
  </head>
  <body>
    
    <div class="thecountryannex">
      <!--START: Navbar Basic A-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-dark.svg" alt="Logo">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasicA" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarBasicA">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Accomodation
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="top: 3rem;">
                  <a class="dropdown-item" href="accomodation.php">The Attic Loft</a>
                  <a class="dropdown-item" href="thecountryannex.php">The Country Annex</a>
                  <a class="dropdown-item" href="#">The Woodhouse</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.php">Testimonial</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reserve.php">Reserve</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic A-->

      <!-- START: Cover -->
        <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/common/bg_snowtrees.jpg) no-repeat center; background-size: cover;">
          <div class="container justify-content-center">
            <div class="cover-content text-center">
              <h1 class="cover-title animated fadeInUp">The Country Annex</h1>
            </div>
          </div>
        </div>
        <!-- END: Cover -->

      <section class="">
        <div class="container py-main border-bottom">
          <div class="row">
            <div class="col-md-6 vp-fadeinup">
              <h3 class="font-weight-light">An oasis away from the city. </h3>
              <p class="mt-4">In hac habitasse platea dictumst. Fusce eu erat tincidunt, dapibus sem scelerisque, dapibus nibh. Proin fringilla, est non fermentum cursus, elit nibh hendrerit velit, vitae congue neque augue sed odio.</p>
              <button class="btn btn-dark" type="submit">Reserve</button>
            </div>
            <div class="col-md-3 vp-fadeinup delayp1">
              <h5>Amenities</h5>
              <p class="font-weight-light">Vestibulum ante ipsum In faucibus orci luctus et Posuere cubilia curae Curae proin nec scelerisque Felis proin hendrerit Maecenas vehicula tortor Lacinia tristique finibus Sed maximus vel velit ac Rutrum ut sed tortor Egestas, volutpat orci vel Posuere cubilia curae</p>
            </div>
            <div class="col-md-3 vp-fadeinup delayp2">
              <h5>Rates</h5>
              <ul class="list-unstyled">
                <li class="font-weight-bold">Peak</li>
                <li class="font-weight-light">$400/night Sun – Thu</li>
                <li class="font-weight-light">$550/night Fri – Sat</li>
                <li class="font-weight-light">$2500/week</li>
              </ul>
              <ul class="list-unstyled mt-4">
                <li class="font-weight-bold">Off-Peak</li>
                <li class="font-weight-light">$250/night Sun – Thu</li>
                <li class="font-weight-light">$325/night Fri – Sat</li>
                <li class="font-weight-light">$1750/week</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section class="">
        <div class="container py-main border-bottom">
          <div class="row">
            <div class="col-md-12 mb-5">
              <h3 class="font-weight-light">Review</h3>
            </div>

            <!-- START: card-boxless -->
            <div class="col-md-4">
              <div class="card card-boxless text-center">
                <h5 class="card-title mb-0 font-italic font-weight-light">Ut sed egestas, volutpat.</h5>
                <div class="card-body">
                  <p class="card-text mt-1 font-weight-light small">“Pellentesque vel mattis turpis. Etiam tristique posuere sapien at mattis. Praesent feugiat pulvinar justo id varius. Fusce nisl elit, dictum eget condimentum eu, elementum sed ante.”</p>
                  <p>— J.A.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-boxless text-center">
                <h5 class="card-title mb-0 font-italic font-weight-light">Maecenas vehicula tortor!</h5>
                <div class="card-body">
                  <p class="card-text mt-1 font-weight-light small">“Etiam tristique posuere sapien at mattis. Praesent feugiat pulvinar justo id varius. Fusce nisl elit, dictum eget condimentum eu, elementum sed ante. Vestibulum ante ipsum primis in faucibus orci luctus.”</p>
                  <p>— L.K.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card card-boxless text-center">
                <h5 class="card-title mb-0 font-italic font-weight-light">Sed maximus vel velit ac rutrum</h5>
                <div class="card-body">
                  <p class="card-text mt-1 font-weight-light small">“Fusce nisl elit, dictum eget condimentum eu, elementum sed ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia. Pellentesque vel mattis turpis.”</p>
                  <p>— Y.A.</p>
                </div>
              </div>
            </div>
            <!-- START: card-boxless -->
          </div>
        </div>
      </section>

      <section class="">
        <div class="container py-main border-bottom">
          <h3 class="font-weight-light mb-5">Gallery</h3>
          <a href="">See More</a>

          <div class="row">
            <div class="col-8 col-md-7 p-0">
              <div class="img-wrapper" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover;">
              </div>
            </div>
            <div class="col-4 col-md-5 p-0">
              <div class="img-wrapper" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-3.jpeg) no-repeat center; background-size: cover;">
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section-main">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-10 mb-5">
              <h3 class="font-weight-light">Your vacation getaway is waiting.</h3>
              <p class="mt-3 small font-weight-light">Ut sed tortor egestas, volutpat orci vel, volutpat dolor.</p>
            </div>
            <div class="col-12 col-md-2">
              <button class="btn btn-dark" type="submit">Reserve</button>
            </div>
          </div>
        </div>
      </section>

      <!--START: Footer B-->
      <footer>
        <div class="footer-bottom bg-gray-50 py-4">
          <div class="container text-center">
            <small class="d-block mt-3 text-muted text-center">Designed by <a href="http://www.antikode.com" class="text-muted" target="_blank">Antikode</a></small>
          </div>
        </div>
      </footer>
      <!--END: Footer B-->
      
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
