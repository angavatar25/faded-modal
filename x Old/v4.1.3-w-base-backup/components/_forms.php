<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
    <?php $prefix="../";?>
    <?php include($prefix."include/head.php"); ?>

  </head>
  <body>

    <?php include($prefix."include/navbar.php"); ?>

    <section class="at-heading">
      <div class="container container-sm">
        <h1>Forms</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci natus quod delectus hic illum commodi eveniet sequi laborum, ad, officia ratione eligendi nihil deleniti nostrum debitis iure voluptates cum fugit.</p>
      </div>
    </section>

    <section class="at-section">
      <div class="at-subheading">
        <div class="container container-sm">
          <h3>General</h3>
          <p>Avoid using <code>.modal-header</code> &amp; <code>.modal-footer</code> unless it's necessary as it will generally interfere with the flexibility of the design.</p>
          <p>The base of Antikode modal's <code>close</code> button and the size of <code>.modal-sm</code> has also been modified.</p>
        </div>
      </div>
      <div class="at-example bg-light">
        <div class="container container-sm">
          <!--START: Form General-->
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">First name</label>
                  <input type="text" class="form-control" id="" placeholder="First name" value="" required>
                  <div class="invalid-feedback">
                    Please enter first name
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="">Last name</label>
                  <input type="text" class="form-control" id="" placeholder="Last name" value="" required>
                  <div class="invalid-feedback">
                    Please enter last name
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="validationCustomUsername">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupPrepend">@</span>
                    </div>
                    <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                    <div class="invalid-feedback">
                      Please choose a username
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <div class="form-group">
                  <label for="validationCustom03">City</label>
                  <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                  <div class="invalid-feedback">
                    Please provide a valid city.
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <div class="form-group">
                  <label for="validationCustom04">State</label>
                  <div class="form-group">
                    <select class="custom-select" id="validationCustom04" required>
                      <option value="">Choose...</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <div class="invalid-feedback">
                      Please choose a valid province
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationCustom05">Zip</label>
                <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                <div class="invalid-feedback">
                  Please provide a valid zip
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label class="validationCustom04">Date of Birth</label>
                  <input type="text" class="form-control form-control-datepicker" placeholder="(MM/DD/YYYY)" id="dateOfBirth" required="">  
                  <div class="invalid-feedback">
                    Please input date
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="validationCustom05">Attachment</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <label for="validationCustom05">Gender</label>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation2">Male</label>
                  </div>
                  <div class="custom-control custom-radio">
                    <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                    <label class="custom-control-label" for="customControlValidation3">Female</label>
                    <div class="invalid-feedback">Please choose your gender</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                    <label class="custom-control-label" for="customControlValidation1">I agree to the terms &amp; conditions</label>
                    <div class="invalid-feedback">Example invalid feedback text</div>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
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
          <h3>Select 2</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, cum velit accusamus eveniet necessitatibus explicabo fugiat dicta tenetur ipsam consectetur a magni perspiciatis eaque earum, esse, iure reprehenderit minus animi.</p>
        </div>
      </div>
      <div class="at-example bg-light">
        <div class="container container-sm">
          <!--START: Select2-->
          <form class="needs-validation">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label>State</label>
                  <select class="js-example-basic-single custom-select js-states form-control" name="state">
                    <option value="AL">Alabama</option>
                    <option value="BA">Bahama</option>
                    <option value="CH">Chicago</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </div>
              </div>
              <div class="col-md-8">
                <div class="form-group">
                  <label>City</label>
                  <select class="js-example-basic-multiple custom-select" name="states[]" multiple="multiple">
                    <option value="AL">Alabama</option>
                    <option value="BA">Bahama</option>
                    <option value="CH">Chicago</option>
                    <option value="WY">Wyoming</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
          <!--END: Select2-->
        </div>
      </div>
    </section>
    
    <?php //include($prefix."include/footer.php"); ?>
    <?php include($prefix."include/script.php"); ?>

    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();

      $('#dateOfBirth').datepicker();

      // Select2 delcaration
      $('.js-example-basic-single').select2({
          placeholder: "Select a state",
          allowClear: true
      });

      $('.js-example-basic-multiple').select2();



    </script>

  </body>
</html>
