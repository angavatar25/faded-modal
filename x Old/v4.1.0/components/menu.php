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

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Menu</h1>
          <p class="lead mb-6">Menu component is commonly used for food &amp; beverages menu although similiar layout can be used for other purpose.</p>
        </div>

        <h3>General</h3>
        <p>Use <code>.menu</code> as a starting point for menu type of layout. The layout mostly uses <code>.card</code> component with <code>.card-boxless</code> class.</p>
        <p>&nbsp;</p>
      </div>

      <section class="section-main bg-light">
        <div class="container">

          <!--Start: Cover - Static-->
          <div class="menu">
            <h3 class="menu-title text-center mb-4">Appetizer</h3>
            <div class="menu-content">
              <div class="row row-20">
                <?php 
                for($i=0;$i<5;$i++){
                ?>
                <div class="col-sm-6 col-md-4">
                  <div class="card card-boxless mb-2">
                    <div class="card-body">
                      <div class="float-right">
                        <span>$</span>
                        <span>13</span>
                      </div>
                      <h5 class="card-title">Salted Chicken Egg</h5>
                      <p class="card-text">Lorem ipsum dolor siamet</p>
                    </div>
                  </div>
                </div>
                <?php 
                } 
                ?>
              </div>
            </div>
          </div>

        </div>
      </section>

    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
