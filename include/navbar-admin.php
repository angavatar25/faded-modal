<header class="app-header navbar navbar-expand-lg">
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">
    <img class="navbar-brand-full d-none d-lg-block" src="<?php echo $prefix;?>assets/img/brand/logo_admin_antikode-light_lg.png" width="100" height="30" alt="Logo">
    <img class="navbar-brand-full d-block d-lg-none" src="<?php echo $prefix;?>assets/img/brand/logo_admin_antikode-dark_lg.png" width="100" height="30" alt="Logo">
    <img class="navbar-brand-minimized" src="<?php echo $prefix;?>assets/img/brand/logo_admin_antikode-light_sm.png" width="30" height="30" alt="Logo">
  </a>
  <button class="navbar-toggler sidebar-toggler d-none d-lg-inline-block" type="button" data-toggle="sidebar-lg-show">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- <ul class="nav navbar-nav d-md-down-none">
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Dashboard</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Users</a>
    </li>
    <li class="nav-item px-3">
      <a class="nav-link" href="#">Settings</a>
    </li>
  </ul> -->
  <ul class="nav navbar-nav ml-auto">
    <li class="nav-item dropdown d-md-down-none">
      <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <i class="fal fa-bell"></i>
        <span class="badge badge-pill badge-info">7</span>
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg">
        <div class="dropdown-header text-center">
          You have 4 messages
        </div>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">Just now</small>
            </div>
            <div class="text-truncate font-weight-bold">
              Important message</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">5 minutes ago</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">1:52 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item" href="#">
          <div class="message">
            <div>
              <small class="text-muted">John Doe</small>
              <small class="text-muted float-right mt-1">4:03 PM</small>
            </div>
            <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
            <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt...</div>
          </div>
        </a>
        <a class="dropdown-item text-center" href="#">
          <strong>View all messages</strong>
        </a>
      </div>
    </li>
    <li class="nav-item nav-item-user dropdown" id="navUser">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="user-img">
          <span>NY</span>
          <img src="<?php echo $prefix;?>assets/img/common/ic_profile.jpg" class="img-fluid hidden">
        </div>
        <span class="d-none d-md-inline-block">Nick Yudha</span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="<?php echo $prefix;?>profile"><i class="dropdown-icon fal fa-user"></i> My Profile</a></li>
        <li><a class="dropdown-item" href="<?php echo $prefix;?>"><i class="dropdown-icon fal fa-sign-out-alt"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</header>