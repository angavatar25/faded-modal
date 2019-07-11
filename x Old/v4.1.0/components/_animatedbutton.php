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
        <h1>Animated Button</h1>
        <p class="lead">Animated button when hover or clicked</p>
      </div>
    </section>
      
    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Hover Animated Button</h3>
          <p>Use this <code>.animated-button</code> for using animated button.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container container-md">
          <div class="row">
            <div class="col-sm-4">
              <p><code>.btn-animated1</code></p>
              <a href="#" class="btn animated-button btn-animated1">Click Me!</a>

              <p class="mt-3"><code>.btn-animated2</code></p>
              <a href="#" class="btn animated-button btn-animated2">Click Me!</a>

              <p class="mt-3"><code>.btn-animated3</code></p>
              <a href="#" class="btn animated-button btn-animated3">Click Me!</a>
            </div>
            <div class="col-sm-4">
              <p><code>.btn-animated4</code></p>
              <a href="#" class="btn animated-button btn-animated4">Click Me!</a>

              <p class="mt-3"><code>.btn-animated5</code></p>
              <a href="#" class="btn animated-button btn-animated5">Click Me!</a>

              <p class="mt-3"><code>.btn-animated6</code></p>
              <a href="#" class="btn animated-button btn-animated6">
                <span>Click Me</span>
              </a>
            </div>
            <div class="col-sm-4">
              <p><code>.btn-animated7</code></p>
              <a href="#" class="btn animated-button btn-animated7">
                <div class="slider"></div>
                <span>Click Me!</span>
              </a>

              <p class="mt-3"><code>.btn-animated8</code></p>
              <a href="#" class="btn animated-button btn-animated8">Click Me!</a>

              <p class="mt-3"><code>.btn-animated9</code></p>
              <a href="#" class="btn animated-button btn-animated9">Click Me!</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Button Progress</h3>
          <p>Use this <code>.buttonprogess1</code> for using animated button.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container container-md">
          <div class="row">
            <div class="col-sm-6">
              <p><code>.btnprogress1</code></p>
              <div class="btnprogress1">
                <button class="btn btn-primary" id="btnSubmit1" type="submit">
                  <i class="fa fa-circle-notch fa-spin" style="color: #fff !important;"></i>
                  <span>Submit</span>
                </button>
              </div>

              <p class="mt-3"><code>.btnprogress2</code></p>
              <div class="btnprogress2">
                <button class="btn btn-secondary btn-progress" id="btnSubmit2" type="submit">
                  <div class="inner"></div>
                  <span class="fa fa-check-circle"></span>
                  <span>Submit</span>
                </button>
              </div>

              <p class="mt-3"><code>.btnprogress3</code></p>
              <div class="btnprogress3">
                <button class="btn btn-primary btn-progress" id="btnSubmit3" type="submit">
                  <div class="inner3"></div>
                  <span class="fa fa-check-circle"></span>
                  <span>Submit</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      //button progress 1
      $('.fa-circle-notch').hide();
      $('#btnSubmit1').click(function(e){
        $('.fa-circle-notch').show();
        $(this).find('span').hide();

        setTimeout(function(){ 
          $('#btnSubmit1').html("<i class='fa fa-check'></i> Message sent!");
          $('#btnSubmit1').removeClass('btn-primary').addClass('btn-primary');
        }, 1000);

        e.preventDefault();
      });

      //button progress 2
      $('.btnprogress2').find('.fa-check-circle').hide();
      $('#btnSubmit2').click(function(){
        var tries = $('.btnprogress2').find('.fa-check-circle');
        $('.inner').addClass('active');
        setTimeout(function(){
          tries.show().css('transition','0.2s');
        }, 3500);
        setTimeout(function(){
          tries.hide();
          $('.inner').removeClass('active');
        }, 4500);
      
      });

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
