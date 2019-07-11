<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
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
  <body>

    <?php include($prefix."include/navbar.php"); ?>

    <section class="at-heading">
      <div class="container container-sm">
        <h1>Navbar - Desktop</h1>
        <p class="lead">Navbar variations for desktop (commonly MD, LG, XL). For navbar on mobile version, see <a href="<?php echo $prefix;?>components/_navbar-mobile.php">Navbar - Mobile</a> compontents.</p>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Navbar Basic</h3>
          <p>Use this navbar for basic navbar layout navigation bar.</p>
          <div class="">
            <span class="badge badge-pill badge-warning">On Mobile</span>
            <p>On mobile, change the order of the logo / navbar toggler using <code>.order-first</code> &amp; <code>.order-last</code>.</p>
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
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasic" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarBasic">
                <ul class="navbar-nav mr-auto">
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
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
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
          <h3>Navbar Centered</h3>
          <p>Use <code>.navbar-collapse-centered</code> on <code>.navbar-collapse</code> to set centered navbar with brand in the middle and menu beside it on md up. Make sure to set the width of the brand on CSS.</p>
        </div>
      </div>

      <div class="at-example">
        <div class="container-fluid">
          <!--START: Navbar Centered-->
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand d-inline-block d-md-none" href="<?php echo $prefix;?>">
                <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCentered" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse navbar-collapse-centered" id="navbarCentered">
                <ul class="navbar-nav navbar-nav-left">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
                <a class="navbar-brand d-none d-md-inline-block" href="<?php echo $prefix;?>">
                  <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
                </a>
                <ul class="navbar-nav navbar-nav-right">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--END: Navbar Centered-->
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Navbar Stacked</h3>
          <p>Use <code>.navbar-collapse-two-layers</code> on <code>.navbar-collapse</code> to add classes that allows 2 layers to stack.</p>
        </div>
      </div>

      <div class="at-example">
        <div class="container-fluid">
          <!--START: Navbar Two Layers-->
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand d-inline-block d-md-none" href="<?php echo $prefix;?>index.php">
                <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarStacked" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse navbar-collapse-stacked" id="navbarStacked">
                <ul class="navbar-nav navbar-nav-top">
                  <a class="navbar-brand d-none d-md-inline-block" href="<?php echo $prefix;?>">
                    <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" class="img-fluid" alt="Logo">
                  </a>
                </ul>
                <ul class="navbar-nav navbar-nav-bottom">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
          <!--END: Navbar Two Layers-->
        </div>
      </div>
    </section>

    <?php include($prefix."include/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

  </body>
</html>
