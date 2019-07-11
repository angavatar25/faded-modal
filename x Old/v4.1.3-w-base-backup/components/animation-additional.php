<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
<style>


</style>
  </head>
  <body>

    <?php include($prefix."include/navbar.php"); ?>

      <h2 class="animates tracking-in-contract-bck text-center">TRACKING IN CONTRACT BACK</h2>
      <h2 class="animates focus-in-expand text-center">FOCUS IN EXPAND</h2>
      <h2 class="animates focus-in-contract text-center">FOCUS IN CONTRACT</h2>

      <h1>IMAGES</h1>
      <div class="img-width-container" style="position: relative; overflow: hidden;">
        <div style="width: 100%; position: absolute; height: 100%; left: 0px;">
          <img src="<?php echo $prefix;?>assets/img/sample/cover-product-1.jpg" class="img-fluid" style=""/>
        </div>
      </div>


     <h1> Animation that needs JS, make sure u import animate.js </h1> 
      <div class="split-text">
        <h2>
          <span class="split-word">Word no 1</span>
          <span class="split-word">Word no 2</span>
          <span class="split-word">Word no 3</span>
        </h2>
      </div>


    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script>
      $('.img-width-container').addClass('img-width-container-full');
    </script>

  </body>
</html>
