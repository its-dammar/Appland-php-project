<?php require("connection/config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Register - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main>
    <div class="container">


      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">NiceAdmin</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">
                  <h5 class="card-title">Add User</h5>
                  <?php

                  if (isset($_POST['save'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);

                    if ($name != "" && $phone != "" && $address != "" && $email != "" && $password != "") {
                      $submit = "INSERT INTO users (name, phone, address, email, password) 
                    VALUES ('$name','$phone','$address','$email', '$password')";
                      $submit_result = mysqli_query($con, $submit);
                      if ($submit_result) {
                  ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>Data are submitted</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                      <?php
                        header("Refresh:2; url=index.php");
                      } else {
                      ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>Data are not submitted</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                      <?php
                        header("Refresh:2; url=create.php");
                      }
                    } else {
                      ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>All Fields are required</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>

                  <?php
                      header("Refresh:2; url=create.php");
                    }
                  }

                  ?>

                  <!-- Multi Columns Form -->
                  <form class="row g-3" method="POST" enctype="multipart/form-data">
                    <div class="col-md-6">
                      <label for="inputName5" class="form-label">Your Name</label>
                      <input type="text" class="form-control" id="inputName5" name="name">
                    </div>
                    <div class="col-md-6">
                      <label for="inputEmail5" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputEmail5" name="email">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPassword5" class="form-label">Password</label>
                      <input type="password" class="form-control" id="inputPassword5" name="password">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress5" class="form-label">Address</label>
                      <input type="text" class="form-control" id="inputAddres5s" name="address" placeholder="1234 Main St">
                    </div>
                    <div class="col-md-6">
                      <label for="inputPhone" class="form-label">Phone</label>
                      <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="1234 Main St">
                    </div>
                    <div class="text-center">
                      <button type="submit" name="save" class="btn btn-primary">Submit</button>
                      <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                  </form>
                  <div>
                    <a name="" id="" class="btn btn-primary" href="index.php" role="button">Login</a>
                  </div>
                  <!-- End Multi Columns Form -->

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>