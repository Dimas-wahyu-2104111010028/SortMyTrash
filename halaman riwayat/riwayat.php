<<<<<<< HEAD
=======
<?php
session_start();
include '../auth/koneksi.php';

// Query untuk mengambil data pengaduan
$query = "SELECT * FROM tb_pengaduan";
$result = mysqli_query($conn, $query);

// Tutup koneksi
mysqli_close($conn);
?>



<!--  -->
>>>>>>> Rizki
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
<<<<<<< HEAD
    <link rel="icon" href="../assets/logo.png" type="image/x-icon" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
=======
    <link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
>>>>>>> Rizki
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="riwayat.css">
  </head>

  <body>
<<<<<<< HEAD
    <nav class="navbar bg-success">
        <div class="navbar mx-3">
          <a href=""><i class="bi bi-arrow-left" style="color: black;"></i></a>
=======
    <nav class="navbar bg-success fixed-top">
        <div class="navbar mx-3">
          <a href="../halaman beranda/beranda.php"><i class="bi bi-arrow-left" style="color: black;"></i></a>
>>>>>>> Rizki
        </div>
        <div class="mx-auto d-flex align-items-center">
          <p class="m-0">Riwayat</p>
        </div>
      </nav>
<<<<<<< HEAD
    
      <div class="container my-3">
          <div class="card card-custom">
              <div class="card-body">
                  <p class="card-text">Penambahan edukasi sampah di terima petugas pada tanggal </p>
              </div>
          </div>
      </div>
      <nav class="navbar-dark fixed-bottom my-navbar my-3">
        <div class="container-fluid text-center">
          <button class="btn custom-btn" type="button">Hapus Riwayat</button>
        </div>
      </nav>
      
    <style>
      .custom-btn {
        background-color: #bdb76b; /* Ganti dengan warna yang diinginkan */
      }
      .card {
         border: none;
      }
      .card-custom {
        background-color: #A9A9A9;
        border-color: #F5C6CB;
        }
    .card-body {
        color:black;
        text-align: center;
        font-size: 1.2rem;
      }
    .bg-success {
        background-color: #bdb76b !important;
    }
    </style>
  </body>
</html>
=======

      <div class="container pt-5 mt-3">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $permasalahan = $row['permasalahan'];
            $deskripsi = $row['deskripsi'];
            $gambar = $row['gambar'];

            // Tampilkan data pengaduan dalam card
            echo '<div class="card my-3">';
            echo '<img src="../gambar pengaduan/' . $gambar . '" class="card-img-top mx-auto d-block" alt="Foto Laporan" style="width: 200px">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $permasalahan . '</h5>';
            echo '<p class="card-text">' . $deskripsi . '</p>';
            echo '<a href="../auth/hapus.php?id=' . $row['id'] . '" class="btn btn-secondary ">Hapus</a>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo '<p>Tidak ada riwayat pengaduan.</p>';
    }
    ?>
</div>
</div>
<script>
  <?php
if(isset($_SESSION['hapus_berhasil'])):
?>
alert('Hapus Riwayat Berhasil');
<?php endif;
unset($_SESSION['hapus_berhasil']);
?>
</script>
>>>>>>> Rizki
