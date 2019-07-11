<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>assets/css/base/forte.css">

  </head>
  <body>
    <?php include($prefix."base/forte/include/navbar.php"); ?>

    <div class="owl-carousel-container">

			<div class="owl-carousel owl-theme">
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_1.jpeg')no-repeat center; background-size: cover;">
			    <!--	<img src="" class="img-fluid"/> -->
			    </div>
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_2.jpeg')no-repeat center; background-size: cover">
			    	<!--<img src="" class="img-fluid" /> -->
			    </div>
			    
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_3.jpeg')no-repeat center;background-size: cover">
			    <!--	<img src="<?php echo $prefix;?>base/forte/assets/img/home_3.jpeg" class="img-fluid"/> -->
			    </div>
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_1.jpeg')no-repeat center;
			    background-size: cover">
			    	<!--<img src="<?php echo $prefix;?>base/forte/assets/img/home_1.jpeg" class="img-fluid"/> -->
			    </div>
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_2.jpeg')no-repeat center; background-size: cover">
			    	<!--<img src="<?php echo $prefix;?>base/forte/assets/img/home_2.jpg" class="img-fluid"/> -->
			    </div>
			    <div class="item" style="background: url('<?php echo $prefix;?>base/forte/assets/img/home_3.jpeg')no-repeat center;
			    background-size: cover">
			    	<!--<img src="<?php echo $prefix;?>base/forte/assets/img/home_3.jpg" class="img-fluid"/> -->
			    </div>
			</div>
	</div>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo $prefix;?>assets/js/forte.js"></script>

    <script>
    	$('.navbar').removeClass('navbar-light').addClass('navbar-dark');
	  	$('.owl-carousel').owlCarousel({
		    loop:true,
		    nav:true,
	    	responsive:{
		        0:{
		            items:1
		        }
	    	}
	    });
	</script>

  </body>
</html>