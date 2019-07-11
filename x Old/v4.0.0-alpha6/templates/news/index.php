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

    <div class="loader-wrapper loader-dark">
      <div class="loader"></div>
    </div>

    <div class="wrapper">

      <?php include($prefix."static/navbar.php"); ?>

      <section class="cover cover-md">
        <div class="container">
          <h1 class="animated fadeInUp">News</h1>
        </div>
      </section>

      <section class="section-main section-news-index">
        <div class="container">
          <div class="row row-20">
            <?php 
            for($i=0;$i<12;$i++){
            ?>
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="card news-index-item">
                <a href="<?php echo $prefix;?>news/details.php">
                  <img class="card-img-top news-index-img" src="<?php echo $prefix;?>assets/img/news/img-sample.jpg" alt="News image">
                </a>
                <div class="card-block news-index-block">
                  <a href="<?php echo $prefix;?>news/details.php">
                    <small class="news-index-datestamp">Mon, 1 Apr 2017</small>
                    <h4 class="card-title news-index-title">News title</h4>
                    <p class="card-text news-index-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </a>
                  <a href="<?php echo $prefix;?>news/details.php" class="btn-link news-index-link">Read more <i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <?php 
            } 
            ?>
          </div>
          <button class="btn btn-primary btn-x-auto-250 mt-4">Load More</button>
        </div>
      </section>

    </div><!--.wrapper-->

    <?php include($prefix."static/footer.php"); ?>
    <?php include($prefix."static/script.php"); ?>

    <script>
      // Navbar active state
      $('#navNews').addClass('active');

      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInUp delayp4");
        $(".anim-2").addClass("animated fadeInUp delayp6");
        $(".anim-3").addClass("animated fadeInUp delayp8");
      });
    </script>

  </body>
</html>
