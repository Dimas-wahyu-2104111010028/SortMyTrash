<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>SortMyTrash</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
      <div class="navbar">
        <a href="../profil petugas/profil.php"><i class="bi bi-arrow-left py-2 ms-2 fs-5" style="color: black" ></i></a>
      </div>
      <div class="mx-auto d-flex align-items-center">
        <p class="m-0">Ubah Profil</p>
      </div>
    </nav>
</div>
    <div class="container mt-5 pt-3 mb-5 pb-5">
      
        <div class="text-center">
            <img
            src="../assets/avatar petugas.svg"
            class="img-thumbnail mx-auto rounded-circle"width="400px"
            alt="Foto Profil"
            /></div>
            <div class="container">
      <form  action="../auth/update_profil_petugas.php" method="post">
        <div class="form-group">
          <label class="form-control-placeholder" for="name_lengkap">Nama lengkap</label>
          <input type="text-truncate" id="nama_lengkap" name="nama_lengkap" class="form-control" value="<?php echo $_SESSION['nama_lengkap'];?>">
          
        </div>
        <div class="form-group">
          <label class="form-control-placeholder" for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" value="<?php echo $_SESSION['email'];?>">
        </div>
        <div class="form-group">
          <label for=" nomor_telpon">Nomor Telepon:</label>
          <input class="form-control" name="nomor_telpon" id=" nomor_telpon" value="<?php echo $_SESSION['nomor_telpon'];?>"></input>
        </div>
        
        <nav class="navbar-dark  my-navbar my-3">
            <div class="container-fluid text-center">
        <button type="submit" class="btn custom-btn" type="button">Simpan</button>
        </div>
      </form>
    </div>

    <style>
        .custom-btn {
          background-color: #bdb76b;
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
    <!-- Memuat JavaScript Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </body>
</html>