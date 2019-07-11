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
        .navbar-two-layers .icon-bar-2.animate {opacity: 0 !important;}
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
        <h1>Navbar</h1>
        <p class="lead">Cover which usually used for the start of the page. In the form of static image / carousel with text and image background.</p>
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
          <!--START: Navbar Basic-->
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="<?php echo $prefix;?>">
                <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
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
          <!--END: Navbar Basic-->
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Navbar Basic w/ Absolute Collapse</h3>
          <p>Add <code>.navbar-absolute</code> and <code>.navbar-collapse-absolute</code> to change the behaviour of the navbar collapse on mobile from pushing to overlay. You have to specify the height of the navbar though.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--START: Navbar Basic-->
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand" href="<?php echo $prefix;?>">
                <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasicAbsolute" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse navbar-collapse-absolute" id="navbarBasicAbsolute">
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
          <!--END: Navbar Basic-->
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Navbar Centered</h3>
          <p>Use <code>.navbar-brand-center</code> to have brand in the center with menu on the sides. Separate the menu on the sides with <code>.navbar-nav-left</code> & <code>.navbar-nav-right</code>. Make sure the side menu width on is balanced.</p>
          <div class="">
            <span class="badge badge-pill badge-warning">On Mobile</span>
            <p>On mobile, for centered logo, change the order of the <code>.navbar-toggler</code> with class <code>.navbar-toggler-absolute.left</code> or <code>.navbar-toggler-absolute.right</code>, but then you must position the top manually on the CSS file.</p>
          </div>
        </div>
      </div>

      <div class="at-example">
        <div class="container-fluid">
          <!--START: Navbar Centered-->
          <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>">
                <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
              </a>
              <button class="navbar-toggler navbar-toggler-absolute left" type="button" data-toggle="collapse" data-target="#navbarCentered" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <div class="collapse navbar-collapse justify-content-center" id="navbarCentered">
                <ul class="navbar-nav navbar-nav-left">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                  </li>
                </ul>
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
          <h3>Navbar Two Layers</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique at quos totam exercitationem quod vel. Doloribus iure qui vitae reiciendis cum similique commodi nostrum, animi provident sequi a laborum repudiandae?</p>
        </div>
      </div>

      <div class="at-example">
        <div class="container-fluid">
          <!--START: Navbar Two Layers-->
          <nav class="navbar navbar-two-layers navbar-expand-md navbar-dark bg-dark">
            <div class="container">
              <!-- <div class="navbar-header"> -->
                <a class="navbar-brand navbar-brand-center" href="<?php echo $prefix;?>index.php">
                  <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-dark.svg" alt="Logo">
                </a>
                <button class="navbar-toggler navbar-toggler-absolute right" type="button" data-toggle="collapse" data-target="#navbarBasicC" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="icon-bar icon-bar-1"></span>
                  <span class="icon-bar icon-bar-2"></span>
                  <span class="icon-bar icon-bar-3"></span>
                </button>
              <!-- </div> -->

              <div class="collapse navbar-collapse justify-content-center" id="navbarBasicC">
                <ul class="navbar-nav" style="top: 3rem; position: relative;">
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
