<?php
include '../auth/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@200&family=Montserrat:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <title>Sortmytrash</title>
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
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
    <link rel="stylesheet" href="style rincian.css" />
  </head>

  <?php

// Periksa apakah parameter id ada dalam URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Query untuk mengambil data pengaduan berdasarkan id
  $query = "SELECT * FROM tb_pengaduan WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  // Periksa apakah data ditemukan
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $deskripsi = $row['deskripsi'];
    $id = $row['id'];
    $gambar = $row['gambar'];
    $permasalahan = $row['permasalahan'];
    $status = $row['status'];

    // Tampilkan informasi pengaduan dalam tampilan yang diinginkan
    ?>
  <body>
    <nav class="navbar bg-success fixed-top">
      <div class="navbar mx-3 fs-5">
        <a href="laporan petugas.php"><i class="bi bi-arrow-left" style="color: black"></i></a>
      </div>
      <div class="mx-auto text-center">
        <p class="m-1">Laporan</p>
      </div>
    </nav>

    <div class="container pt-5 mt-3">
      <div class="card card-custom">
        <div class="card-body">
          <h5 class="card-title">Informasi Pengaduan</h5>
          <hr>
          <div class="row">
            <div class="col-md-6 mt-3">
              <div class="col-md-6 mt-5">
                <img src="../gambar pengaduan/<?php echo $gambar; ?>" alt="gambar pengaduan" class="img-fluid">
              </div>
              <p class="card-text mb-1 mt-4"><strong>Permasalahan</strong></p>
              <hr>
              <p><?php echo $permasalahan ?></p>
              <p class="card-text mb-1"><strong>deskripsi</strong></p>
<hr>
<p><?php echo $deskripsi ?></p>
<p class="card-text mb-1"><strong>Status</strong></p>
<hr>
<p><?php echo $status ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar-dark fixed-bottom my-navbar my-3">
        <div class="container-fluid text-center">
        
        <?php
        if ($status != 'Disetujui') {
            echo '<a href="../auth/notifikasi.php?id=' . $id . '" class="btn custom-btn" name="setujui">Setujui</a>';
        }
        ?>
        

        </div>
      </nav>
  </body>
  <?php
  } else {
    // Jika data tidak ditemukan
    echo "Data pengaduan tidak ditemukan.";
  }

  // Tutup koneksi
  mysqli_close($conn);
} else {
  // Jika parameter id tidak ada
  echo "Parameter id tidak ditemukan.";
}
?>
</html>