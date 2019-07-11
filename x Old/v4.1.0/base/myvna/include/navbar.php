<style>
  .navbar.fixed-top + * {
    margin-top: 56px;
  }
  @media (min-width: 768px) {
    .navbar.fixed-top + * {
      margin-top: 64px;
    }
  }
      
</style>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <div class="d-flex justify-content-between w-100">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarBasicA" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <a class="navbar-brand center-sm-down-both" href="<?php echo $prefix;?>index.php">
        <img src="<?php echo $prefix;?>assets/img/monstore/logo_monstore-light.svg" alt="Logo">
      </a>
      
      <div class="collapse navbar-collapse navbar-collapse-absolute center-md-both" id="navbarBasicA">
        <ul class="navbar-nav w-100 d-flex justify-content-md-center">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo $prefix;?>base/monstore/shop">Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $prefix;?>base/monstore/shop">Women</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $prefix;?>base/monstore/shop">Kids</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $prefix;?>base/monstore/shop">Home + Gifts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $prefix;?>base/monstore/shop">Sale</a>
          </li>
        </ul>
      </div>

      <ul class="navbar-nav d-flex justify-content-end align-items-center flex-row">
        <li class="nav-item">
          <a class="nav-link p-2" href="#"><i class="far fa-search"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2" href="#"><i class="far fa-user-alt"></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link p-2" href="#"><i class="far fa-shopping-bag mr-1"></i> <span class="text-primary">0</span></a>
        </li>
      </ul>

    </div>
  </div>
</nav>

