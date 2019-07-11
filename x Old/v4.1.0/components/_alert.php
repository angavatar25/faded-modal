<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
    <style>
      .alert-fixed-top {
        position: relative;
        z-index: 1;
      }
    </style>
    
  </head>
  <body>

    <?php include($prefix."include/navbar.php"); ?>

    <section class="at-heading">
      <div class="container container-sm">
        <h1>Alert</h1>
        <p class="lead">Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
      </div>
    </section>
      
    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Alert Fixed Top</h3>
          <p>Use this <code>.alert-fixed-top</code> for alert which needs to be sticky on top.</p>
        </div>
      </div>
      <div class="at-example">
        <!--START: Alert Fixed Top-->
        <div class="alert alert-fixed-top alert-success animated fadeInDown delayp1">
          <div class="container">
            Thanks! We'll reply you as soon as possible.
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
        </div>
        <!--END: Alert Fixed Top-->
        <p>&nbsp;</p>
        <!--START: Alert Fixed Top-->
        <div class="alert alert-fixed-top alert-danger animated fadeInDown delayp1">
          <div class="container">
            Something is wrong.
          </div>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
        </div>
        <!--END: Alert Fixed Top-->
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Alert Static</h3>
          <p>Use this for common alert which doesn't need to be sticky to the top.</p>
        </div>
      </div>
      <div class="container container-sm">
        <div class="at-example">
          <!--START: Alert Static-->
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button>
          </div>
          <!--END: Alert Static-->
        </div>
      </div>
    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
  </body>
</html>
