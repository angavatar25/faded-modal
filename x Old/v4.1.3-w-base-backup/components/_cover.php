<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>
    
  </head>
  <style>
    .parallax-window {
      min-height: 400px;
      background: transparent;
    }

    #lightbox{
      background-color: transparent;
      padding: 10px;
      border-bottom: 2px solid #666;
      border-right: 2px solid #666;
      }
    #lightboxDetails{
      font-size: 0.8em;
      padding-top: 0.4em;
      } 
    #lightboxCaption{ float: left; }
    #keyboardMsg{ float: right; }

    #lightbox img{ border: none; } 
    #overlay img{ border: none; }
  </style>
  <body>

    <?php include($prefix."include/navbar.php"); ?>

    <section class="at-heading">
      <div class="container container-sm">
        <h1>Cover</h1>
        <p class="lead">Cover which usually used for the start of the page. In the form of static image / carousel with text and image background.</p>
      </div>
    </section>
    
    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Static</h3>
          <p>Use this cover if it only to show static cover image with no carousel effect. Modify the <code>.justify-content-center</code> to set the alignment. Optionally, add <code>.cover-full</code> to make it full height (100vh).</p>
          <p>Each cover comes with optional <code>.scroll-hint</code> which mainly used for full cover. Position from the bottom is modifiably with <code>.bottom-0</code> / <code>.bottom-25</code></p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Cover - Static-->
          <div class="cover" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg) no-repeat center; background-size: cover;">
            <div class="container justify-content-center">
              <div class="cover-content text-center">
                <h1 class="cover-title animated fadeInUp delayp1">Hello, world!</h1>
                <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                <a class="btn btn-primary reverse animated fadeInUp delayp3" href="#" role="button" target="_top">Learn more</a>
              </div>
            </div>
            <a href="#" class="scroll-hint bottom-0 animated fadeInDown delayp4">
              <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
            </a>
          </div>
          <!--End: Cover - Static-->
        </div>
      </div>
      <div class="at-code">
        <div class="container container-md">
          <pre>
            <code class="language-html" data="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"cover"</span> <span class="na">style=</span><span class="n">"background: url() no-repeat center; background-size: cover;"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"container justify-content-center"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"cover-content text-center"</span><span class="nt">&gt;</span>
      <span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"cover-title animated fadeInUp delayp1"</span><span class="nt">&gt;</span><span>Hello, world!</span><span class="nt">&lt;/div&gt;</span>
      <span class="nt">&lt;p</span> <span class="na">class=</span><span class="n">"cover-text animated fadeInUp delayp2"</span><span class="nt">&gt;</span><span>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</span><span class="nt">&lt;/p&gt;</span>
      <span class="nt">&lt;a</span> <span class="na">href=</span><span class="n">"#"</span><span class="nt">&gt;</span><span>Go somewhere</span><span class="nt">&lt;i</span> <span class="na">class=</span> <span class="n">"fal fa-angle-right"</span><span class="nt">/&gt;</span><span class="nt">&lt;/a&gt;</span>
    <span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
            </code>
          </pre>
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Carousel (as background)</h3>
          <p>Use this cover if it's meant to show cover with carousel using background image and text on top of it. Require to add <code>.cover-carousel</code> to make the layout work. Notes: <code>.carousel-control-prev</code> &amp; <code>.carousel-control-next</code> is hidden in this instance.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Cover - Carousel-->
          <div class="cover cover-carousel">
            <div id="carouselCover" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselCover" data-slide-to="0" class="active"></li>
                <li data-target="#carouselCover" data-slide-to="1"></li>
                <li data-target="#carouselCover" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active" style="background: linear-gradient(rgba(0,0,0, .5), rgba(0,0,0, .5)) ,url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                  <div class="container">
                    <div class="cover-content">
                      <h2 class="cover-title animated fadeInUp delayp1">Hello, world!</h2>
                      <p class="cover-text animated fadeInUp delayp2">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-3.jpg) no-repeat center; background-size: cover;">
                  <div class="container">
                    <div class="cover-content">
                      <h2 class="cover-title">Hello, world!</h2>
                      <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    </div>
                  </div>
                </div>
                <div class="carousel-item" style="background: url(<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg) no-repeat center; background-size: cover;">
                  <div class="container">
                    <div class="cover-content">
                      <h2 class="cover-title">Hello, world!</h2>
                      <p class="cover-text">This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev hidden" href="#carouselCover" role="button" data-slide="prev">
                <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next hidden" href="#carouselCover" role="button" data-slide="next">
                <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
              <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
            </a>
          </div>
          <!--End: Cover - Carousel-->
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Parallax</h3>
          <p>To use parallax, add <code>.parallax-window</code> to the <code>div</code> above <code>.cover</code>. Make sure the height of the background image used are all the same.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Parallax-->
          <div class="parallax-window" data-image-src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-light-1.jpg">
            <div class="cover">
              <div class="container justify-content-center">
                <div class="cover-content text-center">
                  <h1 class="cover-title animated fadeInUp delayp1">Hello, world!</h1>
                </div>
              </div>
            </div>
          </div>
          <!--End: Parallax-->
        </div>
      </div>
      <div class="at-code">
        <div class="container container-md">
          <label class="d-block text-muted">Dependencies</label>
          <code class="language-html" data="html">
            <span class="n">parallax.min.js</span>
          </code>
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Cover Responsive</h3>
          <p>For cover which change states on mobile & on desktop, use <code>.cover-responsive</code>.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Cover Responsive-->
          <div class="cover cover-responsive bg-dark">
            <div class="cover-responsive-img">
              <div class="cover-responsive-overlay"></div>
            </div>
            <div class="container">
              <div class="cover-content">
                <h3 class="cover-title animated fadeInUp delayp1">Hello, world!</h3>
                <p class="cover-text animated fadeInUp delayp2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid doloribus perferendis fuga.</p>
              </div>
            </div>
          </div>
          <!--End: Cover Responsive-->
        </div>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Cover Responsive - Carousel</h3>
          <p>For cover which change states on mobile & on desktop, use <code>.cover-responsive</code>.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Cover Responsive - Carousel-->
          <div class="cover cover-responsive">
            <div id="carouselCoverResponsive" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselCoverResponsive" data-slide-to="0" class="active"></li>
                <li data-target="#carouselCoverResponsive" data-slide-to="1"></li>
                <li data-target="#carouselCoverResponsive" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="cover cover-responsive bg-dark">
                    <div class="cover-responsive-img">
                      <div class="cover-responsive-overlay"></div>
                    </div>
                    <div class="container">
                      <div class="cover-content">
                        <h3 class="cover-title animated fadeInUp delayp1">Hello, world!</h3>
                        <p class="cover-text animated fadeInUp delayp2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid doloribus perferendis fuga.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cover cover-responsive bg-dark">
                    <div class="cover-responsive-img">
                      <div class="cover-responsive-overlay"></div>
                    </div>
                    <div class="container">
                      <div class="cover-content">
                        <h3 class="cover-title animated fadeInUp delayp1">Hello, world!</h3>
                        <p class="cover-text animated fadeInUp delayp2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid doloribus perferendis fuga.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="cover cover-responsive bg-dark">
                    <div class="cover-responsive-img">
                      <div class="cover-responsive-overlay"></div>
                    </div>
                    <div class="container">
                      <div class="cover-content">
                        <h3 class="cover-title animated fadeInUp delayp1">Hello, world!</h3>
                        <p class="cover-text animated fadeInUp delayp2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid doloribus perferendis fuga.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev hidden" href="#carouselCoverResponsive" role="button" data-slide="prev">
                <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next hidden" href="#carouselCoverResponsive" role="button" data-slide="next">
                <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <a href="#" class="scroll-hint bottom-25 animated fadeInDown delayp4">
              <img src="<?php echo $prefix;?>assets/img/common/arrow_down.png" alt="Arrow down hint"/>
            </a>
          </div>
          <!--End: Cover Responsive - Carousel-->
        </div>
      </div>
    </section>
  
    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>Carousel (as Image)</h3>
          <p>Use this for image only carousel. There's no need to put <code>.cover</code> for this purpose. Make sure the height of the image is all the same.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container-fluid">
          <!--Start: Carousel (Image Only)-->
          <div id="carouselImg" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselImg" data-slide-to="0" class="active"></li>
              <li data-target="#carouselImg" data-slide-to="1"></li>
              <li data-target="#carouselImg" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselImg" role="button" data-slide="prev">
              <i class="fal fa-angle-left" data-fa-transform="grow-20"></i>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselImg" role="button" data-slide="next">
              <i class="fal fa-angle-right" data-fa-transform="grow-20"></i>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <!--End: Carousel (Image Only)-->
        </div>
      </div>
    </section>
    
    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
    </script>

  </body>
</html>
