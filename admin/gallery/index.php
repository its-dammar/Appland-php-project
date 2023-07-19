<?php  require("../inc/header.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <?php  require("../inc/navbar.php"); ?>
<!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php  require("../inc/sidebar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Manage Users</h5>
              <a name="" id="" class="btn btn-primary" href="create.php" role="button">Create</a>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Img link</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    $select= "SELECT *FROM appfeatures";
                    $result=mysqli_query($con, $select);
                    $i=1;
                    while($user=mysqli_fetch_array($result)){
                        ?>
                        <tr>
                        <th scope="row"><?php echo $i++; ?></th>
                        <td><?php echo $user['title']; ?></td>
                        <td><?php echo $user['icon']; ?></td>
                        <td><?php echo $user['description']; ?></td>
                        <td>
                            <a name="" id="" class="btn btn-primary btn-sm " href="edit.php?id=<?php echo $user['id']; ?>" role="button">Edit</a>
                            <a name="" id="" class="btn btn-info btn-sm" href="view.php?id=<?php echo $user['id']; ?>" role="button">View</a>
                            <a name="" id="" class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $user['id']; ?>" onclick="return confirm('Do you want to delete data??')" role="button">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php  require("../inc/footer.php"); ?>
