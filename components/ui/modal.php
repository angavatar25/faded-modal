<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../";?>
    <?php include($prefix."include/head.php"); ?>
    <style>
      #antiModalGeneral > .modal {
        position: relative;
        display: block;
        z-index: 1029;
      }

      /*#lightbox{
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
      #overlay img{ border: none; }*/

      .img-square {
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        transition: all 0.5s ease-out;
      }

      .img-thumbnails {
        position: relative;
        width: 20rem;
        height: 20rem;
        margin: 1rem auto;
        background-color: #f3f3f3;
        border: 1px solid #d3d3d3;
        overflow: hidden;
      }

      .img-thumbnails img {
        width: 100%;
        position: absolute;
        margin-top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
      }
      
      @media(max-width: 1200px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }

      @media(max-width: 992px){
        .img-square,
        .img-thumbnails {
          width: 13rem;
          height: 13rem;
        }
      }

      @media(max-width: 768px){
        .img-square,
        .img-thumbnails {
          width: 15rem;
          height: 15rem;
        }
      }
    </style>
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
                <h1>Modal</h1>
                  <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>General</h3>
                  <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
                  <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
                </div>
              </div>
              <div class="at-example bg-light" id="antiModalGeneral">
                <!--START: Modal General-->
                <div class="modal fade" tabindex="-1" role="dialog" id="modalName">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-body p-box">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true"><i class="fal fa-times"></i></span>
                        </button>
                        <h4 class="modal-title mb-3">Modal title</h4>
                        <p>Modal body text goes here.</p>
                        <div class="clearfix mt-5">
                          <button type="button" class="btn btn-modal btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save Changes</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--END: Modal General-->
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Full Screen</h3>
                  <span class="badge badge-pill badge-warning">Mobile Only</span>
                  <p>Full screen modal works well on mobile to give an illusion that the screen is changing to another page. To give that effect, use <code>.fade.fadeinup-sm-down</code> (effect will slide up only on mobile). The <code>-sm-down</code> can be removed if the fade in up effect want to be maintained on desktop.</p>
                  <p>&nbsp;</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container container-sm">
                  <button type="button" class="btn btn-modal btn-primary" data-toggle="modal" data-target="#modalFull">Trigger Modal</button>
                </div>
              </div>

              <!--Start: modal-->
              <div class="modal modal-full fade fadeinup-sm-down" id="modalFull" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-box">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                      </button>
                      <h4 class="modal-title mb-3">Modal title</h4>
                      <p>Modal body text goes here.</p>
                      <div class="clearfix mt-5">
                        <button type="button" class="btn btn-modal btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save Changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Start: modal-->

            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Modal Success</h3>
                  <p>To give that effect, use <code>.f-modal-icon .f-modal-success</code> .</p>
                  <p>&nbsp;</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container container-sm">
                  <button type="button" class="btn btn-modal btn-primary" data-toggle="modal" data-target="#modalSuccess">Modal Success</button>
                </div>
              </div>

              <!--Start: modal-->
              <div class="modal fade fadeinup-sm-down" id="modalSuccess" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-box text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                      </button>
                      <div class="f-modal-alert">
                        <div class="f-modal-icon f-modal-success animate">
                          <span class="f-modal-line f-modal-tip animateSuccessTip"></span>
                          <span class="f-modal-line f-modal-long animateSuccessLong"></span>
                          <div class="f-modal-placeholder"></div>
                          <div class="f-modal-fix"></div>
                        </div>
                      </div>
                      <h4 class="modal-title mb-3">Good Job!</h4>
                      <p>Modal body text goes here.</p>
                      <div class="clearfix mt-5">
                        <button type="button" class="btn btn-modal btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Start: modal-->

            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Modal Error</h3>
                  <p>To give that effect, use <code>.f-modal-icon .f-modal-error .animate</code> .</p>
                  <p>&nbsp;</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container container-sm">
                  <button type="button" class="btn btn-modal btn-primary" data-toggle="modal" data-target="#modalError">Modal Error</button>
                </div>
              </div>

              <!--Start: modal-->
              <div class="modal fade fadeinup-sm-down" id="modalError" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-box text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                      </button>
                      <div class="f-modal-alert">
                        <div class="f-modal-icon f-modal-error animate">
                          <span class="f-modal-x-mark">
                            <span class="f-modal-line f-modal-left animateXLeft"></span>
                            <span class="f-modal-line f-modal-right animateXRight"></span>
                          </span>
                          <div class="f-modal-placeholder"></div>
                          <div class="f-modal-fix"></div>
                        </div>
                      </div>
                      <h4 class="modal-title mb-3">Oopss!</h4>
                      <p>Something were wrong.</p>
                      <div class="clearfix mt-5">
                        <button type="button" class="btn btn-modal btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Start: modal-->

            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Modal Warning</h3>
                  <p>To give that effect, use <code>.f-modal-icon .f-modal-warning .scaleWarning</code> .</p>
                  <p>&nbsp;</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container container-sm">
                  <button type="button" class="btn btn-modal btn-primary" data-toggle="modal" data-target="#modalWarning">Modal Warning</button>
                </div>
              </div>

              <!--Start: modal-->
              <div class="modal fade fadeinup-sm-down" id="modalWarning" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-body p-box text-center">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fal fa-times"></i></span>
                      </button>
                      <div class="f-modal-alert">
                        <div class="f-modal-icon f-modal-warning scaleWarning">
                          <span class="f-modal-body pulseWarningIns"></span>
                          <span class="f-modal-dot pulseWarningIns"></span>
                        </div>
                      </div>
                      <h4 class="modal-title mb-3">Warning</h4>
                      <p>Modal Body</p>
                      <div class="clearfix mt-5">
                        <button type="button" class="btn btn-modal btn-primary" data-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Start: modal-->

            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Fancybox</h3>
                  <p>Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content. Add <code>data-fancybox="gallery"</code> as an attribute to the property.</p>
                </div>
              </div>
              <div class="at-example">
                <div class="container">
                  <div class="row row-2">
                    <div class="col-sm-4 mb-3">
                      <a href="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg" data-fancybox="gallery">
                        <img src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-1.jpg" class="img-fluid" alt="Image">
                      </a>
                    </div>
                    <div class="col-sm-4 mb-3">
                      <a href="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg" data-fancybox="gallery">
                        <img src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-2.jpg" class="img-fluid" alt="Image">
                      </a>
                    </div>
                    <div class="col-sm-4 mb-3">
                      <a href="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-3.jpg" data-fancybox="gallery">
                        <img src="<?php echo $prefix;?>assets/img/sample/bg_rectangle-dark-3.jpg" class="img-fluid" alt="Image">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="at-code">
                <div class="container container-md">
                  <label class="d-block text-muted">Dependencies</label>
                  <code class="language-html" data="html">
                    <span class="n">fancybox.min.css</span><br>
                    <span class="n">jquery.fancybox.min.js</span>
                  </code>
                </div>
              </div>
            </section>
            
          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

  </body>
</html>
