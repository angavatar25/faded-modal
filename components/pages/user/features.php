<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="app header-fixed sidebar-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar-admin.php"); ?>
    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            <section class="section-main">
              <div class="container container-sm">
                <div class="heading">
                  <h1>Features</h1>
                  <p class="lead mb-6">Components that mostly used for marketing site.</p>
                </div>

                <h3>Points</h3>
                <p>This type of layout can be used to list features which usually uses icons as the visual.</p>
                <p>&nbsp;</p>
              </div>
              <!--START: Features-->
              <section class="section-main bg-light">
                <div class="container">
                  <div class="row">
                    <?php 
                    for($i=0;$i<3;$i++){
                    ?>
                    <div class="col-md-4">
                      <div class="text-center mb-4">
                        <img class="rounded-circle mb-3" data-src="holder.js/140x140" alt="Image" width="140" height="140">
                        <h3>Heading</h3>
                        <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                        <a class="btn btn-secondary" href="<?php echo $prefix;?>" role="button">View details <i class="fal fa-angle-right"></i></a>
                      </div>
                    </div>
                    <?php 
                    } 
                    ?>
                  </div>
                </div>
              </section>
              <!--END: Features-->
            </section>

            <section class="section-main">
              <div class="container container-sm">
                <h3>Text - Image</h3>
                <p>This type of layout has been modified using <code>.order-first</code> and <code>.order-last</code> so that the image would always be the on the first order in mobile. Use the class if different ordering is needed between mobile &amp; desktop.</p>
                <p>&nbsp;</p>
              </div>

              <div class="container">
                <small class="d-block text-muted mb-2">Featurette (Standard)</small>
              </div>
              <!--START: Features-->
              <section class="section-main bg-light">
                <div class="container">
                  <div class="row row-30">
                    <div class="col-md-5 order-md-last">
                      <img class="d-block w-100 mb-3" src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg" alt="Image">
                    </div>
                    <div class="col-md-7 d-flex flex-column align-items-start justify-content-center order-md-first">
                      <h3>Heading</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <a href="" class="d-inline-block btn btn-secondary">Go Somewhere <i class="fal fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>
              </section>
              <!--END: Features-->
            </section>

            <section class="section-main">
              <div class="container container-sm">
                <h3>Text - Image (Full)</h3>
                <p>To be able to position the background to left / right with full width, use <code>.bg-feature</code> width additional <code>-left</code> / <code>-right</code>. And make sure to add <code>.position-relative</code> to the container. For specific positioning, change the <code>left</code> attribute using inline style from 1 to 100.</p>
              </div>

              <div class="container mt-5">
                <small class="d-block text-muted mb-2">Featurette (Full Width)</small>
              </div>
              <!--START: Features-->
              <section class="bg-light position-relative">
                <div class="bg-feature bg-feature-right" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-light-1.jpg) no-repeat center; background-size: cover;"></div>
                <div class="container">
                  <div class="row row-30">
                    <div class="col-md-6 d-flex flex-column align-items-start justify-content-center py-main">
                      <h3>Heading</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <a href="" class="d-inline-block btn btn-secondary">Go Somewhere <i class="fal fa-angle-right"></i></a>
                    </div>
                  </div>
                </div>
              </section>
              <!--END: Features-->
            </section>

            <section class="section-main">
              <div class="container container-sm">
                <h3>Text - Image (Bottom)</h3>
                <p>To feature a phone with screenshot on the image, it is recommended to use this basic feature layout, and style the <code>img</code> with specific width for each media query on the <code>main.css</code>. The sample below only serves as an example.</p>
              </div>

              <div class="container mt-5">
                <small class="d-block text-muted mb-2">Featurette (Full Width)</small>
              </div>
              <!--START: Features-->
              <section class="bg-light">
                <div class="container">
                  <div class="row row-30">
                    <div class="col-md-6 d-flex flex-column align-items-start justify-content-center py-main order-md-first">
                      <h3>Heading</h3>
                      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna. Ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
                      <a href="" class="d-inline-block btn btn-secondary">Go Somewhere <i class="fal fa-angle-right"></i></a>
                    </div>
                    <div class="col-md-5 d-flex align-items-end justify-content-center order-md-first">
                      <img class="d-block" src="<?php echo $prefix;?>assets/img/sample/img_phone-dark-half.png" alt="Image" width="70%">
                    </div>
                  </div>
                </div>
              </section>
              <!--END: Features-->
            </section>

            <section class="section-main">
              <div class="container container-sm">
                <h3>Text - Image (Background) - CTA</h3>
                <p>To feature a phone with screenshot on the image, it is recommended to use this basic feature layout, and style the <code>img</code> with specific width for each media query on the <code>main.css</code>. The sample below only serves as an example.</p>
              </div>

              <div class="container mt-5">
                <small class="d-block text-muted mb-2">Featurette (Full Width)</small>
              </div>
              <!--START: Features-->
              <section class="bg-light py-main" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)) ,url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                <div class="container">
                  <div class="row row-30">
                    <div class="col-md-6 text-white">
                      <h3 class="mb-4">Take the First Step</h3>
                      <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="col-md-6 d-flex align-items-end justify-content-end">
                      <a href="register" class="btn btn-lg btn-light">Get Started</a>
                    </div>
                  </div>
                </div>
              </section>
              <!--END: Features-->
            </section>
        
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
