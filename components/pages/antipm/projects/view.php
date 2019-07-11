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
        <li class="breadcrumb-item active" aria-current="page">Project Details</li>
      </ol>
      <div class="app-body-header">
        <h1>Project Name</h1>
        <div class="btn-placeholder">
          <a href="<?php echo $prefix; ?>components/pages/antipm/projects/add-edit.php"
            class="btn btn-secondary">Edit</a>
          <a href="<?php echo $prefix; ?>" class="btn btn-secondary-danger">Archive</a>
          <a href="<?php echo $prefix; ?>" class="btn btn-secondary-danger"><i class="fal fa-trash-alt"></i></a>
        </div>
      </div>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="card card-section">
            <div class="card-header">
              <h2>Status:
                <a href="#modalEditProjectStatus" data-toggle="modal" class="text-success">Active</a>
                <!-- <a href="#modalEditProjectStatus" data-toggle="modal" class="text-success">Active - Support</a>
                <a href="#modalEditProjectStatus" data-toggle="modal" class="text-success">Active - Idle</a>
                <a href="#modalEditProjectStatus" data-toggle="modal" class="text-muted">On Hold</a>
                <a href="#modalEditProjectStatus" data-toggle="modal" class="text-danger">Cancelled</a> -->
              </h2>
              <h2>Timeline:
                <a href="#modalEditProjectTimeline" data-toggle="modal" class="text-success">On Schedule</a>
                <!-- <a href="#modalEditProjectTimeline" data-toggle="modal" class="text-orange">Delayed</a> -->
              </h2>
            </div>
          </div>
          <div class="card card-section">
            <div class="card-header">
              <h2>Phases & Tasks</h2>
            </div>
            <div class="card-body">
              <div class="card-body-header">
                <h5 data-toggle="modal" data-target="#modalEditPhaseName">Wireframes</h5>
                <a class="icon-emoji icon-emoji-none" data-toggle="modal" href="#modalAddEmojiRating">
                  <span>⚪</span>
                </a>
                <!-- <a class="icon-emoji icon-emoji-angry" data-toggle="modal" href="#modalAddEmojiRating">
                  <span>😡</span>
                </a> -->
              </div>
              <div class="table-responsive table-no-header table-no-footer">
                <table id="dataTable1" class="table">
                  <thead>
                    <tr>
                      <th>Task</th>
                      <th>Progress</th>
                      <th>Status</th>
                      <th class="text-center">Start</th>
                      <th class="text-center">End</th>
                      <th>Team</th>
                      <th class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="20%" class="td-link" data-toggle="modal" data-target="#modalEditTaskName">
                        <span>Creation</span></td>
                      <td width="25%" class="td-link" data-toggle="modal" data-target="#modalEditProgress">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                          <div class="progress-bar-indicator" style="left: 50%"></div>
                        </div>
                      </td>
                      <td width="10%"><span class="badge badge-progress bg-orange">At Risk</span></td>
                      <td width="15%" class="text-center td-link" data-toggle="modal" data-target="#modalEditStartDate">
                        <span>16 Jun 2019</span></td>
                      <td width="15%" class="text-center td-link" data-toggle="modal" data-target="#modalEditEndDate">
                        <span>16 Jun 2019</span></td>
                      <td width="10%" class="td-link"><span>Indra</span></td>
                      <td width="5%" class="text-center"><a href="#modalAddNote" data-toggle="modal"><i
                            class="far fa-ballot"></i></a></td>
                    </tr>
                    <tr>
                      <td width="20%" class="td-link"><span>Feedback & Revision</span></td>
                      <td width="25%" class="td-link">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="0"
                            aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </td>
                      <td width="10%"><span class="badge badge-progress bg-gray-50">-</span></td>
                      <td width="15%" class="text-center td-link">
                        <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control bg-transparent border-0 text-center" value="06-17-2019"
                            id="data-date">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                        </div>
                      </td>
                      <td width="15%" class="text-center td-link"><span>16 Jun 2019</span></td>
                      <td width="10%" class="td-link"><span>Indra</span></td>
                      <td width="5%" class="text-center"><a href="#modalAddNote" data-toggle="modal"><i
                            class="far fa-ballot"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-body">
              <div class="card-body-header">
                <h5 data-toggle="modal" data-target="#modalEditPhaseName">Visual Design</h5>
                <div class="icon-emoji">
                  <span>😍</span>
                </div>
              </div>
              <div class="table-responsive table-no-header table-no-footer">
                <table id="dataTable2" class="table">
                  <thead>
                    <tr>
                      <th>Task</th>
                      <th>Progress</th>
                      <th>Status</th>
                      <th class="text-center">Start</th>
                      <th class="text-center">End</th>
                      <th>Team</th>
                      <th class="text-center"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td width="20%" class="td-link" data-toggle="modal" data-target="#modalEditTaskName">
                        <span>Creation</span></td>
                      <td width="25%" class="td-link" data-toggle="modal" data-target="#modalEditProgress">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                        </div>
                      </td>
                      <td width="10%"><span class="badge badge-progress bg-orange">At Risk</span></td>
                      <td width="15%" class="text-center td-link"><span>16 Jun 2019</span></td>
                      <td width="15%" class="text-center td-link"><span>16 Jun 2019</span></td>
                      <td width="10%" class="td-link"><span>Indra</span></td>
                      <td width="5%" class="text-center"><a href="#modalAddNote" data-toggle="modal"><i
                            class="far fa-ballot"></i></a></td>
                    </tr>
                    <tr>
                      <td width="20%" class="td-link"><span>Feedback & Revision</span></td>
                      <td width="25%" class="td-link">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">50%</div>
                        </div>
                      </td>
                      <td width="10%"><span class="badge badge-progress bg-success">💪On Fire</span></td>
                      <td width="15%" class="text-center td-link">
                        <div class="input-group date" data-provide="datepicker">
                          <input type="text" class="form-control bg-transparent border-0 text-center" value="06-17-2019"
                            id="data-date">
                          <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                          </div>
                        </div>
                      </td>
                      <td width="15%" class="text-center td-link"><span>16 Jun 2019</span></td>
                      <td width="10%" class="td-link"><span>Indra</span></td>
                      <td width="5%" class="text-center"><a href="#modalAddNote" data-toggle="modal"><i
                            class="far fa-ballot"></i></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card card-section">
            <div class="card-header">
              <h2>Log</h2>
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link" href="#">Show All</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Common</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Others</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <ul class="list-unstyled log-list">
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-ballot"></i>
                  </div>
                  <p><strong>Shanilda</strong> added notes on <strong>Wireframes - Creation</strong> task: <span>lorem
                      ipsum dolor siamet
                      adipisicin undit.</span></p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-calendar"></i>
                  </div>
                  <p><strong>Shanilda</strong> changed the end date of <strong>Wireframes - Creation</strong> task from
                    <strong>19 Jan 2019</strong> to <strong>20 Jan 2019</strong> due to <strong>delayed feedback &
                      approval</strong> with notes: <span>lorem ipsum dolor siamet
                      adipisicin undit.</span></p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon log-icon-emoji"><span>😍</span></div>
                  <p><strong>Shanilda</strong> set the emoji rating of <strong>Wireframes</strong> phase as
                    <strong>laugh (5)</strong> with notes: <span>lorem ipsum dolor siamet adipisicin undit.</span></p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-percent"></i>
                  </div>
                  <p><strong>Shanilda</strong> edited the progress of <strong>Wireframes - Creation</strong> task from <strong>10%</strong> to <strong>20%</strong>.</p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-user-friends"></i>
                  </div>
                  <p><strong>Shanilda</strong> edited the team members of <strong>Wireframes - Creation</strong> task from <strong>Indra, Luki, Hansen</strong> to <strong>Indra, Luki</strong>.</p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-file-signature"></i>
                  </div>
                  <p><strong>Shanilda</strong> edited the task name of <strong>Wireframes - Creation</strong> to <strong>Wireframes - Creation 2</strong>.</p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
                <li class="log-item">
                  <div class="log-icon">
                    <i class="far fa-signature"></i>
                  </div>
                  <p><strong>Shanilda</strong> created project <strong>Wireframes</strong>.</p>
                  <small class="log-datestamp">12 Jun 2019 13:45</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>

  <?php include $prefix . "include/footer-admin.php";?>

  <!--Modal Edit Phase Name-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditPhaseName">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit phase name</h4>
          <div class="form-group">
            <input type="text" class="form-control" value="Wireframes">
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit Task Name-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditTaskName">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit task name</h4>
          <div class="form-group">
            <input type="text" class="form-control" value="Creation">
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit Progress-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditProgress">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit progress</h4>
          <div class="input-group">
            <input type="number" class="form-control" id="validationCustomUsername" placeholder="Percentage task done"
              aria-describedby="inputGroupAppend" required value="80">
            <div class="input-group-append">
              <span class="input-group-text" id="inputGroupAppend">%</span>
            </div>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit Start Date-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditStartDate">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit start date</h4>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="">From</label>
                <div class="input-group date" data-provide="datepicker">
                  <input type="text" class="form-control from-date" id="from-date" value="16 Jun 2019" disabled>
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="">To</label>
                <div class="input-group date" data-provide="datepicker">
                  <input type="text" class="form-control to-date" id="to-date" placeholder="End Date"
                    value="16 Jun 2019">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Enter notes"></textarea>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success" data-dismiss="modal">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit End Date-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditEndDate">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit end date</h4>
          <div class="form-group">
            <div class="row">
              <div class="col-md-6">
                <label for="">From</label>
                <div class="input-group date" data-provide="datepicker">
                  <input type="text" class="form-control from-date" id="from-date" value="16 Jun 2019" disabled>
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <label for="">To</label>
                <div class="input-group date" data-provide="datepicker">
                  <input type="text" class="form-control to-date" id="to-date" placeholder="End Date"
                    value="16 Jun 2019">
                  <div class="input-group-addon">
                    <span class="glyphicon glyphicon-th"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <select class="custom-select" id="chooseClient">
              <option>Choose reason</option>
              <option>Delayed feedback & approval</option>
              <option>Additional request(s)</option>
              <option>Multiple revisions & adjustments</option>
              <option>Delayed meeting schedule</option>
              <option>Others</option>
            </select>
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Enter notes"></textarea>
          </div>
          <div class="form-group">
            <label for="">Affected Future Tasks</label>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkboxTask1">
              <label class="custom-control-label" for="checkboxTask1">Select all tasks</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkboxTask1">
              <label class="custom-control-label" for="checkboxTask1">Wireframes - Task 1</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkboxTask2">
              <label class="custom-control-label" for="checkboxTask2">Wireframes - Task 2</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkboxTask3">
              <label class="custom-control-label" for="checkboxTask3">Visual Design - Task 1</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="checkboxTask4">
              <label class="custom-control-label" for="checkboxTask4">Visual Design - Task 2</label>
            </div>
          </div>
          <hr>
          <p>All future tasks will be affected by <strong class="text-orange">4 day(s)</strong></p>
          <!-- <p>All future tasks will be affected by <strong class="text-success">- 1 day(s)</strong></p> -->
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save Changes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Add Note-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalAddNote">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Add notes</h4>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Enter notes"></textarea>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Add Emoji Rating-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalAddEmojiRating">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Add emoji rating</h4>
          <div class="emoji-selector">
            <div class="emoji-selector-item active">
              <div class="icon-emoji icon-emoji-angry">
                <span>😡</span>
              </div>
            </div>
            <div class="emoji-selector-item">
              <div class="icon-emoji icon-emoji-frown">
                <span>😰</span>
              </div>
            </div>
            <div class="emoji-selector-item">
              <div class="icon-emoji icon-emoji-meh">
                <span>😶</span>
              </div>
            </div>
            <div class="emoji-selector-item">
              <div class="icon-emoji icon-emoji-smile">
                <span>😁</span>
              </div>
            </div>
            <div class="emoji-selector-item">
              <div class="icon-emoji icon-emoji-love">
                <span>😍</span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea rows="4" class="form-control" placeholder="Enter notes"></textarea>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit Project Status-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditProjectStatus">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit Project Status</h4>
          <div class="form-group">
            <select class="custom-select">
              <option selected>Active</option>
              <option value="1">Active - Support</option>
              <option value="2">Active - Idle</option>
              <option value="3">On Hold</option>
              <option value="4">Cancelled</option>
            </select>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Modal Edit Project Timeline-->
  <div class="modal fade" tabindex="-1" role="dialog" id="modalEditProjectTimeline">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-body p-box">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
          </button>
          <h4 class="modal-title mb-3">Edit Project Timeline</h4>
          <div class="form-group">
            <select class="custom-select">
              <option selected>On Schedule</option>
              <option value="1">Delayed</option>
            </select>
          </div>
          <div class="clearfix mt-4 d-flex justify-content-end">
            <button type="button" class="btn btn-secondary mr-1" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-success">Save</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include $prefix . "include/script.php";?>

  <script>
  $('#dataTable1').DataTable();
  $('#dataTable2').DataTable();
  $(document).ready(function() {
    $('.date').datepicker()
      .on('changeDate', function(e) {
        $("#modalEditStartDate").modal("show");
      });
  });
  </script>


</body>

</html>