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

    <!--START: Navbar Basic A-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
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
                  <a class="dropdown-item" href="#">The Country Annex</a>
                  <a class="dropdown-item" href="#">The Woodhouse</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.php">Testimonial </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reserve.php">Reserve</a>
              </li>
              <li class="nav-item active">
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
      <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-2.jpg) no-repeat center; background-size: cover;">
        <div class="container justify-content-center">
          <div class="cover-content text-center">
            <h1 class="cover-title">Contact</h1>
          </div>
        </div>
      </div>
      <!-- END: Cover -->

      <section class="section-main">
        <div class="container">
          <div class="row">
            <!-- START: left side -->
            <div class="col-sm-3">
              <h4 class="font-weight-light">Contact Us</h4>
              <ul class="list-unstyled mt-2">
                <li>
                  <p class="mb-0 font-weight-light">777 Broadway</p>
                  <p class="font-weight-light">New York NY 0000</p>
                </li>
                <li>
                  <p class="mb-0 font-weight-light">+1 (805) 555 0110</p>
                  <p class="font-weight-light">template.placeholder@gmail.com</p>
                </li>
              </ul>
            </div>
            <!-- END: left side -->

            <!-- START: main side -->
            <div class="col-sm-6">
              <!--START: Modal General-->
              <form class="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">First name</label>
                      <input type="text" class="form-control" id="" placeholder="First name" value="" required>
                      <div class="invalid-feedback">
                        Please enter first name
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Last name</label>
                      <input type="text" class="form-control" id="" placeholder="Last name" value="" required>
                      <div class="invalid-feedback">
                        Please enter last name
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label for="validationCustom03">Email</label>
                      <input type="email" class="form-control" id="validationCustom03" placeholder="Email" required>
                      <div class="invalid-feedback">
                        Please provide a valid email.
                      </div>
                    </div>
                  </div>

                  <div class="col-md-12 mb-3">
                    <div class="form-group">
                      <label for="validationCustom03">Message</label>
                      <textarea class="form-control" rows="5" id="comment" placeholder="Message" required=""></textarea>
                      <div class="invalid-feedback">
                        Please add message.
                      </div>
                    </div>
                  </div>

                  <div class="col-12">
                    <button class="btn btn-outline-dark" type="submit">Submit form</button>
                  </div>
                </div>
                
              </form>
              <!--END: Modal General-->
            </div>
            <!-- END: main side -->

            <!-- START: right side -->
            <div class="col-sm-3">
              <h5>Tell us what you think!</h5>
              <p class="font-weight-light font-italic">We are constantly working to raise the bar on our services. If you have any questions or concerns about your experience, please let us know. Our support concierges are available 24/7.</p>
              <ul class="list-unstyled mt-5">
                <li>
                  <p class="font-weight-bold mb-0">Cary Rowan</p>
                  <p class="mb-0 font-weight-light">+1 (805) 555 0123</p>
                  <p class="font-weight-light">template.placeholder@gmail.com</p>
                </li>
                <li>
                  <p class="font-weight-bold mb-0">Kennedy Kosciuszko</p>
                  <p class="mb-0 font-weight-light">+1 (805) 555 0110</p>
                  <p class="font-weight-light">template.placeholder@gmail.com</p>
                </li>
                <li>
                  <p class="font-weight-bold mb-0">Jared Lowry</p>
                  <p class="mb-0 font-weight-light">+1 (805) 555 0110</p>
                  <p class="font-weight-light">template.placeholder@gmail.com</p>
                </li>
              </ul>
            </div>
            <!-- END: right side -->
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

    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>

  </body>
</html>
