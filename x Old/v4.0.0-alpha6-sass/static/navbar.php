<nav class="navbar navbar-toggleable-sm">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="<?php echo $prefix;?>index.php" class="navbar-brand">
      <img src="<?php echo $prefix;?>assets/img/brand/logo_antikode-dark.png" class="img-fluid" alt="Logo">
    </a>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="nav navbar-nav mr-auto">
        <li class="nav-item" id="navHome">
          <a class="nav-link" href="<?php echo $prefix;?>">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" id="navAbout">
          <a class="nav-link" href="<?php echo $prefix;?>about">About</a>
        </li>
        <li class="nav-item" id="navBlog">
          <a class="nav-link" href="<?php echo $prefix;?>blog">Blog</a>
        </li>
        <li class="nav-item" id="navContact">
          <a class="nav-link" href="<?php echo $prefix;?>contact">Contact</a>
        </li>
      </ul>
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>  