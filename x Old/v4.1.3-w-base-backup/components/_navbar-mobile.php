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

    <?php include($prefix."include/navbar.php"); ?>

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

    <?php include($prefix."include/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

  </body>
</html>
