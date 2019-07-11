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
      @media(max-width: 567px){}

      .card-3d {
        position:relative;
        width:100%;
        height:250px;
        object-fit:cover;
        transform:rotateX(0) rotateY(0);
        transform-style:preserve-3d;
        transition-duration:.1s;
        transition-timing-function:ease!important
      }

      .card-3d-overlay img {
        width:100%;
        height:250px;
        border-radius:5px;
        object-fit:cover;
        transition:all .3s ease
      }

      .card-3d-overlay img:hover {
        box-shadow:0 10px 30px #ddd;
        transition:all .3s ease
      }

      .card-3d-heading {
        position:absolute;
        bottom:20px;
        left:20px;
        color:#FFF
      }

      .card-3d-heading .small {
        display:inline-block;
        margin-bottom:5px;
        text-transform:uppercase;
        font-size:10px;
        transform:translateZ(15px)
      }

      .card-3d-heading h2 {
        margin:0;
        transform:translateZ(30px)
      }

      .card-3d.rounded,.card-3d.rounded .card-overlay {
        border-radius:5px
      }

      .card-3d.is-out {
        transform:rotateX(0) rotateY(0)!important;
        transition-duration:1s
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
                <h1>Gallery</h1>
                <p class="lead mb-6">Use this component to add dialogs to your site for lightboxes, user notifications, or completely custom content.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Image Square with cover</h3>
                  <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
                  <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-12.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-1.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-2.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-5.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-10.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-square" style="background: url(<?php echo $prefix;?>assets/img/sample/gallery-11.jpg) no-repeat center; background-size: cover;"></div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Image Square without cropping</h3>
                  <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
                  <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container container-fluid">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-12.jpg">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-1.jpg">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-2.jpg">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-5.jpg">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-10.jpg">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 ">
                      <div class="img-thumbnails">
                        <img src="<?php echo $prefix;?>assets/img/sample/gallery-11.jpg">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Image 3D</h3>
                  <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
                  <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
                </div>
              </div>

              <div class="at-example">
                <div class="container container-fluid">
                  <div class="row">
                    <div class="col-md-3">
                      <div class="card card-3d mb-3">
                        <div class="card-3d-overlay">
                          <img src="https://images.unsplash.com/photo-1530738270955-2ed78de5c2a9?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=0038d34f76fa09d4e55552c4eb7f4e6e&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                        </div>
                        <div class="card-3d-heading">
                          <span class="small">Sub title</span>
                          <h2>Title</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-3d mb-3">
                        <div class="card-3d-overlay">
                          <img src="https://images.unsplash.com/photo-1530721733923-e2df89901503?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=c3f972ef16cee20243cf57f1a18f89f0&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrg" alt="">
                        </div>
                        <div class="card-3d-heading">
                          <span class="small">Sub title</span>
                          <h2>Title</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-3d mb-3">
                        <div class="card-3d-overlay">
                          <img src="https://images.unsplash.com/photo-1530726856676-e6c684e01ad3?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=68b2cdb44adb94d729145483805d692a&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                        </div>
                        <div class="card-3d-heading">
                          <span class="small">Sub title</span>
                          <h2>Title</h2>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="card card-3d mb-3">
                        <div class="card-3d-overlay">
                          <img src="https://images.unsplash.com/photo-1530733023972-03de6789855c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=8bea76f5755a01938323d5eba0f25ba0&dpr=1&auto=format&fit=crop&w=1000&q=80&cs=tinysrgb" alt="">
                        </div>
                        <div class="card-3d-heading">
                          <span class="small">Sub title</span>
                          <h2>Title</h2>
                        </div>
                      </div>
                    </div>
                  </div>
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
      $(function() {
        $('#lighbox1').lighbox();
      });


      var cw = $('.img-container').width();
      $('.img-container').css({
          'height': cw/1 + 'px' // 1 is divider 
      });

      (function ( $ ) {
        //Make your content a heroe
        $.fn.transformHeroes = function() {
            //Variables
            var perspective = '500px',
            delta = 20,
            width = this.width(),
            height = this.height(),
            midWidth = width / 2,
            midHeight = height / 2;
            //Events
            this.on({
              mousemove: function(e) {
                var pos = $(this).offset(),
                cursPosX = e.pageX - pos.left,
                cursPosY = e.pageY - pos.top,
                cursCenterX = midWidth - cursPosX,
                cursCenterY = midHeight - cursPosY;

                $(this).css('transform','perspective(' + perspective + ') rotateX('+ (cursCenterY / delta) +'deg) rotateY('+ -(cursCenterX / delta) +'deg)');
                $(this).removeClass('is-out');
              },
              mouseleave: function() {
                $(this).addClass('is-out');
              }
            });
            //Return
            return this;
        };
      }( jQuery ));

      //Set plugin on cards-3d
      $('.card-3d').transformHeroes();
      
    </script>

  </body>
</html>
