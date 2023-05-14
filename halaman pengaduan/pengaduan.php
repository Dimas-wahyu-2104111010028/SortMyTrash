<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sortmytrash</title>
<link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar">
      <div class="container">
        <a href="../halaman beranda/beranda.php" class="navbar-brand d-flex align-items-center">
          <i class="bi bi-arrow-left fs-1"></i>
        </a>
        <h1 class="navbar-text mx-auto">FORM PENGADUAN</h1>
      </div>
    </nav>
    
      <div class="row mb-3">
        <div class="col-md-12">
          <nav class="nav">
            <a href="pengaduan.php" class="nav-link">Pengaduan</a>
            <a href="saran.php" class="nav-link">Saran & kritik</a>
          </nav>
        </div>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">KIRIM PENGADUAN</div>
            <div class="card-body">
            <form action="../auth/proses_pengaduan.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <input
      type="text"
      class="form-control"
      name="permasalahan"
      placeholder="PERMASALAHAN"
      required
      autofocus
    />
  </div>
  <div class="form-group">
    <textarea
      name="deskripsi"
      id=""
      cols="30"
      rows="10"
      class="form-control"
      placeholder="Tulis isi laporan disini..."
      required
    ></textarea>
  </div>
  <div class="form-group">
    <input
      type="file"
      accept="image/*"
      class="form-control"
      name="gambar"
      required
    />
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
</form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
