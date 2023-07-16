  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../users/create.php">
              <i class="bi bi-circle"></i><span>Add user</span>
            </a>
          </li>
          <li>
            <a href="../users/index.php">
              <i class="bi bi-circle"></i><span>Manage User</span>
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#hero" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Hero section</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="hero" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="../hero/create.php">
              <i class="bi bi-circle"></i><span>Add Hero section data</span>
            </a>
          </li>
          <li>
            <a href="../hero/index.php">
              <i class="bi bi-circle"></i><span>Manage Hero section data</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>

  </aside><!-- End Sidebar-->
