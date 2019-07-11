
<nav class="side-navbar navbar-light">
  <div class="container">
    <div class="absolute-side-navbar">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <ul>
        <li class="nav-item">
          <i class="fas fa-plus" style="margin-right: 0.25rem;margin-left: 0.75rem; font-size: 0.75rem;"></i>Projects
          <ul>
            <li><a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/beast.php">Beast</a></li>
            <li><a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/rust.php">Rust</a></li>
            <li><a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/storm.php">Storm</a></li>
            <li><a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/water.php">Water</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/read-me.php">Read Me</a>
        </li>
      </ul>
    </div><!-- .absolute-side-navbar -->
  </div>
</nav> <!-- .side-navbar -->
<nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand center-sm-down-both" href="<?php echo $prefix;?>base/forte/index.php">
      <h1 id="logo" class="logo">FORTE</h1>
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarContent">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-plus" style="margin-right: 0.25rem; font-size: 0.75rem;"></i>Projects
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/beast.php">Beast</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/rust.php">Rust</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/storm.php">Storm</a>
            <a class="dropdown-item" href="<?php echo $prefix;?>base/forte/projects/water.php">Water</a>

          </div>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $prefix;?>base/forte/read-me.php">Read Me</a>
        </li>
      </ul>
    </div><!-- .nav-collapse -->
  </div>
</nav>
