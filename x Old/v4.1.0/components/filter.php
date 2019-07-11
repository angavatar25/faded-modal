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
          <h1>Filter</h1>
          <p class="lead mb-6">Use this component for filter type which has different view on mobile (shown by clicking something) and on desktop (automatically shown without clicking anything).</p>
        </div>

        <h3>General</h3>
        <p>Full screen modal works well on mobile to give an illusion that the screen is changing to another page. Mostly used for filtering action.</p>
        <p>&nbsp;</p>
      </div>
      
      <div class="bg-light py-main" id="antiModalFull">
        <!-- <div class="container container-sm">
          <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalFull"><i class="fal fa-sliders-h"></i></button>
        </div> -->
        
        <!--END: Navbar Basic A-->
      </div>

    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
