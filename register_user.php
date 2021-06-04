<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard</title>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="AdminTemplate/vendors/feather/feather.css">
    <link rel="stylesheet" href="AdminTemplate/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="AdminTemplate/vendors/css/vendor.bundle.base.css">

    <link rel="stylesheet" href="AdminTemplate/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="AdminTemplate/images/favicon.png" />
  </head>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <!-- <img src="admin/images/logo.svg" alt="logo"> -->
                <h2>Registration</h2>
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
              <form class="pt-3" id="resgistration" onsubmit="register(event);">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email">
                  <span id="email_error" class="text-danger"></span>
                </div>
                
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                  <span id="password_error" class="text-danger"></span>
                </div>
                
                <div class="mt-3">
                  <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="SIGN UP">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="index.php" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="AdminTemplate/customjs/custom.js"></script>
  <!-- endinject -->
</body>

</html>
