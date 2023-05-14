<?php
include '../auth/koneksi.php';

// Query untuk mengambil data pengaduan
$query = "SELECT * FROM tb_pengaduan";
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
    <link rel="stylesheet" href="style.css"/>
  </head>

  <body>
    <nav class="navbar fixed-top">
        <div class="navbar mx-3">
          <a href="../halaman beranda petugas/beranda petugas.php"><i class="bi bi-arrow-left" style="color: black;"></i></a>
        </div>
        <div class="mx-auto d-flex ">
          <p class="m-0">Laporan</p>
        </div>
      </nav>

      <div class="container pt-5 mt-3">
    <?php
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $permasalahan = $row['permasalahan'];
            $deskripsi = $row['deskripsi'];
            

            // Tampilkan data pengaduan dalam card
            echo '<div class="card my-3 py-4">';
echo '<div class="card-body d-flex flex-row justify-content-between">';
echo '<div>';
echo '<h5 class="card-title text-start">' . $permasalahan . '</h5>';
echo '<p class="card-text text-start">' . $deskripsi . '</p>';
echo '</div>';
echo '<div class="d-flex justify-content-end">';
echo '<a href="rincian_pengaduan.php?id=' . $row['id'] . '" class="btn btn-secondary ">Lihat Rincian</a>';
echo '</div>';
echo '</div>';
echo '</div>';

        }
    } else {
        echo '<p>Tidak ada riwayat pengaduan.</p>';
    }
    ?>
</div>
</div>
<style>
  body {
  font-family: "Montserrat", sans-serif;
}

.navbar {
  background-color: #bdb76b;
}

.navbar a {
  color: #000000;
}

.container {
  padding-top: 5rem;
  margin-top: 3rem;
}

.card {
  margin-top: 1.5rem;
  padding: 1rem;
}

.card-title {
  text-align: start;
}

.card-text {
  text-align: start;
}

.btn-secondary {
  color: #ffffff;
  background-color: #bdb76b;
  border-color: #bdb76b;
}

.btn-secondary:hover {
  color: #ffffff;
  background-color: #9c933c;
  border-color: #9c933c;
}

@media (max-width: 767px) {
  .navbar {
    padding: 0.5rem;
  }

  .navbar a {
    font-size: 14px;
  }

  .container {
    padding-top: 3rem;
    margin-top: 1rem;
  }

  .card {
    padding: 0.5rem;
  }

  .card-title {
    font-size: 18px;
  }

  .card-text {
    font-size: 14px;
  }

  .btn-secondary {
    font-size: 12px;
    padding: 0.5rem 1rem;
  }
}
</style>