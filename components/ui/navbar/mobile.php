<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
    <style>
      .navbar-two-layers .navbar-toggler {
        position: absolute;
        z-index: 1100;
        top: 1rem;
      }
      .navbar-two-layers .navbar-toggler .icon-bar {
        display: block;
        width: 22px;
        height: 1px;
        background-color: #333;
        border-radius: 1px;
      }
      @media (max-width: 767px) {
        .navbar-two-layers .icon-bar {
          -webkit-transform-origin: 22px;
          -moz-transform-origin: 22px;
          -ms-transform-origin: 22px;
          transform-origin: 22px;
          -webkit-transition: -webkit-transform .2s;
          -moz-transition: -moz-transform .2s;
          -o-transition: -o-transform .2s;
          transition: transform .2s;
        }
        .navbar-two-layers .icon-bar-2 {
          margin-top: 7px;
          margin-bottom: 7px;
        }
        .navbar-two-layers .icon-bar-1.animate {
          -webkit-transform: rotate(-45deg);
          -ms-transform: rotate(-45deg);
          -o-transform: rotate(-45deg);
          transform: rotate(-45deg);}
        .navbar-two-layers .icon-bar-2.animate {
          opacity: 0 !important;
      }
        .navbar-two-layers .icon-bar-3.animate {
          -webkit-transform: rotate(45deg);
          -ms-transform: rotate(45deg);
          -o-transform: rotate(45deg);
          transform: rotate(45deg);} 

        .navbar-two-layers .navbar-collapse {
          position: fixed;
          top: 0;
          right: 0;
          z-index: 1;
          width: 100%; 
          min-height: 100%;
          overflow-y: scroll;
          background: #fff;
        }

        a.nav-link {
          font-size: 16px;
          text-align: center;
        }

        a.nav-link:hover {
          background-color: #f5f5f5;
          font-weight: bold;
        }
      }

      @media (max-width: 768px) {
        .navbar-toggleable-sm {
          -webkit-flex-direction: column;  
          -ms-flex-direction: column;
          flex-direction: column; 
        }
        .navbar-toggleable-sm .navbar-collapse {
          -webkit-box-pack: center;
          -webkit-justify-content: center;
          -ms-flex-pack: center;
          justify-content: center;
        }
      }
    </style>
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
                <h1>Navbar - Mobile</h1>
                <p class="lead">Navbar variations for mobile (commonly XS, SM). For navbar on desktop version, see <a href="<?php echo $prefix;?>components/_navbar-desktop.php">Navbar - Desktop</a> compontents.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Navbar Collapse Basic</h3>
                  <p>Use this navbar for navbar collapse with default position. This is Bootstrap's default collapse mobile menu.</p>
                  <div class="">
                    <span class="badge badge-pill badge-warning">Mobile Only</span>
                    <p>View the effect on breakpoint SM & MD.</p>
                  </div>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Navbar-->
                  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="container">
                      <a class="navbar-brand" href="<?php echo $prefix;?>">
                        <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContentBasic" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarContentBasic">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <!--END: Navbar-->
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Navbar Collapse Absolute</h3>
                  <p>Use this navbar for navbar collapse with absolute position. Just add <code>.navbar-collapse-absolute</code> on <code>.navbar-collapse</code> for this to take effect.</p>
                  <div class="">
                    <span class="badge badge-pill badge-warning">Mobile Only</span>
                    <p>View the effect on breakpoint SM & MD.</p>
                  </div>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Navbar-->
                  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="container">
                      <a class="navbar-brand" href="<?php echo $prefix;?>">
                        <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
                      </a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContentAbsolute" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <div class="collapse navbar-collapse navbar-collapse-absolute" id="navbarContentAbsolute">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
                  <!--END: Navbar-->
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Navbar Collapse Slide</h3>
                  <p>Use this navbar for navbar collapse with slide effect. Add <code>.navbar-collapse-slide</code> on <code>.navbar-collapse</code> and <code>.navbar-toggler-slide</code> on <code>.navbar-toggler</code>. Make sure to place <code>div</code> with class <code>.navbar-collapse-slide-bg</code> and the script for the effect to takes place.</p>
                  <div class="">
                    <span class="badge badge-pill badge-warning">Mobile Only</span>
                    <p>View the effect on breakpoint SM & MD.</p>
                  </div>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Navbar-->
                  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                    <div class="container">
                      <a class="navbar-brand" href="<?php echo $prefix;?>">
                        <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
                      </a>
                      <button class="navbar-toggler navbar-toggler-slide" type="button" data-toggle="collapse" data-target="#navbarContentSlide" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <div class="collapse navbar-collapse navbar-collapse-slide" id="navbarContentSlide">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Action</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="navbar-collapse-slide-bg" data-toggle="collapse" data-target="#navbarContentSlide" aria-controls="navbarContentSlide"></div>
                    </div>
                  </nav>

                  <script>
                    $('.navbar-toggler-slide').click(function(){
                      $('.navbar-collapse-slide-bg').fadeIn("slow");
                    });
                    $('.navbar-collapse-slide-bg').click(function(){
                      $(this).fadeOut("slow");
                    });
                  </script>

                  <!--END: Navbar-->
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

  </body>
</html>
