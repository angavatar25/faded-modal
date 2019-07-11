<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>
<!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."include/navbar.php"); ?>

    <!--Product Cover - Alt 1-->
    <style>
      .shop-cover-img {
        height: 300px;
        margin-bottom: 20px;
        position: relative;
        display: flex;
        justify-content: center;
      }
      .shop-cover-img span {
        position: absolute;
        display: inline-block;
        height: 30px;
        line-height: 30px;
        margin-top: -15px;
        top: 50%;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        font-size: 13px;
        letter-spacing: 1px;
        border-top: 2px solid #fff;
        border-bottom: 2px solid #fff;
        padding-left: 0;
        padding-right: 0;
      }
    </style>

    <div class="container mt-4">
      <div class="shop-cover-index" style="width: 100%">
        <div class="row">
          <div class="col-md-8 col-lg-6">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-4.jpg) no-repeat center; background-size: cover;">
              <span>Dining Chair</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
              <span>Lounge Chair</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-2.jpg) no-repeat center; background-size: cover;">
              <span>Bar Stool</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-3.jpg) no-repeat center; background-size: cover;">
              <span>Lounge Chair</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-4.jpg) no-repeat center; background-size: cover;">
              <span>Bar Stool</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-5.jpg) no-repeat center; background-size: cover;">
              <span>Lounge Chair</span>
            </div>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
              <span>Bar Stool</span>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!--Product Cover - Alt 1-->
    <style>
      .shop-cover-img {
        height: 200px;
        margin-bottom: 0;
        position: relative;
        display: flex;
        justify-content: center;
      }
      .shop-cover-title {
        font-weight: 600;
        text-transform: uppercase;
        font-family: "Helvetica Neue";
        font-size: 14px;
        letter-spacing: 1px;
        margin-bottom: 20px;
        /*border-bottom: 2px solid #333;*/
        padding: 10px;
        background: #eee;
      }
    </style>
    
    <div class="container mt-4">
      <div class="shop-cover-index" style="width: 100%">
        <div class="row">
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Sofa</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-2.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Stool</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-3.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Bar Chair</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-4.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Sofa</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-5.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Sofa</p>
          </div>
          <div class="col-6 col-md-4 col-lg-3">
            <div class="shop-cover-img" style="background: linear-gradient(rgba(0,0,0,.3),rgba(0,0,0,.3)), url(<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg) no-repeat center; background-size: cover;">
            </div>
            <p class="shop-cover-title">Sofa</p>
          </div>
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
