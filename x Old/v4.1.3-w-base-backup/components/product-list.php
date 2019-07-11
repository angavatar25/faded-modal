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
        <h1>Product - List</h1>
        <p class="lead">Cards variation in the form of common product list.</p>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Product List</h3>
          <p>Use common component card structure and add <code>.product-list</code> on the parent <code>div</code>.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container">
          <!--START: Product List-->
          <div class="product-list">
            <div class="row">
              <?php 
              for($i=0;$i<3;$i++){
              ?>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>" class="card card-boxless link-opacity">
                  <div class="card-img-container">
                    <img src="<?php echo $prefix;?>assets/img/sample/product-1-front.jpg" class="img-fluid" alt="Product Image">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Mischief Basic T-Shirt</h5>
                    <p class="card-text">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>" class="card card-boxless link-opacity">
                  <div class="card-img-container">
                    <img src="<?php echo $prefix;?>assets/img/sample/product-2-front.jpg" class="img-fluid" alt="Product Image">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Temple Tit Long Sleeve T-Shirt</h5>
                    <p class="card-text">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>" class="card card-boxless link-opacity">
                  <div class="card-img-container">
                    <img src="<?php echo $prefix;?>assets/img/sample/product-3-front.jpg" class="img-fluid" alt="Product Image">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Reverse Cloud S/S T-Shirt</h5>
                    <p class="card-text">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>" class="card card-boxless link-opacity">
                  <div class="card-img-container">
                    <img src="<?php echo $prefix;?>assets/img/sample/product-4-front.jpg" class="img-fluid" alt="Product Image">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title">Snake Silk J One Sleeve T-Shirt</h5>
                    <p class="card-text">Rp200.000</p>
                  </div>
                </a>
              </div>
              <?php 
              } 
              ?>
            </div>
          </div>
          <!--END: Product List-->
        </div>
      </div>
    </section>

    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
