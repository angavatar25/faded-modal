<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."static/head.php"); ?>
  </head>
  <body>
    <!--[if lt IE 7]>
        <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div>

    <div class="wrapper">

      <?php include($prefix."static/navbar.php"); ?>

      <section class="section-main section-register">
        <div class="container container-sm">
          <div class="heading">
            <h1 class="heading-title animated fadeInUp">Register</h1>
          </div>
          <div class="content">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
            <form>
              <div class="form-group">
                <label class="col-form-label">Name</label>
                <input type="text" class="form-control" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label class="col-form-label">Email</label>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label class="col-form-label">Phone</label>
                <input type="tel" class="form-control" placeholder="Enter phone number">
              </div>
              <div class="form-group">
                <label class="col-form-label">Gender</label>
                <select class="form-control custom-select">
                  <option disabled selected hidden>Choose gender</option>
                  <option>Men</option>
                  <option>Women</option>
                </select>
              </div>
              <div class="form-group">
                <label class="col-form-label">Date of Birth</label>
                <input class="form-control form-control-datepicker" type="text" placeholder="Choose your date of birth">
              </div>
              <div class="form-group">
                <label class="col-form-label">Select</label>
                <select class="form-control custom-select">
                  <option disabled selected hidden>Choose option</option>
                  <option>Option 1</option>
                  <option>Option 2</option>
                  <option>Option 3</option>
                  <option>Option 4</option>
                  <option>Option 5</option>
                </select>
              </div>
              <input class="btn btn-primary btn-x-auto-250" type="submit" value="Daftar"></button>
            </form>
          </div>
        </div>
      </section>

    </div><!--.wrapper-->

    <?php include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInUp delayp4");
        $(".anim-2").addClass("animated fadeInLeft delayp6");
        $(".anim-3").addClass("animated fadeInUp delayp8");
      });
    </script>

  </body>
</html>
