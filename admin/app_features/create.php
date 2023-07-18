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
              <h5 class="card-title">Add Hero section data</h5>
              <a name="" id="" class="btn btn-primary btn-sm mb-3" href="index.php" role="button">Manage users</a>

              <?php

              if (isset($_POST['save'])) {
                $icon = $_POST['icon'];
                $title = $_POST['title'];
                $description = $_POST['description'];


                if ($icon != "" && $title != "" && $description != "") {
                  $submit = "INSERT INTO appfeatures (icon, title, description) 
      VALUES ('$icon','$title','$description')";
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
                  <label for="inputName5" class="form-label">Icon</label>
                  <input type="text" class="form-control" id="inputName5" name="icon">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title">
                </div>
                <div class="col-md-12">
                  <label for="inputEmail5" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" rows="3"></textarea>
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