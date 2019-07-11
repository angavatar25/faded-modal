<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="app header-fixed sidebar-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar-admin.php"); ?>
    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            <section class="at-heading">
              <div class="container container-md">
                <h1>Blog</h1>
                <p>As the name implies, these components are used for blog / news related layout.</p>
              </div> 
            </section>
            
            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-md">
                  <h3>Blog Index</h3>
                  <p>Use <code>.blog-index</code> for the specific class. The index page will mostly use <code>.card</code> class from Bootstrap 4 which you modified as preferred.</p>
                </div>
              </div>
              <div class="at-example mb-3">
                <div class="container-fluid">
                  <!--START: Blog - Index-->
                  <div class="row">
                    <?php 
                    for($i=0;$i<2;$i++){
                    ?>
                    <div class="col-md-6">
                      <div class="card mb-3">
                        <div class="row">
                          <div class="col-md-8 d-flex">
                            <div class="card-body d-flex flex-column align-items-start">
                              <small class="d-block text-muted mb-1">1 day ago</small>
                              <a href="<?php echo $prefix;?>" class="d-block text-dark mb-auto">
                                <h3 class="card-title mb-2">
                                  Featured post
                                </h3>
                                <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                              </a>
                              <a href="<?php echo $prefix;?>" class="mt-2">Continue reading <i class="fal fa-angle-right"></i></a>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <a href="<?php echo $prefix;?>" class="d-none d-md-block w-100" style="height: 250px; background: url(<?php echo $prefix;?>assets/img/sample/bg_trees.jpg); background-size: cover;">
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <?php 
                    } 
                    ?>
                  </div>
                  <!--END: Blog - Index-->
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Blog - Index-->
                  <div class="row">
                    <?php 
                    for($i=0;$i<3;$i++){
                    ?>
                    <div class="col-md-4">
                      <div class="card mb-3">
                        <a href="#">
                          <img class="card-img-top" src="<?php echo $prefix;?>assets/img/sample/bg_trees.jpg" alt="Card image cap">
                        </a>
                        <div class="card-body d-flex flex-column align-items-start h-md-250">
                          <small class="d-block text-muted mb-1">Nov 12</small>
                          <a href="" class="d-block text-dark mb-auto">
                            <h3 class="card-title mb-2">
                              Featured post
                            </h3>
                            <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                          </a>
                          <a href="#" class="mt-2">Continue reading <i class="fal fa-angle-right"></i></a>
                        </div>
                      </div>
                    </div>
                    <?php 
                    } 
                    ?>
                  </div>
                  <!--END: Blog - Index-->
                </div>
              </div>
            </section>

          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <

  </body>
</html>
