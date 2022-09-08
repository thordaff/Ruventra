<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Assets CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
    <title>Ruventra</title>
  </head>
  <body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>Beranda/Beranda">Ruventra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link home" aria-current="page" href="<?php echo base_url(); ?>Beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link event" href="<?php echo base_url(); ?>Event">Event</a>
              </li>
            </ul>
            <div class="dropdown">
              <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $user['username']; ?>
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">
                <i class="fa-solid fa-heart icon"></i>
                  Favorite
                </a></li>
                <li><a class="dropdown-item" href="#">
                <i class="fa-solid fa-user icon"> </i>
                  Profile
                </a></li>
                <li><a class="dropdown-item" href="<?php echo base_url(); ?>Auth/Logout">
                <i class="fa-solid fa-right-from-bracket icon"> </i>
                  Keluar
                </a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <!-- Navbar End -->
