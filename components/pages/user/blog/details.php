<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../../";?>
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
              <div class="container container-md">
                <h1>Blog</h1>
                <p>As the name implies, these components are used for blog / news related layout.</p>
              </div> 
            </section>
            
            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-md">
                  <h3>Blog Details</h3>
                  <p>Use <code>.font-size-lg</code> on the blog details to set bigger font size (including headings) &amp; line height. The details page will mostly use standard classes from Bootstrap 4 which can modified as preferred.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container-fluid">
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
                </div>
              </div>
            </section>
              
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <

  </body>
</html>
