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
          <a class="navbar-brand" href="#">Ruventra</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="<?php echo base_url(); ?>Beranda">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url(); ?>Event">Event</a>
              </li>
            </ul>
            <a href="<?php echo base_url(); ?>Auth/Login" class="navbar-btn">
              Login
            </a>
          </div>
        </div>
      </nav>

      <!-- Navbar End -->