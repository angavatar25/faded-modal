<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>
<!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."base/monstore/include/navbar.php"); ?>
    
    <section>
      <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-1-xs.jpg" class="d-block d-md-none w-100" alt="Image">
      <img src="<?php echo $prefix;?>assets/img/monstore/home-banner-long-1-md.jpg" class="d-none d-md-block w-100" alt="Image">
    </section>

    <!-- <section class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <select class="custom-select">
              <option value="">Sort</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="custom-select">
              <option value="">Product Type</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="custom-select">
              <option value="">Collection</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="custom-select">
              <option value="">Price Range</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
      </div>
    </section> -->

    <section class="pt-3 pt-md-5">
      <div class="container-fluid">
        <div class="row">

          <div class="col-md-3">
            <div class="mb-4">
              <h5>Category</h5>
              <ul class="list-unstyled">
                <li><a href="<?php echo $prefix;?>">Category 1</a></li>
                <li><a href="<?php echo $prefix;?>">Category 2</a></li>
                <li><a href="<?php echo $prefix;?>">Category 3</a></li>
              </ul>
            </div>
            <div class="mb-4">
              <a class="h5 d-block mb-0" href="#collapse1" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse1">Gender</a>
              <ul class="list-unstyled collapse show" id="collapse1">
                <li class="mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox1">
                    <label class="custom-control-label" for="checkbox1">Men</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox2">
                    <label class="custom-control-label" for="checkbox2">Women</label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="mb-4">
              <a class="h5 d-block mb-0" href="#collapse2" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse2">Price</a>
              <ul class="list-unstyled collapse show" id="collapse2">
                <li class="mt-2">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox3">
                    <label class="custom-control-label" for="checkbox3">Rp100.000 or below</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox4">
                    <label class="custom-control-label" for="checkbox4">Rp101.000 - Rp200.000</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox5">
                    <label class="custom-control-label" for="checkbox5">Rp200.000 - Rp400.000</label>
                  </div>
                </li>
                <li>
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="checkbox6">
                    <label class="custom-control-label" for="checkbox6">Rp401.000 or above</label>
                  </div>
                </li>
              </ul>
            </div>
            <div class="mb-4">
              <a class="h5 d-block mb-0" href="#collapse3" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse3">Size</a>
              <div class="collapse show" id="collapse3">
                <div class="mb-3 mt-2">
                  <p class="d-block mb-1">Clothing</p>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox1">
                    <label class="custom-control-label" for="checkboxBox1">XS</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox2">
                    <label class="custom-control-label" for="checkboxBox2">S</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox3">
                    <label class="custom-control-label" for="checkboxBox3">M</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox4">
                    <label class="custom-control-label" for="checkboxBox4">L</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox5">
                    <label class="custom-control-label" for="checkboxBox5">XL</label>
                  </div>
                </div>
                <div class="mb-0">
                  <p class="d-block mb-1">Shoes</p>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox6">
                    <label class="custom-control-label" for="checkboxBox6">39</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox7">
                    <label class="custom-control-label" for="checkboxBox7">40</label>
                  </div>
                  <div class="custom-control custom-checkbox checkbox-box">
                    <input type="checkbox" class="custom-control-input" id="checkboxBox8">
                    <label class="custom-control-label" for="checkboxBox8">41</label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-9">
            <div class="row row-5">
              <?php 
              for($i=0;$i<6;$i++){
              ?>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>base/monstore/shop/details" class="card card-boxless link-opacity mb-4">
                  <img class="card-img-top" src="<?php echo $prefix;?>assets/img/monstore/product-1-front.jpg" alt="Card image cap">
                  <div class="card-body pt-3">
                    <h5 class="card-title text-dark mb-1">Mischief Basic T-Shirt</h5>
                    <p class="card-text text-dark">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>base/monstore/shop/details" class="card card-boxless link-opacity mb-4">
                  <img class="card-img-top" src="<?php echo $prefix;?>assets/img/monstore/product-2-front.jpg" alt="Card image cap">
                  <div class="card-body pt-3">
                    <h5 class="card-title text-dark mb-1">Temple Tit Long Sleeve T-Shirt</h5>
                    <p class="card-text text-dark">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>base/monstore/shop/details" class="card card-boxless link-opacity mb-4">
                  <img class="card-img-top" src="<?php echo $prefix;?>assets/img/monstore/product-3-front.jpg" alt="Card image cap">
                  <div class="card-body pt-3">
                    <h5 class="card-title text-dark mb-1">Reverse Cloud S/S T-Shirt</h5>
                    <p class="card-text text-dark">Rp200.000</p>
                  </div>
                </a>
              </div>
              <div class="col-6 col-md-4">
                <a href="<?php echo $prefix;?>base/monstore/shop/details" class="card card-boxless link-opacity mb-4">
                  <img class="card-img-top" src="<?php echo $prefix;?>assets/img/monstore/product-4-front.jpg" alt="Card image cap">
                  <div class="card-body pt-3">
                    <h5 class="card-title text-dark mb-1">Snake Silk J One Sleeve T-Shirt</h5>
                    <p class="card-text text-dark">Rp200.000</p>
                  </div>
                </a>
              </div>
              <?php 
              } 
              ?>
            </div>
            <nav aria-label="Page navigation">
              <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">Next</a>
                </li>
              </ul>
            </nav>
          </div>

        </div>
      </div>
    </section>

    <?php include($prefix."base/monstore/include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Navbar active state
      $('#navHome').addClass('active');

      // Animation on load
      $(window).on("load", function() {
        $(".loader").fadeOut();
        $(".loader-wrapper").delay(500).fadeOut("slow");
        $(".anim-1").addClass("animated fadeInUp delayp4");
        $(".anim-2").addClass("animated fadeInup delayp6");
        $(".anim-3").addClass("animated fadeInUp delayp8");
      });
    </script>

  </body>
</html>
