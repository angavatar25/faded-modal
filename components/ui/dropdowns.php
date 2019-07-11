<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <?php $prefix = "../../";?>
  <?php include $prefix . "include/head.php";?>
</head>

<body class="app header-fixed sidebar-fixed sidebar-lg-show">
  <?php include $prefix . "include/navbar-admin.php";?>
  <div class="app-body">
    <?php include $prefix . "include/sidebar.php";?>
    <main class="main">
      <div class="container-fluid">
        <div class="animated fadeIn">

          <section class="at-heading">
            <div class="container container-sm">
              <h1>Dropdowns</h1>
              <p class="lead">Toggle contextual overlays for displaying lists of links and more with the Bootstrap
                dropdown plugin.</p>
            </div>
          </section>

          <section class="at-section">
            <div class="at-subheading">
              <div class="container container-sm">
                <h3>Dropdown Basic</h3>
                <p>Use this dropdown for basic purpose. Use <code>.dropdown-menu-right</code> for right alignment.</p>
              </div>
            </div>
            <div class="at-example">
              <div class="container container-sm">
                <!--Start: Dropdown - Basic-->
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu">
                    <p class="dropdown-header">Dropdown header</p>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>
                <!--End: Dropdown - Basic-->
              </div>
            </div>
          </section>

          <section class="at-section">
            <div class="at-subheading">
              <div class="container container-sm">
                <h3>Dropdown w/ Filter</h3>
                <p>Use this dropdown for dropdown which has checkbox content.</p>
              </div>
            </div>
            <div class="at-example">
              <div class="container container-sm">
                <!--Start: Dropdown - Filter-->
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <form>
                      <div class="dropdown-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox1">
                          <label class="custom-control-label" for="checkbox1">Filter 1</label>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox2">
                          <label class="custom-control-label" for="checkbox2">Filter 2</label>
                        </div>
                      </div>
                      <div class="dropdown-item">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="checkbox3">
                          <label class="custom-control-label" for="checkbox3">Filter 3</label>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!--End: Dropdown - Filter-->
              </div>
            </div>
          </section>

          <section class="at-section">
            <div class="at-subheading">
              <div class="container container-sm">
                <h3>Dropdown w/ Forms</h3>
                <p>Use this dropdown for dropdown which has checkbox content.</p>
              </div>
            </div>
            <div class="at-example">
              <div class="container container-sm">
                <!--Start: Dropdown - Forms-->
                <div class="dropdown">
                  <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                  </a>
                  <div class="dropdown-menu">
                    <form class="px-4 py-3">
                      <div class="form-group">
                        <label for="exampleDropdownFormEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                          placeholder="email@example.com">
                      </div>
                      <div class="form-group">
                        <label for="exampleDropdownFormPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                          placeholder="Password">
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input">
                        <label class="custom-control-label">Filter 1</label>
                      </div>
                      <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="dropdownCheck">
                        <label class="form-check-label" for="dropdownCheck">
                          Remember me
                        </label>
                      </div>
                      <button type="submit" class="btn btn-primary">Sign in</button>
                    </form>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">New around here? Sign up</a>
                    <a class="dropdown-item" href="#">Forgot password?</a>
                  </div>
                </div>
                <!--End: Dropdown - Forms-->
              </div>
            </div>
          </section>

        </div>
      </div>
    </main>
  </div>

  <?php include $prefix . "include/footer-admin.php";?>
  <?php include $prefix . "include/script.php";?>

</body>

</html>