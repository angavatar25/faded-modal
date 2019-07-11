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
        <h1>Card</h1>
        <p class="lead">Cards component can be used for multiple things. Some common examples are products &amp; information container.</p>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>General</h3>
          <p>General card with standard layout can be used for technically everything which has image and information underneath it. Basic Antikode template comes with box shadow with variable <code>$main-box-shadow</code> for the base, and <code>$main-box-shadow-hover</code> for the hover version if the card happens to be on <code>a</code> tag. Note that the variable can be used for pretty much everything.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container container-sm">
          <!--START: Card - General-->
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $prefix;?>assets/img/sample/bg_trees.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#">Go somewhere <i class="fal fa-angle-right"></i></a>
            </div>
          </div>
          <!--END: Card - General-->
        </div>
      </div>
      <div class="at-code">
        <div class="container container-sm">
          <pre>
            <code class="language-html" data="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"card"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="n">"card-img-top"</span> <span class="na">src=</span><span class="n">"img path"</span><span class="nt">/&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="n">"card-title"</span><span class="nt">&gt;</span><span>Card title</span><span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="n">"card-text"</span><span class="nt">&gt;</span><span>Some quick example text to build on the card title and make up the bulk of the card's content.</span><span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="n">"#"</span><span class="nt">&gt;</span><span>Go somewhere</span> <span class="nt">&lt;i</span> <span class="na">class=</span><span class="n">"fal fa-angle-right"</span><span class="nt">/&gt;</span><span class="nt">&lt;/a&gt;</span>
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
          <h3>Boxless</h3>
          <p>Add <code>.card-boxless</code> to show the card without the box styling. By default, <code>.card-body</code> padding will be set to 0, unless it has <code>img</code> on top of it, which gives padding with <code>$card-spacer-x</code> value.</p>
        </div>
      </div>
      <div class="at-example">
        <div class="container container-sm">
          <!--START: Card Boxless-->
            <div class="card card-boxless" style="width: 18rem;">
              <img class="card-img-top" src="<?php echo $prefix;?>assets/img/sample/bg_trees.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#">Go somewhere <i class="fal fa-angle-right"></i></a>
              </div>
            </div>
            <!--END: Card Boxless-->
        </div>
      </div>
      <div class="at-code">
        <div class="container container-sm">
          <pre>
            <code class="language-html" data="html">
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"card card-boxless"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;img</span> <span class="na">class=</span><span class="n">"card-img-top"</span> <span class="na">src=</span><span class="n">"img path"</span><span class="nt">/&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="n">"card-body"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;h5</span> <span class="na">class=</span><span class="n">"card-title"</span><span class="nt">&gt;</span><span>Card title</span><span class="nt">&lt;/h5&gt;</span>
    <span class="nt">&lt;p</span> <span class="na">class=</span><span class="n">"card-text"</span><span class="nt">&gt;</span><span>Some quick example text to build on the card title and make up the bulk of the card's content.</span><span class="nt">&lt;/p&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">href=</span><span class="n">"#"</span><span class="nt">&gt;</span><span>Go somewhere</span> <span class="nt">&lt;i</span> <span class="na">class=</span><span class="n">"fal fa-angle-right"</span><span class="nt">/&gt;</span><span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span>
            </code>
          </pre>
        </div>
      </div>
    </section>


    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      window.FontAwesomeConfig.searchPseudoElements = true;
    </script>

  </body>
</html>