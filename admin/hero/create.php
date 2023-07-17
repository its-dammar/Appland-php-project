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
                $title = $_POST['title'];
                $description = $_POST['description'];

                $filename = $_FILES['dataFile']['name']; // take full file name
                $filesize = $_FILES['dataFile']['size']; // take file size
                $explode = explode(".", $filename); // array to string conversion
                $fname = strtolower(@$explode[0]);  // convert  into lowercase
                $ext = strtolower(@$explode[1]);  // convert  into lowercase
                $file = str_replace(' ', '', $fname);
                $finalname = $file . time() . '.' . $ext;

                if ($title != "" && $finalname != "") {
                  if ($filesize <= 300000) {
                    if ($ext == 'jpg' || $ext == 'png' || $ext == 'jpeg') {
                      if (move_uploaded_file($_FILES['dataFile']['tmp_name'], '../uploads/' . $finalname)) {
                        $query = "INSERT INTO hero(title,description, img) VALUES('$title','$description', '$finalname')";
                        $result = mysqli_query($con, $query);
                        if ($result) {
              ?>
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>File is submitted, Congratulation!</strong>
                          </div>

                        <?php
                           echo "<meta http-equiv=\"refresh\" content=\"1;URL=index.php\">";
                        } else {
                          header('Refresh:0');
                        ?>
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            <strong>File is not submitted, Try Again!</strong>
                          </div>

                        <?php
                        }
                      } else {
                        ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          <strong>File is not uploaded, try again!</strong>
                        </div>

                      <?php
                      }
                    } else {
                      ?>
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        <strong>File extension does not match, try again!</strong>
                      </div>

                    <?php
                    }
                  } else {
                    ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                      <strong>File size does not match, file size must be 2MB</strong>
                    </div>

                  <?php
                  }
                } else {
                  ?>
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                    <strong>All fields are required</strong>
                  </div>

              <?php
                  // header("Refresh:1");
                }
              }
              ?>

              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Image</label>
                  <input type="file" class="form-control" id="inputName5" name="dataFile">
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