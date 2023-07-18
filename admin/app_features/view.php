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
              <a name="" id="" class="btn btn-primary btn-sm mb-3" href="index.php" role="button">Manage hero section data</a>

              <?php
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $select = "SELECT *FROM hero where id =$id";
                $select_result = mysqli_query($con, $select);

                // fetch single row data
                // $select_data=mysqli_fetch_assoc($select_result);
                $select_data = $select_result->fetch_assoc();
            }
            ?>
              <!-- Multi Columns Form -->
              <form class="row g-3" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Title</label>
                  <input type="text" class="form-control" id="inputName5" name="title" readonly  value="<?php echo  $select_data['title']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="inputName5" class="form-label">Image</label>
                  <img src="<?php echo '../uploads/'. $select_data['img']; ?>"  width="100" readonly height="100">
                </div>
                <div class="col-md-12">
                  <label for="inputEmail5" class="form-label">Description</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" name="description" readonly rows="3"><?php echo  $select_data['description']; ?></textarea>
                </div>
                <div class="col-md-12">
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