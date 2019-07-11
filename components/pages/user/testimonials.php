<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
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
                  <h1>Miscellaneous</h1>
                  <p class="lead mb-6 ">Dedicated to the components that haven't found their place, yet.</p>
                </div>

                <h3>Testimonials</h3>
                <p>Type of layout which as the name implies works for testimonials which usually in carousel.</p>
                <p>&nbsp;</p>
              </div>
              <!--START: Testimonial-->
              <div class="cover cover-carousel bg-light">
                <div id="carouselCover" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li class="bg-dark" data-target="#carouselCover" data-slide-to="0" class="active"></li>
                    <li class="bg-dark" data-target="#carouselCover" data-slide-to="1"></li>
                    <li class="bg-dark" data-target="#carouselCover" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <div class="d-flex flex-column justify-content-center mx-auto text-center w-75 h-100">
                        <div class="">
                          <img src="<?php echo $prefix;?>assets/img/sample/bg_square-dark-1.jpg" class="rounded-circle mb-2" alt="Image" width="100">
                          <h5>John Doe</h5>
                          <small class="text-muted">23 years</small>
                          <p class="mt-3">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia expedita saepe vel veritatis nisi totam, a, accusamus, labore, ex soluta obcaecati! Dolor fugiat minima suscipit, impedit vitae soluta, voluptas possimus."</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex flex-column justify-content-center mx-auto text-center w-75 h-100">
                        <div class="">
                          <img src="<?php echo $prefix;?>assets/img/sample/bg_square-dark-1.jpg" class="rounded-circle mb-2" alt="Image" width="100">
                          <h5>John Doe</h5>
                          <small class="text-muted">23 years</small>
                          <p class="mt-3">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia expedita saepe vel veritatis nisi totam, a, accusamus, labore, ex soluta obcaecati! Dolor fugiat minima suscipit, impedit vitae soluta, voluptas possimus."</p>
                        </div>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <div class="d-flex flex-column justify-content-center mx-auto text-center w-75 h-100">
                        <div class="">
                          <img src="<?php echo $prefix;?>assets/img/sample/bg_square-dark-1.jpg" class="rounded-circle mb-2" alt="Image" width="100">
                          <h5>John Doe</h5>
                          <small class="text-muted">23 years</small>
                          <p class="mt-3">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia expedita saepe vel veritatis nisi totam, a, accusamus, labore, ex soluta obcaecati! Dolor fugiat minima suscipit, impedit vitae soluta, voluptas possimus."</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev text-dark" href="#carouselCover" role="button" data-slide="prev">
                    <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next text-dark" href="#carouselCover" role="button" data-slide="next">
                    <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
                  <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
                </a>
              </div>
              <!--END: Testimonial-->
            </section>
        
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
