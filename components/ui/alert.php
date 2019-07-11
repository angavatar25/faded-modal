<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <style>
      .alert.fixed-top {
        position: relative;
        z-index: 1;
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
                <h1>Alert Dismissible</h1>
                <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Alert Basic</h3>
                  <p>Use this for common alert which doesn't need to be sticky to the top.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Alert Static-->
                  <div class="alert alert-success" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                  </div>
                  <!--END: Alert Static-->
                </div>
              </div>
            </section>
              
            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Alert Dismissible</h3>
                  <p>Add <code>.alert-dismissible</code> for alert which can be dismissed.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Alert Static-->
                  <div class="alert alert-success alert-dismissible" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                  </div>
                  <!--END: Alert Static-->
                </div>
              </div>

              <div class="container container-sm mt-5">
                <p>Add <code>.fixed-top</code> for alert which needs to be sticky on top. It will automatically add full width & text align center in desktop version.</p>
              </div>
              
              <div class="at-example">
                <div class="container-fluid">
                  <!--START: Alert Fixed Top-->
                  <div class="alert fixed-top alert-success alert-dismissible animated fadeInDown delayp1">
                    <div class="container">
                      Thanks! We'll reply you as soon as possible.
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                  </div>
                  <!--END: Alert Fixed Top-->
                  <br>
                  <!--START: Alert Fixed Top-->
                  <div class="alert fixed-top alert-danger alert-dismissible animated fadeInDown delayp1">
                    <div class="container">
                      Something is wrong.
                    </div>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true"><i class="fal fa-times"></i></span>
                    </button>
                  </div>
                  <!--END: Alert Fixed Top-->
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
