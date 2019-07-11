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

    <section class="section-main">
      <div class="container container-sm">
        <div class="heading">
          <h1>Blog</h1>
          <p class="lead mb-6">As the name implies, these components are used for blog / news related layout.</p>
        </div>

        <h3>Blog Index</h3>
        <p>Use <code>.blog-index</code> for the specific class. The index page will mostly use <code>.card</code> class from Bootstrap 4 which you modified as preferred.</p>
        <p>&nbsp;</p>
      </div>

      <div class="container">
        <small class="d-block text-muted mb-2">Blog Index (Horizontal Layout)</small>
      </div>

      <!--START: Blog - Index-->
      <section class="section-main bg-light">
        <div class="container">
          <div class="row">
            <?php 
            for($i=0;$i<2;$i++){
            ?>
            <div class="col-md-6">
              <div class="card mb-3">
                <div class="row">
                  <div class="col-md-8 d-flex">
                    <div class="card-body d-flex flex-column align-items-start">
                      <small class="d-block text-muted mb-1">1 day ago</small>
                      <a href="<?php echo $prefix;?>" class="d-block text-dark mb-auto">
                        <h3 class="card-title mb-2">
                          Featured post
                        </h3>
                        <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                      </a>
                      <a href="<?php echo $prefix;?>" class="mt-2">Continue reading <i class="fal fa-angle-right"></i></a>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <a href="<?php echo $prefix;?>" class="d-none d-md-block w-100" style="height: 250px; background: url(<?php echo $prefix;?>assets/img/sample/bg_trees.jpg); background-size: cover;">
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php 
            } 
            ?>
          </div>
        </div>
      </section>
      <!--END: Blog - Index-->

      <div class="container">
        <small class="d-block text-muted mt-5 mb-2">Blog Index (Vertical Layout)</small>
      </div>

      <!--START: Blog - Index-->
      <section class="section-main bg-light">
        <div class="container">
          <div class="row">
            <?php 
            for($i=0;$i<3;$i++){
            ?>
            <div class="col-md-4">
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top" src="<?php echo $prefix;?>assets/img/sample/bg_trees.jpg" alt="Card image cap">
                </a>
                <div class="card-body d-flex flex-column align-items-start h-md-250">
                  <small class="d-block text-muted mb-1">Nov 12</small>
                  <a href="" class="d-block text-dark mb-auto">
                    <h3 class="card-title mb-2">
                      Featured post
                    </h3>
                    <p class="card-text ">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                  </a>
                  <a href="#" class="mt-2">Continue reading <i class="fal fa-angle-right"></i></a>
                </div>
              </div>
            </div>
            <?php 
            } 
            ?>
          </div>
        </div>
      </section>
      <!--END: Blog - Index-->

    </section>

    <section class="section-main">
      <div class="container container-sm">
        <h3>Blog Details</h3>
        <p>Use <code>.font-size-lg</code> on the blog details to set bigger font size (including headings) &amp; line height. The details page will mostly use standard classes from Bootstrap 4 which can modified as preferred.</p>
        <p>&nbsp;</p>
      </div>

      <div class="container">
        <small class="d-block text-muted mb-2">Blog Details</small>
      </div>

      <!--START: Blog - Details-->
      <section class="blog">
        <div class="cover" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg) no-repeat center; background-size: cover;">
          <div class="container justify-content-center">
            <div class="cover-content text-center">
              <h1 class="cover-title animated fadeInUp delayp1">Blog Title</h1>
            </div>
          </div>
          <a href="#" class="scroll-hint bottom-0 animated fadeInDown delayp4">
            <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
          </a>
        </div>
        <section class="section-main font-size-lg">
          <div class="container container-sm">
            <h3>Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nihil reiciendis expedita odio adipisci dolores, praesentium at nobis blanditiis illo, voluptatum consequuntur laudantium sequi aspernatur enim temporibus quibusdam magnam tempore</p>
            <ul>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
              <li>Dolorem officiis eveniet qui assumenda perspiciatis</li>
              <li>Consequatur obcaecati magnam molestiae praesentium nemo id</li>
            </ul>
            <p>&nbsp;</p>
            <img src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-light-1.jpg" width="100%" alt="Image">
            <p>&nbsp;</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nihil reiciendis expedita odio adipisci dolores, praesentium at nobis blanditiis illo, voluptatum consequuntur laudantium sequi aspernatur enim temporibus quibusdam magnam tempore</p>
            <ol>
              <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit</li>
              <li>Dolorem officiis eveniet qui assumenda perspiciatis</li>
              <li>Consequatur obcaecati magnam molestiae praesentium nemo id</li>
            </ol>
            <p>&nbsp;</p>
            <h3>Heading 3</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nihil reiciendis expedita odio adipisci dolores, praesentium at nobis blanditiis illo, voluptatum consequuntur laudantium sequi aspernatur enim temporibus quibusdam magnam tempore</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus nihil reiciendis expedita odio adipisci dolores, praesentium at nobis blanditiis illo, voluptatum consequuntur laudantium sequi aspernatur enim temporibus quibusdam magnam tempore</p>
          </div>
        </section>
      </section>
      <!--END: Blog - Details-->

    </section>

    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
