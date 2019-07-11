<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="app header-fixed sidebar-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar-admin.php"); ?>

    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            <section class="at-heading">
              <div class="container container-sm">
                <h1>Animated Button</h1>
                <p class="lead">Animated button when hover or clicked</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Button Learn More</h3>
                  <p>Use this <code>.btn-animated .learn-more</code> for this animation.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container container-sm">
                  <a href="#" class="btn-effect learn-more animated fadeInDown delayp1">
                    <div class="circle">
                      <span class="icon arrow"></span>
                    </div>
                    <p class="button-text">Learn More</p>
                  </a>
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading animated fadeInDown delayp2">
                <div class="container container-sm">
                  <h3>Button with shadow</h3>
                  <p>Use this <code>.btn-w-shadow</code> for this animation.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container container-sm">
                  <a href="#" class="btn btn-primary btn-w-shadow animated fadeInDown delayp1">Get in Touch</a>
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Progress Button</h3>
                  <p>Use this <code>.btn-submit</code> for this animation.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container container-sm">
                  <button class="btn btn-primary btn-submit btn-block" type="submit">
                    <i class="fa fa-circle-notch fa-spin" style="color: #fff !important;"></i>
                    <span>Submit</span>
                  </button>
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>

      $('.fa-circle-notch').hide();
      $('.btn-submit').click(function(){
        $('.fa-circle-notch').show();
        $('.btn-submit').removeClass('btn-primary').addClass("btn-secondary");


        setTimeout(function(){ 
          $('.btn-submit').html("<i class='fa fa-check'></i> Message sent!");
          $('.btn-submit').removeClass('btn-secondary').addClass('btn-primary');
        }, 2500);
      });
      //button progress 1
      // $('#btnSubmit1').click(function(e){
      //   $('.fa-circle-notch').show();
      //   $(this).find('span').hide();

      //   setTimeout(function(){ 
      //     $('#btnSubmit1').html("<i class='fa fa-check'></i> Message sent!");
      //     $('#btnSubmit1').removeClass('btn-primary').addClass('btn-primary');
      //   }, 1000);

      //   e.preventDefault();
      // });

      //button progress 2
      // $('.btnprogress2').find('.fa-check-circle').hide();
      // $('#btnSubmit2').click(function(){
      //   var tries = $('.btnprogress2').find('.fa-check-circle');
      //   $('.inner').addClass('active');
      //   setTimeout(function(){
      //     tries.show().css('transition','0.2s');
      //   }, 3500);
      //   setTimeout(function(){
      //     tries.hide();
      //     $('.inner').removeClass('active');
      //   }, 4500);
      
      // });

      //button progress 3
      $('.fa-check-circle').hide();
      $('#btnSubmit3').click(function(){
        $('.inner3').addClass('active');
        setTimeout(function(){
          $('.fa-check-circle').show().css('transition','0.2s');
        }, 3500);
        setTimeout(function(){
          $('.fa-check-circle').hide();
          $('.inner3').removeClass('active');
        }, 4500);
      });
    </script>

  </body>
</html>
