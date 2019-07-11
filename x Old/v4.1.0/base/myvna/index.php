<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>
<!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."base/myvna/include/navbar.php"); ?>

    <section class="py-main">
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>No.</th>
              <th>Product Name</th>
              <th>Category</th>
              <th>Collection</th>
              <th>Collection</th>
            </tr>
          </thead>
        </table>
      </div>
    </section>

    <?php include($prefix."base/myvna/include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');
    </script>

  </body>
</html>
