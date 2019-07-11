<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $prefix;?>assets/css/base/forte.css">
  </head>
  <body>
    <?php include($prefix."base/forte/include/navbar.php"); ?>

    <section class="section-main section-read-me">
      <div class="container container-sm">

        <h4 class="d-block mb-5">Forte is a powerful way to display your portfolio, putting your best shots up front, then allowing visitors to dig further into the projects they want to see.</h4>

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Site</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Background</strong> - select the background color for the site.</p>
            <p><strong>Background Image</strong> - apply a background image for the site.</p>
            <p><strong>Content Width</strong> - set the width of the content area on pages and blogs.</p>
          </div>
          <div class="col-md-4">
            <p><strong>Content Alignment</strong> - control the alignment of the page content area.</p>
            <p><strong>Content Title/Description</strong> - show or hide the page title and description.</p>
          </div>
        </div><!-- .row -->

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Header</strong></p>
          </div>
          <div class="col-md-4">
            <p>Control the typeface and other font properties for the <strong>Site Title, Tagline,</strong> and <strong>Navigation</strong>.</p>
          </div>
          <div class="col-md-4">
            <p><strong>Hide Folder Symbol</strong> - disables the '+' icon that precedes any folder link in the main navigation.</p> 
          </div>
        </div><!-- .row -->

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Index</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Index Transition</strong> - determines the effect used to transition from one slide to the next.</p>
            <p><strong>Hide Arrows</strong> - turns off gallery navigation arrows.</p>
            <p><strong>Hide Folder Title</strong> - removes the folder title from the project navigation display.</p>
          </div>
          <div class="col-md-4">
            <p><strong>Auto Play</strong> - enables transitions to begin automatically without the user clicking an arrow.</p> 
            <p><strong>Auto Play Delay</strong> - determines the timing between each slide transition.</p>
          </div>
        </div><!-- .row -->


        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Gallery</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Lightbox Transition</strong> - determines the effect used to transition from one slide to the next in the gallery view.</p>
          </div>
        </div><!-- .row -->

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Blog</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Borders Color</strong> - set the color used on site borders.</p>
            <p><strong>Show Author Name</strong> - include the author name in the article entry title area next to the date.</p> 
          </div>
          <div class="col-md-4">
            <p><strong>Sidebar Position</strong> - determines the position / display of the blog sidebar.</p>
            <p><strong>Sidebar Width</strong> - sets the width used for the blog sidebar.</p>
          </div>
        </div><!-- .row -->

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Product Styles</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Product Background Color</strong> - sets the color behind the product image.</p>
            <p><strong>Product Overlay Color</strong> - sets the color of the overlay when product list titles are set to 'overlay.'</p>
            <p><strong>Products Per Row</strong> - determines the number of products shown per line on the product list.</p>
            <p><strong>Product List Titles</strong> - controls the position of the product title on the product list.</p>
            <p><strong>Product List Alignment</strong> - sets the text alignment of the product title on the product list.</p>
            <p><strong>Product Item Size</strong> - select an image ratio for the product photo on the product list.</p>
          </div>
          <div class="col-md-4">
            <p><strong>Product Image Auto Crop</strong> - determines whether product images fill the image area or fit within.</p>
            <p><strong>Product Gallery Size</strong> - select an image ratio for the product gallery on the product item page.</p>
            <p><strong>Product Gallery Auto Crop</strong> - determines whether product images fill the gallery area or fit within.</p>
            <p><strong>Show Product Price</strong> - shows the price on the product list page when enabled.</p>
            <p><strong>Show Product Item Nav</strong> - shows the 'back to shop' link on the product item page.</p>
          </div>
        </div><!-- .row -->

        <div class="row row-n">
          <div class="col-md-4">
            <p><strong>Event Styles</strong></p>
          </div>
          <div class="col-md-4">
            <p><strong>Event Time Format</strong> - toggle between 24 hour or AM/PM for event times.</p>
            <p><strong>Event Icons</strong> - enable icons on the address and event time display.</p>
            <p><strong>Event Thumbnails</strong> - show an image thumbnail in list view.</p>
            <p><strong>Event Thumbnail Size</strong> - controls the size (ratio width:height) of the event thumbnail image.</p>
            <p><strong>Event Date Label</strong> - enable date overlay on top of event thumbnail.</p>
            <p><strong>Event Date Label Time</strong> - include the time of the event with the date overlay.</p>
            <p>Event Excerpts - show optional excerpt text of events on the list view when present.</p>
          </div>

        </div>

      </div><!-- .container -->
    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
    <script src="<?php echo $prefix;?>assets/js/forte.js"></script>

  </body>
</html>