<!DOCTYPE html>
<html>
  <head>
  <title>Sortmytrash</title>
<link rel="icon" href="../../assets/logo Transparan.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="ubahSandi.css" />
    <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  </head>
  <body>
  <header class="fixed-top">
   <div class="d-flex align-items-center">
     <a href="../profil.php" class="position-top start">
       <i class="bi bi-arrow-left fs-1"></i>
     </a>
   </div>
   <h1 class="text-center mx-auto">Ubah Kata Sandi</h1>
 </header>
 <img class="mt-5 pt-5" src="logo.png" alt="Logo" width="auto" height="auto" />
    <form action="#" method="post">
      <label for="password_lama">Kata Sandi Lama:</label>
      <input
        type="password"
        id="password_lama"
        name="password_lama"
      /><br /><br />
      <label for="password_baru">Kata Sandi Baru:</label>
      <input
        type="password"
        id="password_baru"
        name="password_baru"
      /><br /><br />
      <label for="konfirmasi_password_baru">Konfirmasi Kata Sandi Baru:</label>
      <input
        type="password"
        id="konfirmasi_password_baru"
        name="konfirmasi_password_baru"
      /><br /><br />
      <input type="submit" value="Simpan" />
    </form>
  </body>
</html>
