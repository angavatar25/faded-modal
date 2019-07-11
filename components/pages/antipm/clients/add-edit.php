<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
  <?php $prefix = "../../../../";?>
  <?php include $prefix . "include/head.php";?>
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  <?php include $prefix . "include/navbar-admin.php";?>
  <div class="app-body app-body-alt">
    <?php include $prefix . "components/pages/antipm/include/sidebar.php";?>
    <main class="main">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo $prefix; ?>components/pages/antipm/clients">Clients</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Client</li>
      </ol>
      <div class="app-body-header">
        <h1>Add Client</h1>
        <div class="btn-placeholder">
          <a href="<?php echo $prefix; ?>components/pages/antipm/clients" class="btn btn-secondary">Cancel</a>
          <a href="" class="btn btn-success">Save</a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="animated fadeIn">

          <div class="card card-section">
            <div class="row">
              <div class="col-md-4">
                <div class="card-header">
                  <h2>General Info</h2>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="form-group">
                    <label for="clientName">Client Name</label>
                    <input class="form-control" id="clientName" type="text" placeholder="Enter client name">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>

  <?php include $prefix . "include/footer-admin.php";?>
  <?php include $prefix . "include/script.php";?>

  <script>
  $('#dataTable').DataTable();
  </script>


</body>

</html>