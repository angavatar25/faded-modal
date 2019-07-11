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
        <li class="breadcrumb-item"><a href="<?php echo $prefix; ?>components/pages/antipm/projects">Projects</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Project</li>
      </ol>
      <div class="app-body-header">
        <h1>Add Project</h1>
        <div class="btn-placeholder">
          <a href="<?php echo $prefix; ?>components/pages/antipm/projects" class="btn btn-secondary">Cancel</a>
          <a href="" class="btn btn-success">Save</a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="animated fadeIn">

          <div class="card card-section">
            <div class="row">
              <div class="col-md-4">
                <div class="card-header">
                  <h2>Project Info</h2>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <div class="form-group">
                    <label for="projectManager">Client Organization</label>
                    <div class="input-group">
                      <select class="custom-select" id="chooseClient">
                        <option>Choose client</option>
                        <option>Bank Mandiri</option>
                        <option>OCBC NISP</option>
                      </select>
                      <div class="px-3 d-flex align-items-center">
                        or
                      </div>
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon1"><i
                            class="fal fa-plus mr-1"></i>
                          New Client</button>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="projectManager">Client Member</label>
                    <div class="input-group">
                      <input class="form-control" id="newClientName" type="text" placeholder="Enter new client member">
                      <div class="px-3 d-flex align-items-center">
                        or
                      </div>
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon1"><i
                            class="fal fa-plus mr-1"></i>
                          New Member</button>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <!-- <div class="form-group">
                    <label for="projectManager">Client</label>
                    <div class="input-group">
                      <input class="form-control" id="newClientName" type="text" placeholder="Enter new client name">
                      <div class="px-3 d-flex align-items-center">
                        or
                      </div>
                      <div class="input-group-append">
                        <button class="btn btn-secondary" type="button" id="button-addon2">
                          Choose Client</button>
                      </div>
                    </div>
                  </div> -->
                  <!-- <div class="form-group">
                    <label for="projectManager">Client</label>
                    <select class="custom-select" id="projectManager">
                      <option>Choose client</option>
                      <option>Bank Mandiri</option>
                      <option>OCBC NISP</option>
                    </select>
                  </div> -->
                  <div class="form-group">
                    <label for="projectName">Project Name</label>
                    <input class="form-control" id="projectName" type="text" placeholder="Enter project name">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <div class="form-group">
                        <label for="projectManager">Project Manager</label>
                        <select class="custom-select" id="projectManager">
                          <option>Choose project manager</option>
                          <option>Shanilda Salsabilla</option>
                          <option>Aprilia</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="form-group">
                        <label for="projectLead">Project Lead</label>
                        <select class="custom-select" id="projectLead">
                          <option>Choose project lead</option>
                          <option>Stanley Santoso</option>
                          <option>Letizia Margo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card card-section">
            <div class="card-header">
              <h2>Phases & Tasks</h2>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="phaseName">Phase Name</label>
                    <input class="form-control" id="phaseName" type="text" placeholder="Enter phase name">
                  </div>
                </div>
              </div>
              <div class="table-responsive table-form table-no-header table-no-footer">
                <table id="dataTable" class="table">
                  <thead>
                    <tr>
                      <th>Task</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Team</th>
                      <th class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30%">
                        <input class="form-control" id="taskName" type="text" placeholder="Enter task name"></td>
                      <td width="15%"><input class="form-control" id="startDate" type="text"
                          placeholder="Enter start date"></td>
                      <td width="15%"><input class="form-control" id="endDate" type="text" placeholder="Enter end date">
                      </td>
                      <td width="30%"><input class="form-control" id="teamMember" type="text"
                          placeholder="Add team member"></td>
                      <td width="10%">
                        <div class="btn-placeholder-add-del clearfix">
                          <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                          <button class="btn btn-secondary-danger"><i class="fal fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        <input class="form-control" id="taskName" type="text" placeholder="Enter task name"></td>
                      <td width="15%"><input class="form-control" id="startDate" type="text"
                          placeholder="Enter start date"></td>
                      <td width="15%"><input class="form-control" id="endDate" type="text" placeholder="Enter end date">
                      </td>
                      <td width="30%"><input class="form-control" id="teamMember" type="text"
                          placeholder="Add team member"></td>
                      <td width="10%">
                        <div class="btn-placeholder-add-del clearfix">
                          <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                          <button class="btn btn-secondary-danger"><i class="fal fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr>
              <div class="d-flex">
                <div class="mr-auto">
                  <button class="btn btn-secondary"><i class="fal fa-angle-up"></i></button>
                  <button class="btn btn-secondary"><i class="fal fa-angle-down"></i></button>
                </div>
                <button class="btn btn-secondary-danger" data-toggle="modal" data-target="#modalRemovePhase"><i
                    class="fal fa-trash-alt mr-2"></i> Remove Phase</button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <div class="form-group">
                    <label for="phaseName">Phase Name</label>
                    <input class="form-control" id="phaseName" type="text" placeholder="Enter phase name">
                  </div>
                </div>
              </div>
              <div class="table-responsive table-form table-no-header table-no-footer">
                <table id="dataTable2" class="table">
                  <thead>
                    <tr>
                      <th>Task</th>
                      <th>Start Date</th>
                      <th>End Date</th>
                      <th>Team</th>
                      <th class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="30%">
                        <input class="form-control" id="taskName" type="text" placeholder="Enter task name"></td>
                      <td width="15%"><input class="form-control" id="startDate" type="text"
                          placeholder="Enter start date"></td>
                      <td width="15%"><input class="form-control" id="endDate" type="text" placeholder="Enter end date">
                      </td>
                      <td width="30%"><input class="form-control" id="teamMember" type="text"
                          placeholder="Add team member"></td>
                      <td width="10%">
                        <div class="btn-placeholder-add-del clearfix">
                          <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                          <button class="btn btn-secondary-danger"><i class="fal fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td width="30%">
                        <input class="form-control" id="taskName" type="text" placeholder="Enter task name"></td>
                      <td width="15%"><input class="form-control" id="startDate" type="text"
                          placeholder="Enter start date"></td>
                      <td width="15%"><input class="form-control" id="endDate" type="text" placeholder="Enter end date">
                      </td>
                      <td width="30%"><input class="form-control" id="teamMember" type="text"
                          placeholder="Add team member"></td>
                      <td width="10%">
                        <div class="btn-placeholder-add-del clearfix">
                          <button class="btn btn-success"><i class="fal fa-plus"></i></button>
                          <button class="btn btn-secondary-danger"><i class="fal fa-trash-alt"></i></button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <hr>
              <div class="d-flex">
                <div class="mr-auto">
                  <button class="btn btn-secondary"><i class="fal fa-angle-up"></i></button>
                  <button class="btn btn-secondary"><i class="fal fa-angle-down"></i></button>
                </div>
                <button class="btn btn-secondary-danger" data-toggle="modal" data-target="#modalRemovePhase"><i
                    class="fal fa-trash-alt mr-2"></i> Remove Phase</button>
              </div>
            </div>
            <div class="btn-placeholder mt-3 d-flex justify-content-end">
              <button class="btn btn-success">Add Phase</button>
            </div>
          </div>

        </div>
      </div>
    </main>
  </div>

  <?php include $prefix . "include/footer-admin.php";?>

  <!--Modal Confirm Remove-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalRemovePhase">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Confirm Remove</h4>
          <p>Are you sure you want to remove this phase?</p>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">No</button>
            <button type="button" class="btn btn-danger">Yes</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include $prefix . "include/script.php";?>

  <script>
  $('#dataTable').DataTable();
  $('#dataTable2').DataTable();
  </script>


</body>

</html>