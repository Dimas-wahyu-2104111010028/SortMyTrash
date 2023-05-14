<?php
session_start();

// Menghubungkan ke sumber notifikasi (misalnya database atau API)

// Contoh pengambilan notifikasi dari database
include '../auth/koneksi.php';
$query = "SELECT * FROM tb_notifikasi";
$result = mysqli_query($conn, $query);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
  <title>Sortmytrash</title>
<link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="notifikasi.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
  </head>
  <header class="fixed-top">
    <div class="fixed-top d-flex align-items-center">
      <a
        href="../halaman beranda/beranda.php"
        class="position- top-0 start-0 py-3 ms-2"
        style="color: black"
      >
        <i class="bi bi-arrow-left fs-1"></i>
      </a>
    </div>
    <h1 class="text-center" style="color: black">Notifikasi</h1>
  </header>
  <body>
    <div class="container mt-5 pt-4">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {

          $pesan = $row['pesan'];
          $tanggal = $row['tanggal'];
          $id_user = $row['id_user'];

          echo '<div class="card mb-3">';
          echo '<div class="card-body">';
          echo '<p class="card-text">' . $pesan . '</p>';
          echo '<p class="card-text">' . $tanggal . '</p>';
          
          echo '</div>';
          echo '</div>';
        }
      } else {
        echo '<p>Tidak ada notifikasi.</p>';
      }
      ?>
    </div>
  </body>
</html>
