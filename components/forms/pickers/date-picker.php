<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../../../";?>
    <?php include($prefix."include/head.php"); ?>
  </head>
  <body class="app header-fixed sidebar-fixed sidebar-lg-show">
    <?php include($prefix."include/navbar-admin.php"); ?>
    <div class="app-body">
      <?php include($prefix."include/sidebar.php"); ?>
      <main class="main">
        <div class="container-fluid">
          <div class="animated fadeIn">

            <section class="at-heading">
              <div class="container container-sm">
                <h1>Date Picker</h1>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus quod delectus hic illum commodi eveniet sequi laborum, ad, officia ratione eligendi nihil deleniti nostrum debitis iure voluptates cum fugit.</p>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Bootstrap Date Picker</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus voluptate minima in, corporis a perferendis similique doloremque aliquid excepturi officia ratione ab velit nobis, accusantium. Ab eos ea porro.</p>
                  <!--http://metronic_v5.5.5.anti/theme/default/dist/default/crud/forms/widgets/bootstrap-datepicker.html-->
                </div>
              </div>
              <div class="at-example bg-light">
                <div class="container container-sm">
                  <!--START: Form General-->
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="datePicker1">Minimum Setup</label>
                          <!-- <input type="text" class="form-control datepicker" placeholder="Select date" id="datePicker1"/> -->
                          <input type="text" class="form-control" id="m_datepicker_1" placeholder="Select date" />
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="datePicker2">Input Group Setup</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select date" id="datePicker2"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="datePicker3">Enable Helper Buttons</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select date" id="m_datepicker_3"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="datePicker4">Range Picker yy</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="From" id="datePicker4Start"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="To" id="datePicker4End"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="datePicker5">Range Picker</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="From" id="datePicker5"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="datePicker6" class="invisible">Range Picker 2</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="To" id="datePicker6"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--END: Form General-->
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Date Time Picker</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus voluptate minima in, corporis a perferendis similique doloremque aliquid excepturi officia ratione ab velit nobis, accusantium. Ab eos ea porro.</p>
                  <!-- http://metronic_v5.5.5.anti/theme/default/dist/default/crud/forms/widgets/bootstrap-datetimepicker.html -->
                </div>
              </div>
              <div class="at-example bg-light">
                <div class="container container-sm">
                  <!--START: Form General-->
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dateTimePicker1">Minimum Setup</label>
                          <input type="text" class="form-control datepicker" placeholder="Select date & time" id="dateTimePicker1"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dateTimePicker2">Input Group Setup</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select date & time" id="dateTimePicker2"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dateTimePicker3">Enable Helper Buttons</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select date & time" id="dateTimePicker3"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="dateTimeRangerPicker1">Range Picker</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="From" id="dateTimeRangerPicker1A"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                            <input type="text" class="form-control datepicker" placeholder="To" id="dateTimeRangerPicker1B"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-6">
                        <div class="form-group">
                          <label for="dateTimeRangerPicker2A">Range Picker</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="From" id="dateTimeRangerPicker2A"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-6">
                        <div class="form-group">
                          <label for="dateTimeRangerPicker2B" class="invisible">Range Picker 2</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker datepicker-range" placeholder="To" id="dateTimeRangerPicker2B"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-calendar"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--END: Form General-->
                </div>
              </div>
            </section>

            <section class="at-section">
              <div class="at-subheading">
                <div class="container container-sm">
                  <h3>Time Picker</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae ducimus voluptate minima in, corporis a perferendis similique doloremque aliquid excepturi officia ratione ab velit nobis, accusantium. Ab eos ea porro.</p>
                  <!-- http://metronic_v5.5.5.anti/theme/default/dist/default/crud/forms/widgets/bootstrap-timepicker.html -->
                </div>
              </div>
              <div class="at-example bg-light">
                <div class="container container-sm">
                  <!--START: Form General-->
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="timePicker1">Minimum Setup</label>
                          <input type="text" class="form-control datepicker" placeholder="Select time" id="timePicker1"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="timePicker2">Current Time</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select time" id="timePicker2"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-clock"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="timePicker3">Default Time</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select time" id="timePicker3"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-clock"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="timePicker4">Preset Time</label>
                          <div class="input-group date">
                            <input type="text" class="form-control datepicker" placeholder="Select time" id="timePicker4"/>
                            <div class="input-group-append">
                              <span class="input-group-text">
                                <i class="fal fa-clock"></i>
                              </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="timeRangePicker1">Range Picker</label>
                            <div class="input-group date">
                              <input type="text" class="form-control datepicker" placeholder="From" id="timeRangePicker1A"/>
                              <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="fal fa-calendar"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control datepicker" placeholder="To" id="timeRangePicker1B"/>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="timeRangePicker2A">Range Picker</label>
                            <div class="input-group date">
                              <input type="text" class="form-control datepicker" placeholder="From" id="timeRangePicker2A"/>
                              <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="fal fa-calendar"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-6">
                          <div class="form-group">
                            <label for="timeRangePicker2B" class="invisible">Range Picker 2</label>
                            <div class="input-group date">
                              <input type="text" class="form-control datepicker" placeholder="To" id="timeRangePicker2B"/>
                              <div class="input-group-append">
                                <span class="input-group-text">
                                  <i class="fal fa-calendar"></i>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                  <!--END: Form General-->
                </div>
              </div>
            </section>

          </div>
        </div>
      </main>
    </div>

    <?php include($prefix."include/footer-admin.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // var datepicker = $.fn.daterangepicker.noConflict(); // return $.fn.datepicker to previously assigned value
      // $.fn.daterangepicker = datepicker;                 // give $().bootstrapDP the bootstrap-datepicker functionality

      $(document).ready(function() {
        $('#datePicker3').datepicker({
          format: "yyyy/mm/dd",
          todayHighlight: true,
          autoclose: true,
          clearBtn: true
        });
        
      });

      // $('#datePicker1').datepicker();
      $('#datePicker2').datepicker();
      // $('#datepickerInline').datepicker();
      // $('.datepicker-range').datepicker();
      // $('#datePicker5').datepicker();

      $('#m_datepicker_1, #m_datepicker_1_validate').datepicker({
        todayHighlight: true,
        orientation: "bottom left",
        templates: {
            leftArrow: '<i class="la la-angle-left"></i>',
            rightArrow: '<i class="la la-angle-right"></i>'
        }
      });

      // enable clear button 
        $('#m_datepicker_3, #m_datepicker_3_validate').datepicker({
            todayBtn: "linked",
            clearBtn: true,
            todayHighlight: true,
            templates: {
                leftArrow: '<i class="la la-angle-left"></i>',
                rightArrow: '<i class="la la-angle-right"></i>'
            }
        });

        $('#datePicker4Start').daterangepicker({
          singleDatePicker: true,
          startDate: moment().subtract(6, 'days')
        });
        $('#datePicker4End').daterangepicker({
          singleDatePicker: true,
          startDate: moment()
        });

        // datePicker4Start

    </script>

  </body>
</html>
