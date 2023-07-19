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
                            <?php

                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];

                                $select = "SELECT *FROM settings where id =$id";
                                $select_result = mysqli_query($con, $select);

                                // fetch single row data
                                // $select_data=mysqli_fetch_assoc($select_result);
                                $select_data = $select_result->fetch_assoc();
                            }
                            ?>

                            <!-- Multi Columns Form -->
                            <form class="row g-3" method="POST" enctype="multipart/form-data">
                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Site Key</label>
                                    <input type="text" class="form-control" id="inputName5" readonly name="site_key" value="<?php echo  $select_data['site_key']; ?>">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Site Value</label>
                                    <input type="text" class="form-control" id="inputEmail5" name="site_value" value="<?php echo  $select_data['site_value']; ?>">
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