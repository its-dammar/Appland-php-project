<?php require("../inc/header.php"); ?>


<body>

  <!-- ======= Header ======= -->
  <?php require("../inc/navbar.php"); ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php require("../inc/sidebar.php"); ?>

  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Form Layouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Forms</li>
          <li class="breadcrumb-item active">Layouts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add User</h5>
              <a name="" id="" class="btn btn-primary btn-sm mb-3" href="index.php" role="button">Manage users</a>

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
                    // header("Refresh:2; url=index.php");
                    echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                  } else {
                  ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <strong>Data are not submitted</strong>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                  <?php
                    // header("Refresh:2; url=create.php");
                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=create.php\">";
                  }
                } else {
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>All Fields are required</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>

              <?php
                  // header("Refresh:2; url=create.php");
                  echo "<meta http-equiv=\"refresh\" content=\"0;URL=create.php\">";
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
                <div class="col-md-12">
                  <button type="submit" name="save" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form>
              <div>
              </div>
              <!-- End Multi Columns Form -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php"); ?>