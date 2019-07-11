<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>

    <?php include($prefix."include/navbar.php"); ?>

    <div class="cover cover-full" style="background: url(<?php echo $prefix;?>assets/img/common/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover;">
        <div class="container justify-content-center">
          <div class="cover-content text-center">
            <h1 class="cover-title animated fadeInUp delayp1">Oops.. something went wrong.</h1>
            <p class="cover-text animated fadeInUp delayp2">Sorry, but the page you were trying to view does not exist.</p>
            <a class="btn btn-primary animated fadeInUp delayp3" href="<?php echo $prefix;?>index.php" role="button" target="_top">Go Back to Home</a>
          </div>
        </div>
      </div>

    </body>

    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
