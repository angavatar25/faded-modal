<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar.php"); ?>
    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="app-body-header">
          <h1>Home</h1>
          <div class="btn-placeholder">
            <a href="" class="btn btn-success">Save</a>
          </div>
        </div>
        <div class="container-fluid">
          <div class="animated fadeIn">
            <?php include($prefix."include/nav-language.php"); ?>
            <div class="portlet card">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-header">
                    <h2>Main Cover</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Image</label>
                          <div class="img-uploader clearfix">
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                          </div>
                          <small class="text-muted">Recommended image 2000 x 1500 px. Save under 50% quality in .jpg format.</small>
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="title">Title</label>
                          <input class="form-control" id="title" type="text" placeholder="Enter title">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="description">Description</label>
                          <input class="form-control" id="description" type="text" placeholder="Enter description">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet card">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-header">
                    <h2>Quote</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="quote">Quote</label>
                          <input class="form-control" id="quote" type="text" placeholder="Enter quote">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet card">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-header">
                    <h2>Our Services</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input class="form-control" id="" type="text" placeholder="Enter title">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Description</label>
                          <input class="form-control" id="" type="text" placeholder="Enter description">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Link Label</label>
                          <input class="form-control" id="" type="text" placeholder="Enter link label">
                        </div>
                      </div>
                      <!-- <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Link URL</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fal fa-globe"></i></span>
                            </div>
                            <input type="text" class="form-control" id="" placeholder="Enter link URL" required>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet card">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-header">
                    <h2>Trusted By</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input class="form-control" id="" type="text" placeholder="Enter title">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Description</label>
                          <input class="form-control" id="" type="text" placeholder="Enter description">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Partners Logo</label>
                          <div class="img-uploader clearfix">
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                            <div class="img-uploader-item">
                              <i class="fal fa-plus"></i>
                            </div>
                          </div>
                          <small class="text-muted">Recommended image height 70 px. Save in .png format.</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="portlet card">
              <div class="row">
                <div class="col-md-4">
                  <div class="card-header">
                    <h2>Join Our Team</h2>
                  </div>
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Title</label>
                          <input class="form-control" id="" type="text" placeholder="Enter title">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Description</label>
                          <input class="form-control" id="" type="text" placeholder="Enter description">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Link Label</label>
                          <input class="form-control" id="" type="text" placeholder="Enter link label">
                        </div>
                      </div>
                      <!-- <div class="col-sm-12">
                        <div class="form-group">
                          <label for="">Link URL</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text"><i class="fal fa-globe"></i></span>
                            </div>
                            <input type="text" class="form-control" id="" placeholder="Enter link URL" required>
                          </div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>
  </body>
</html>