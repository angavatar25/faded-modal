<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js" lang="en"> <![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>base/corknscrew/assets/corknscrew.css">

  </head>
  <body>

  	<!--START: Navbar Basic B-->
      <nav class="navbar navbar-basic navbar-expand-md navbar-dark navbar-absolute-top navbar-corknscrew">
        <div class="container">
          <!-- <div class="navbar-header"> -->
            <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>index.php">
              <img src="<?php echo $prefix;?>assets/img/corknscrew/icon/logo.png" alt="Logo">
            </a>
            <button class="navbar-toggler navbar-toggler-absolute left" type="button" data-toggle="collapse" data-target="#navbarBasicB" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          <!-- </div> -->

          <div class="collapse navbar-collapse justify-content-center" id="navbarBasicB">
            <ul class="navbar-nav navbar-nav-left">
              <li class="nav-item active">
                <a class="nav-link text-uppercase" href="#">About us <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">food & Drinks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">wines</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">events</a>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-uppercase" href="#">Press</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--END: Navbar Basic B-->

    <!--Start: Cover - Static-->
    <div class="cover cover-full cover-corknscrew-home" style="background: linear-gradient(rgba(0,0,0, .25), rgba(0,0,0, .25)), url(<?php echo $prefix;?>assets/img/corknscrew/background/bg-bg-home-1.jpg) no-repeat center; background-size: cover;">
      <div class="container">
        <div class="cover-wrapper">
        	<div class="wine-home">
        		<img src="<?php echo $prefix;?>assets/img/corknscrew/icon/ic_wine.png"/>
        	</div>
          <div class="socmed">
          	<a href="#"><img src="<?php echo $prefix;?>assets/img/corknscrew/icon/ic_insta.png"/></a>
		        <a href="#"><img src="<?php echo $prefix;?>assets/img/corknscrew/icon/ic_twitter.png"/></a>
		        <a href="#"><img src="<?php echo $prefix;?>assets/img/corknscrew/icon/ic_facebook.png"/></a>
          </div>
        </div>
        <p class="footer font-size-sm">A Part of <b><a href="wwww.uniongroupjakarta.com">The Union Group</a></b></p>
      </div>
    </div>
    <!--End: Cover - Static-->

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script src="<?php echo $prefix;?>base/corknscrew/assets/corknscrew.js"></script>
  </body>
</html>