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

            <section class="at-heading">
              <div class="container container-sm">
                <h1>Footer</h1>
                <p class="lead">As the name implies, footer is usually used at the end of the page.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>General</h3>
                  <p>Use <code>footer</code> for footer. Most of the layout uses Bootstrap 4 base classes. Add specific class using Boostrap 4 class / specific CSS as needed.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Footer A-->
                  <footer class="bg-light py-5">
                    <div class="container">
                      <div class="row">
                        <div class="col-12 col-md">
                          <img class="mb-3" src="<?php echo $prefix;?>assets/img/brand/logo_anti-dark.svg" alt="Logo" height="36">
                          <small class="d-block mb-3 text-muted">© 2018</small>
                        </div>
                        <div class="col-6 col-md">
                          <h5>Features</h5>
                          <ul class="list-unstyled text-small">
                            <li><a href="#">Cool stuff</a></li>
                            <li><a href="#">Random feature</a></li>
                            <li><a href="#">Team feature</a></li>
                            <li><a href="#">Stuff for developers</a></li>
                            <li><a href="#">Another one</a></li>
                            <li><a href="#">Last time</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md">
                          <h5>Resources</h5>
                          <ul class="list-unstyled text-small">
                            <li><a href="#">Resource</a></li>
                            <li><a href="#">Resource name</a></li>
                            <li><a href="#">Another resource</a></li>
                            <li><a href="#">Final resource</a></li>
                          </ul>
                        </div>
                        <div class="col-6 col-md">
                          <h5>About</h5>
                          <ul class="list-unstyled text-small">
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Locations</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <!--END: Footer A-->
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Footer B-->
                  <footer class="bg-light py-5">
                    <div class="container">
                      <div class="row">
                        <div class="col-12 col-sm-6 order-sm-2">
                          <div class="text-center text-sm-right">
                            <a href="#" class="text-dark d-inline-block">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="#" class="text-dark d-inline-block">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="#" class="text-dark d-inline-block">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          </div>
                        </div>
                        <div class="col-12 col-sm-6 order-sm-1">
                          <small class="d-block mt-3 text-muted text-center text-sm-left">Designed by <a href="http://www.antikode.com" class="text-dark" target="_blank">Antikode</a></small>
                        </div>
                      </div>
                    </div>
                  </footer>
                  <!--END: Footer B-->
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Footer B-->
                  <footer>
                    <div class="footer-top bg-light py-4">
                      <div class="container">
                        <div class="text-center">
                          <a href="#" class="text-dark d-inline-block mx-1">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="#" class="text-dark d-inline-block mx-1">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                          <a href="#" class="text-dark d-inline-block mx-1">
                            <span class="fa-stack">
                              <i class="fas fa-circle fa-stack-2x"></i>
                              <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                            </span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="footer-bottom bg-gray-50 py-4">
                      <div class="container text-center">
                        <div class="d-block">
                          <small class="mx-2 text-uppercase-custom">123 Broadyway</small>
                          <small class="mx-2 text-uppercase-custom">(021) 12345678</small>
                          <small class="mx-2 text-uppercase-custom"><a href="" class="text-dark" mailto="info@antikode.com">info@antikode.com</a></small>
                        </div>
                        <small class="d-block mt-3 text-muted text-center">Designed by <a href="http://www.antikode.com" class="text-muted" target="_blank">Antikode</a></small>
                      </div>
                    </div>
                  </footer>
                  <!--END: Footer B-->
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
