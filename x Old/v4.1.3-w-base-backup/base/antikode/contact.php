<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="antikode.css">
  </head>
  <body>

	<?php include($prefix."base/antikode/include/navbar.php"); ?>

	<!--Start: Cover - Static-->
  <div class="cover" style="background: linear-gradient(rgba(0,24,33,0),rgba(0,24,33,.9) 80%,rgba(0,24,33,1)), url(<?php echo $prefix;?>assets/img/antikode/common/cover-portfolio.jpg) no-repeat center; background-size: cover;">
    <div class="container container-sm">
      <div class="cover-content">
        <h1 class="animated fadeInUp delayp1">Contact</h1>
      </div>
    </div>
  </div>
  <!--End: Cover - Static-->

	<section class="py-main section-contact">
		<div class="container container-sm">
			<p class="animated fadeInLeft delayp2 contact-content-text">Contact us at <img src="<?php echo $prefix;?>assets/img/antikode/common/ic_whatsapp.png" alt="Whatsapp Icon"> <span>+62 812 98001919</span> (Whatsapp only) / email at <span><a href="mailto:info@antikode.com" target="_blank">info@antikode.com</a></span>,
           or just simply use the form below.</p>
      <div class="contact-box">
      	<form class="needs-validation" novalidate>
      		<div class="row">
      			<div class="col-md-12">
      				<div class="form-group">
			          <input type="text" id="name" class="form-control" placeholder="Name" name="contact_name" required>
			          <div class="invalid-feedback">
                  Please enter your name
                </div>
			        </div>
      			</div>

      			<div class="col-md-12">
      				<div class="form-group">
			          <input type="email" id="id-newsletter" class="form-control form-control-lg" placeholder="Email" name="contact_email">
			        </div>
      			</div>

      			<div class="col-md-12">
      				<div class="form-group">
			          <input type="text" id="subject" class="form-control form-control-lg" placeholder="Subject" name="contact_subject">
			        </div>
      			</div>

      			<div class="col-md-12">
      				<div class="form-group">
			          <textarea type="text" id="message" class="form-control form-control-lg" rows="3" placeholder="Message" name="contact_message" style="resize: none;"></textarea>
			        </div>
      			</div>

      			<div class="col-md-12">
		          <button class="btn btn-primary" type="submit">Submit form</button>
		        </div>
      		</div>
      	</form>

      </div>
		</div>
	</section>

  	<?php include($prefix."base/antikode/include/footer.php"); ?>
    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script src="<?php echo $prefix;?>assets/js/antikode.js"></script>

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
