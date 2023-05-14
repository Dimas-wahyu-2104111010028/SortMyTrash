<?php
include'navbar.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200&family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Sortmytrash</title>
<link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="profil.css" />
  </head>
  <body>
    <div>
      <img src="profil.jpg" alt="Foto Profil" class="profil mt-5" />
    </div>
    <form>
      <div class="row">
        <label for="name" class="col-sm-3 col-form-label text-center">Nama Lengkap:</label>
        <div class="col-sm-9">
          <span class="text-truncate"><?php echo $_SESSION['nama_lengkap'];?></span>
          <hr style="border: 1px solid #42855b" class="mt-1" />
        </div>
      </div>
      <div class="row">
        <label for="phone" class="col-sm-3 col-form-label text-center"
          >Email:</label
        >
        <div class="col-sm-9">
          <span class="text-truncate"
            ><?php echo $_SESSION['email'];?></span
          >
          <hr style="border: 1px solid #42855b" class="mt-1" />
        </div>
      </div>
    </form>
    <hr />
    <div class="container d-flex justify-content-center">
      <div class="btn-group-vertical text-center">
        <a
          href="../ubah profil/ubah profil.php"
          class="btn btn-outline-secondary mb-3"
        >
          <i class="bi bi-pencil-square"></i> Ubah Profil
        </a>

        <a
          href="halaman ubah kata sandi/ubahSandi.php"
          class="btn btn-outline-secondary mb-3"
        >
          <i class="bi bi-key"></i> Ubah Kata Sandi
        </a>

        <a
          href="../auth/logout.php"
          class="btn btn-danger mb-3"
        >
          <i class="bi bi-box-arrow-right"></i> Keluar Akun
        </a>
      </div>
    </div>
  </body>
</html>
