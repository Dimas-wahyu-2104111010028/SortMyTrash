<?php
include '../auth/koneksi.php';

// Query untuk mengambil data pengaduan
$query = "SELECT * FROM tb_saran";
$result = mysqli_query($conn, $query);

// Tutup koneksi
mysqli_close($conn);
?>



<!--  -->
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
    <link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="saran.css">
  </head>

  <body>
    <nav class="navbar bg-success fixed-top">
        <div class="navbar mx-3">
          <a href="../halaman beranda petugas/beranda petugas.php"><i class="bi bi-arrow-left" style="color: black;"></i></a>
        </div>
        <div class="mx-auto d-flex align-items-center">
          <p class="m-0">Saran dan kritik</p>
        </div>
      </nav>

      <div class="container pt-5 mt-3">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $saran = $row['saran'];
            $kritik = $row['kritik'];

            // Tampilkan data pengaduan dalam card
            echo '<div class="card my-3 py-4">';
echo '<div class="card-body">';
echo '<h3 class="card-title text-start">Saran</h3>';
echo '<p class="card-text text-start">' . $saran . '</p>';
echo '<hr>';
echo '<h3 class="card-title text-start">Kritik</h3>';
echo '<p class="card-text text-start">' . $kritik . '</p>';
echo '</div>';
echo '</div>';

        }
    } else {
        echo '<p>Tidak ada Kritik dan saran.</p>';
    }
    ?>
</div>


        </div>



