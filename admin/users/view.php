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
                            <a name="" id="" class="btn btn-primary" href="index.php" role="button">manage users</a>
                            <?php

                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];

                                $select = "SELECT *FROM users where id =$id";
                                $select_result = mysqli_query($con, $select);

                                // fetch single row data
                                // $select_data=mysqli_fetch_assoc($select_result);
                                $select_data = $select_result->fetch_assoc();
                            }
                            ?>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="POST" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" readonly id="inputName5" name="name" value="<?php echo  $select_data['name']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Email</label>
                                    <input type="email" class="form-control" readonly id="inputEmail5" name="email" value="<?php echo  $select_data['email']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Address</label>
                                    <input type="text" class="form-control" readonly id="inputAddres5s" name="address" value="<?php echo  $select_data['address']; ?>" placeholder="1234 Main St">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPhone" class="form-label">Phone</label>
                                    <input type="tel" class="form-control" readonly id="inputPhone" name="phone" value="<?php echo  $select_data['phone']; ?>" placeholder="1234 Main St">
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