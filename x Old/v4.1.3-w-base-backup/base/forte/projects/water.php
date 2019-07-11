<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>assets/css/base/forte.css">
  </head>
  <body>
    <?php include($prefix."base/forte/include/navbar.php"); ?>

	<section class="section-main section-portfolio">

		<div class="owl-carousel-container">

			<div class="owl-carousel owl-theme" style="">
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_1.jpg" class="img-fluid"/>
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_2.jpg" class="img-fluid" />
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			    
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_3.jpg" class="img-fluid"/>
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_4.jpg" class="img-fluid"/>
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_1.jpg" class="img-fluid"/>
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			    <div class="item">
			    	<img src="<?php echo $prefix;?>base/forte/assets/img/portfolio_2.jpg" class="img-fluid"/>
			    	<p class="mt-3">Integer non nisl at mauris faucibus pharetra eu eu mi. Sed vitae feugiat purus. Vivamus dignissim orci eros, nec aliquet odio varius non.</p>
			    </div>
			</div>
		</div>

	</section>


		<div class="carousel-indi">
			<div class="left-carousel">
			</div>

			<div class="right-carousel">
			</div>
		</div>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="<?php echo $prefix;?>assets/js/forte.js"></script>

    <script>
    	/*
	  	$('.owl-carousel').owlCarousel({
	  		stagePadding: 50,
		    loop:true,
		    margin:10,
		    nav:true,
	    	responsive:{
		        0:{
		            items:1
		        },
		        768:{
		        	stagePadding: 150,
		            items:2,
		            margin: 30
	        	}
	    	}
	    });

	  	$('#prev-carousel').click(function(){
	  		$('.owl-prev').click();
	  	});

	  	$('#next-carousel').click(function(){
	  		$('.owl-next').click();
	  	}); */

    </script>

  </body>
</html>