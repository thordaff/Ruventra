<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Assets CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/auth.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/25af777db1.js" crossorigin="anonymous"></script>
    <title>
      <?php echo $judul?>
    </title>
  </head>
  <body>
    <!-- Navbar Start -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url(); ?>Beranda">Ruventra</a>
          <a href="<?php echo base_url(); ?>Auth/Login" class="auth-text">Login</a>
        </div>
      </nav>

      <!-- Navbar End -->

      <!-- Auth Start -->

      <div class="container">
        <div class="auth">
          <div class="cardbox-reg">
            <form method="post" action="<?php echo base_url('Auth/register'); ?>" class="register">
                <div class="username">
                    <p>Username</p>
                    <input type="text" name="username" id="username" class="username-auth" value="<?php echo set_value('username'); ?>">
                    <small class="text-danger"><?php echo form_error('username'); ?></small> 
                </div>
                <div class="email">
                    <p>Email</p>
                    <input type="tex" name="email" id="email" class="email-auth">
                    <small class="text-danger"><?php echo form_error('email'); ?></small>
                </div>
                <div class="password">
                    <p>Password</p>
                    <input type="password" name="password" id="password" class="password-auth">
                    <small class="text-danger"><?php echo form_error('password'); ?></small>
                </div>
                <div class="button">
                    <button type="submit"><i class="fa-solid fa-circle-chevron-right fa-2x"></i></button>
                </div>
            </form>
          </div>
          <div class="auth-api">
            <p class="reg">Atau Daftar Dengan</p>
            <a href="#"><button class="btn"><i class="fa-brands fa-google"></i> | Google Account</button></a>
          </div>
          </div>
        </div>
      </div>

    <!-- Assets JS -->
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>