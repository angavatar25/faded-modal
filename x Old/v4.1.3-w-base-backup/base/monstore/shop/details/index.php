<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body>
<!-- <div class="loader-wrapper loader-light">
      <div class="loader"></div>
    </div> -->

    <?php include($prefix."base/monstore/include/navbar.php"); ?>
    
    <section class="pt-3 pt-md-5">
      <div class="container">
        <div class="row row-15">
          <div class="col-md-7">
            <div id="carouselProductImgDetail" class="carousel carousel-thumb slide" data-ride="carousel">
              <div class="row">
                <div class="col-md-2 d-none d-md-block">
                  <ol class="carousel-indicators carousel-indicators-thumb">
                    <li class="active" data-slide-to="0" data-target="#carouselProductImgDetail">
                      <img src="<?php echo $prefix;?>assets/img/monstore/product-1-front.jpg" class="d-block w-100" alt="Thumbnail">
                    </li>
                    <li data-slide-to="1" data-target="#carouselProductImgDetail">
                      <img src="<?php echo $prefix;?>assets/img/monstore/product-1-side.jpg" class="d-block w-100" alt="Thumbnail">
                    </li>
                    <li data-slide-to="2" data-target="#carouselProductImgDetail">
                      <img src="<?php echo $prefix;?>assets/img/monstore/product-1-back.jpg" class="d-block w-100" alt="Thumbnail">
                    </li>
                    <li data-slide-to="3" data-target="#carouselProductImgDetail">
                      <img src="<?php echo $prefix;?>assets/img/monstore/product-1-full.jpg" class="d-block w-100" alt="Thumbnail">
                    </li>
                  </ol>
                </div>
                <div class="col-md-10">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/monstore/product-1-front.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/monstore/product-1-side.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/monstore/product-1-back.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="<?php echo $prefix;?>assets/img/monstore/product-1-full.jpg" alt="Third slide">
                    </div>
                  </div>
                  <a class="carousel-control-prev text-dark" href="#carouselProductImgDetail" role="button" data-slide="prev">
                    <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next text-dark" href="#carouselProductImgDetail" role="button" data-slide="next">
                    <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                    <span class="sr-only">Next</span>
                  </a>
                  <ol class="carousel-indicators carousel-indicators-circle d-md-none" style="bottom: -35px">
                    <li data-target="#carouselProductImgDetail" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselProductImgDetail" data-slide-to="1"></li>
                    <li data-target="#carouselProductImgDetail" data-slide-to="2"></li>
                    <li data-target="#carouselProductImgDetail" data-slide-to="3"></li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="mb-3">
              <span class="badge badge-danger text-uppercase d-inline-block mb-2">Sale</span>
              <h2>Mischief Basic Tee</h2>
              <p>Rp100.000</p>
            </div>
            <form>
              <div class="form-group">
                <label>Color</label>
                <div class="form-group">
                  <select class="custom-select">
                    <option value="1">Black</option>
                    <option value="2">Red</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="d-block mb-1">Size</label>
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
              <button class="btn btn-primary btn-block" type="submit">Add to Bag</button>
            </form>
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
