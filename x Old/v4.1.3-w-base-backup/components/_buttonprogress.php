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

    <section class="py-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Button Progress</h1>
          <!-- <p class="lead mb-6">Cards component can be used for multiple things. Some common examples are products &amp; information container.</p> -->
        </div>
      </div>

      <section class="py-main bg-light">
        <div class="container container-sm">

          <button class="btn btn-primary" id="btnSubmit" type="submit">
            <i class="fa fa-circle-notch fa-spin"></i>
            <span>Submit</span>
          </button>

          <div class="wrapper">
            <section>
              <h2>fill horizontal</h2>
              <button class="progress-button" data-style="fill" data-horizontal>Submit</button>
            </section>

            <section>
              <h2>shrink horizontal</h2>
              <button class="progress-button" data-style="shrink" data-horizontal>Submit</button>
            </section>

            <section>
              <h2>slide-down <br/>horizontal</h2>
              <button class="progress-button" data-style="slide-down" data-horizontal>Submit</button>
            </section>
          </div>

          <section>
            <h2>shrink vertical</h2>
            <button class="progress-button" data-style="shrink" data-vertical>Submit</button>
          </section>

          <button class="progress-button" data-style="shrink" data-horizontal>Submit</button>

        </div>
      </section>

    </section>

    <?php include($prefix."include/script.php"); ?>
    <!-- <script src="<?php echo $prefix;?>assets/js/buttonprogress/classie.js"></script>
    <script src="<?php echo $prefix;?>assets/js/buttonprogress/progressButton.js"></script> -->
    <!-- <script src="js/classie.js"></script>
    <script src="js/progressButton.js"></script> -->

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

    <script>
      [].slice.call( document.querySelectorAll( 'button.progress-button' ) ).forEach( function( bttn ) {
        new ProgressButton( bttn, {
          callback : function( instance ) {
            var progress = 0,
              interval = setInterval( function() {
                progress = Math.min( progress + Math.random() * 0.1, 1 );
                instance._setProgress( progress );

                if( progress === 1 ) {
                  instance._stop(1);
                  clearInterval( interval );
                }
              }, 200 );
          }
        } );
      } );


      $('.fa-circle-notch').hide();

      $('#btnSubmit').click(function(e){
        $('.fa-circle-notch').show();
        $(this).find('span').hide();

        setTimeout(function(){ 
          $('#btnSubmit').html("<i class='fa fa-check'></i> Message sent!");
          $('#btnSubmit').removeClass('btn-primary').addClass('btn-green');
        }, 1000);

        e.preventDefault();
      });
    </script>

  </body>
</html>