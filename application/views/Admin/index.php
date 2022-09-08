<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Assets CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/sidebars.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
    <title>
      <?php echo $judul?>
    </title>
  </head>
  <body>

    <!-- Sidebar Start -->

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light sidebar" style="width: 300px;">
        <a href="<?php echo base_url(); ?>Dashboard" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
          <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
          <span class="fs-4 dash-title">Ruventra</span>
        </a>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
          <li class="nav-item">
            <a href="<?php echo base_url(); ?>Admin/Dashboard" class="nav-link active" aria-current="page">
              <i class="fa-solid fa-gauge icon"></i>
              Dashboard
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>Admin/TambahEvent" class="nav-link link-dark">
              <i class="fa-regular fa-calendar-plus icon"></i>
              Tambah Event
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>Admin/EventAktif" class="nav-link link-dark">
              <i class="fa-solid fa-bullhorn icon"></i>
              Event Aktif
            </a>
          </li>
          <li>
            <a href="<?php echo base_url(); ?>Admin/Profile" class="nav-link link-dark">
              <i class="fa-regular fa-id-card icon"></i>
              Profil Admin
            </a>
          </li>
        </ul>
        <hr>
        <div class="profile row row-cols-2 row-cols-lg-2 g-2 g-lg-3">
            <div class="col">
                <h6 class="mt-1"><?php echo $user['username']?></h6>
            </div>
            <div class="col">
                <a href="<?php echo base_url(); ?>Auth/Logout" class="logout">
                  <i class="fa-solid fa-right-from-bracket"></i>
                </a>  
            </div>          
        </div>
      </div>

    <!-- Sidebar End -->

    <!-- Assets JS -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>