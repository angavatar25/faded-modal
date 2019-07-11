<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top ">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $prefix;?>index.php">
      <img src="<?php echo $prefix;?>assets/img/brand/logo_anti-light.svg" alt="Logo">
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo $prefix;?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Components
          </a>
          <div class="dropdown-menu animated fadeIn" aria-labelledby="navbarDropdown">
            <small class="dropdown-header text-muted">Common</small>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_alert.php">Alert</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_card.php">Card</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_cover.php">Cover</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_footer.php">Footer</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_forms.php">Forms</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_modal.php">Modal</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_navbar.php">Navbar</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_gallery.php">Gallery</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_table.php">Table</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_animatedbutton.php">Animated Button</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/_carousel.php">Carousel</a>
            <div class="dropdown-divider"></div>
            <small class="dropdown-header text-muted">Specific</small>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/blog.php">Blog</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/feature.php">Feature</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/menu.php">Menu</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/misc.php">Miscellaneous</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>components/animation-additional.php">Add. Animation</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Base Designs
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo $prefix;?>base/five">Five</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/foster">Foster</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/monstore">Monstore</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/Forte">Forte</a>
          </div>
        </li>
      </ul>
    </div>
  </div>

</nav>