<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <style>
      .parallax-window {
        min-height: 400px;
        background: transparent;
      }

      #lightbox{
        background-color: transparent;
        padding: 10px;
        border-bottom: 2px solid #666;
        border-right: 2px solid #666;
        }
      #lightboxDetails{
        font-size: 0.8em;
        padding-top: 0.4em;
        } 
      #lightboxCaption{ float: left; }
      #keyboardMsg{ float: right; }

      #lightbox img{ border: none; } 
      #overlay img{ border: none; }

      /*make vertical indicator*/
      .carousel-vertical {
        position: absolute;
        bottom: 200px;
        z-index: 15;
        width: 50px;
        margin-left: 20px;
        list-style: none;
        text-align: center;
        left: 82%;
        transform: rotate(90deg);
      }
      .carousel-vertical li{
        display: block;
        width: 12px;
        height: 12px;
        margin-bottom: 10px;
        border-radius: 50%;
      }
      .carousel-vertical .active {
       width: 12px;
       height: 12px;
       margin-bottom: 10px;
       background-color: #fff;
      }

      .cover .cover-content-vertical {
        width: 94% !important;
      }

      @media(min-width: 768px){ 
        .carousel-vertical { left: 90%;} 
      }
    </style>
  </head>
  <body class="app sidebar-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar-admin.php"); ?>
    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            <section class="at-heading">
              <div class="container container-sm">
                <h1>Carousel Cover</h1>
                <p class="lead">Cover which usually used for the start of the page. In the form of static image / carousel with text and image background.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Carousel</h3>
                  <p>Use this cover if it's meant to show cover with carousel using background image and text on top of it. Require to add <code>.cover-carousel</code> to make the layout work. Notes: <code>.carousel-control-prev</code> &amp; <code>.carousel-control-next</code> is hidden in this instance.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--Start: Cover - Carousel-->
                  <div class="cover cover-carousel">
                    <div id="carouselCover" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselCover" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselCover" data-slide-to="1"></li>
                        <li data-target="#carouselCover" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)) ,url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content">
                              <h2 class="cover-title animated fadeInUp delayp1">Hello, world!</h2>
                              <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-3.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content">
                              <h2 class="cover-title">Hello, world!</h2>
                              <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content">
                              <h2 class="cover-title">Hello, world!</h2>
                              <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev hidden" href="#carouselCover" role="button" data-slide="prev">
                        <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next hidden" href="#carouselCover" role="button" data-slide="next">
                        <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
                      <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
                    </a>
                  </div>
                  <!--End: Cover - Carousel-->
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Carousel Fade</h3>
                  <p>Carousel fade in / out</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--Start: Cover - Carousel-->
                  <div class="cover cover-carousel carousel-fade">
                    <div id="carouselFade" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators carousel-vertical">
                        <li data-target="#carouselFade" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselFade" data-slide-to="1"></li>
                        <li data-target="#carouselFade" data-slide-to="2"></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content cover-content-vertical">
                              <h2 class="cover-title animated fadeInUp delayp1">Page 1</h2>
                              <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-3.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content cover-content-vertical">
                              <h2 class="cover-title">Page 2</h2>
                              <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                        <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg) no-repeat center; background-size: cover;">
                          <div class="container">
                            <div class="cover-content cover-content-vertical">
                              <h2 class="cover-title">Page 3</h2>
                              <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a class="carousel-control-prev hidden" href="#carouselFade" role="button" data-slide="prev">
                        <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next hidden" href="#carouselFade" role="button" data-slide="next">
                        <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
                    <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
                      <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
                    </a>
                  </div>
                  <!--End: Cover - Carousel-->
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
