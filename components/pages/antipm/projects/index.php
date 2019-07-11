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
      <div class="app-body-header">
        <h1>Projects</h1>
        <div class="btn-placeholder">
          <a href="<?php echo $prefix; ?>components/pages/antipm/projects/add-edit.php" class="btn btn-success">Add</a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="animated fadeIn">

          <div class="card card-section pt-0">
            <!-- <div class="card-header">
              <h2>Table</h2>
              <div>
                <a href="" class="btn btn-success">Add</a>
              </div>
            </div> -->
            <div class="card-body">
              <div class="table-responsive table-no-footer">
                <table id="dataTable" class="table">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Project Name</th>
                      <th>PM</th>
                      <th>Status</th>
                      <th>Timeline</th>
                      <th>Task Status</th>
                      <th class="text-center">Rating</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><i class="fa fa-check text-gray-100"></i></td>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/projects/view.php">Mandiri Corporate
                          Website</a></td>
                      <td>Shanilda</td>
                      <td><span class="text-success">Active</span></td>
                      <td><span class="text-success">On Schedule</span></td>
                      <td>
                        <span class="badge badge-progress badge-progress-w-counter bg-orange"><strong class="badge-counter">2</strong> At Risk</span>
                        <span class="badge badge-progress badge-progress-w-counter bg-success"><strong class="badge-counter">2</strong> On Track</span>
                        <span class="badge badge-progress badge-progress-w-counter bg-success"><strong class="badge-counter">2</strong> 💪On Fire</span>
                      </td>
                      <td class="td-emoji">
                        <div class="icon-emoji icon-emoji-angry">
                          <span>😡</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check text-gray-100"></i></td>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/projects/view.php">Swapz</a></td>
                      <td>Elizabeth</td>
                      <td><span class="text-success">Active - Support</span></td>
                      <td><span class="text-orange">Delayed</span></td>
                      <td>
                        <span class="badge badge-progress badge-progress-w-counter bg-success"><strong class="badge-counter">2</strong> On Track</span>
                      </td>
                      <td class="td-emoji">
                        <div class="icon-emoji icon-emoji-frown">
                          <span>😰</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check text-gray-100"></i></td>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/projects/view.php">Alfagift Mobile
                          App</a>
                      </td>
                      <td>Aprilia</td>
                      <td><span class="text-success">Active - Idle</span></td>
                      <td><span class="text-orange">Delayed</span></td>
                      <td>
                        <span class="badge badge-progress badge-progress-w-counter bg-orange"><strong class="badge-counter">2</strong> At Risk</span>
                        <span class="badge badge-progress badge-progress-w-counter bg-success"><strong class="badge-counter">2</strong> On Track</span>
                      </td>
                      <td class="td-emoji">
                        <div class="icon-emoji icon-emoji-meh">
                          <span>😶</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check text-success"></i></td>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/projects/view.php">LinkAja</a>
                      </td>
                      <td>Aprilia</td>
                      <td><span class="text-muted">On Hold</span></td>
                      <td><span class="text-success">On Schedule</span></td>
                      <td>
                        <span class="badge badge-progress badge-progress-w-counter bg-success"><strong class="badge-counter">2</strong> On Track</span>
                      </td>
                      <td class="td-emoji">
                        <div class="icon-emoji icon-emoji-smile">
                          <span>😁</span>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td><i class="fa fa-check text-success"></i></td>
                      <td><a href="<?php echo $prefix; ?>components/pages/antipm/projects/view.php">Holcim Customer
                          Portal</a>
                      </td>
                      <td>Aprilia</td>
                      <td><span class="text-danger">Cancelled</span></td>
                      <td><span class="text-success">On Schedule</span></td>
                      <td>
                        <span class="badge badge-progress badge-progress-w-counter bg-orange"><strong class="badge-counter">2</strong> At Risk</span>
                      </td>
                      <td class="td-emoji">
                        <div class="icon-emoji icon-emoji-love">
                          <span>😍</span>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
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