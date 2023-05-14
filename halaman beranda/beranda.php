<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SortMyTrash</title>
<link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="beranda.css" />
  </head>
  <body>
    <nav class="fixed-top">
      <div class="navbar" style="background-color: #bdb76b">
        <a class="navbar-brand ms-2" href="../halaman profile/profil.php">
        <i class="bi bi-person-circle fs-3" ></i>
        </a>
        <span style="color: rgb(0, 0, 0)">Menu Utama</span>
        <a
          class="btn btn-outline-light me-2"
          type="button"
          href="../Halaman Notifikasi/notifikasi.php"
        >
          <i class="bi bi-bell"></i>
        </a>
      </div>
    </nav>
    <div class="container mt-5 pt-5">
      <div class="row">
        <div class="col-md-12 text-center">
          <p>
            <img src="logo beranda.svg" width="180px" />
          </p>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-6 col-sm-12 text-center">
          <a
            href="../halaman sortir/sortir.php"
            class="btn btn-lg btn-home mb-3 d-block"
            ><img src="gambar sortir.svg" width="60" alt="" /> Sortir Sampah</a
          >
          <a
            href="../halaman pengaduan/pengaduan.php"
            class="btn btn-lg btn-home mb-3 d-block"
            ><img src="gambar pengaduan.svg" width="60" alt="" /> Pengaduan</a
          >
          <a
            href="../halaman edukasi/edukasi.php"
            class="btn btn-lg btn-home mb-3 d-block"
            ><img src="gambar edukasi.svg" width="60" alt="" /> Edukasi
            Sampah</a
          >
          <a href="../halaman riwayat/riwayat.php" class="btn btn-lg btn-home mb-3 d-block">
            <img src="gambar riwayat.svg" width="60" alt="" /> Riwayat</a
          >
          <a
            href="../halaman lokasi pembuangan/halaman lokasi.php"
            class="btn btn-lg btn-home d-block"
            ><img src="gambar lokasi.svg" width="50" alt="" /> Lokasi
            Pembuangan</a
          >
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <style>
      @media only screen and (max-width: 768px) {
        .col-md-6 {
          width: 100%;
        }
      }
    </style>
    <script>
      <?php
      if(isset($_SESSION['pengaduan_berhasil'])):
      ?>
      alert('Pengaduan berhasil dikirim');
      <?php endif;
      unset($_SESSION['pengaduan_berhasil']);
      ?>

<?php
if(isset($_SESSION['berhasil_saran'])):
?>
alert('Terima kasih atas saran dan kritik yang Anda berikan');
<?php endif;
unset($_SESSION['berhasil_saran']);
?>
    </script>
  </body>
</html>