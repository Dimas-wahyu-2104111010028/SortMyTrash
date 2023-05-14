<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>SortMyTrash</title>
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
    <link rel="stylesheet" href="sortir.css" />
  </head>
  <body>
    <header class="fixed-top">
        <div class="d-flex align-items-center">
          <a href="../halaman beranda/beranda.php" class="position-top start">
            <i class="bi bi-arrow-left fs-1 ms-2"></i>
          </a>
        </button>
        <h1 class="text-center mx-auto">Sortir Sampah</h1>
        <button class="btn btn-outline-light me-2" type="button">
            <i class="bi bi-bell"></i>
        </div>
      </header>
    <p>
      <img src="../halaman beranda/logo beranda.svg" class="img" />
    </p>

    <div class="container-fluid mt-5">
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <form method="post" action="/SortingSampah">
            <div class="mb-3">
              <select
                class="form-select"
                aria-label="Default select example"
                id="namaSampah"
                name="namaSampah"
                required
              >
                <option selected>Pilih jenis sampah</option>
                <option value="Kertas">Sampah Kertas</option>
                <option value="plastik">Sampah Plastik</option>
                <option value="kardus">Sampah Kardus</option>
                <option value="elektronik">Sampah Elektronik</option>
                <option value="besi">Sampah Besi</option>
                <option value="aluminium">Sampah Aluminium</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">
              Cari Jenis Sampah
            </button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
    <script>
      const form = document.querySelector("form");
      const select = document.querySelector("#namaSampah");
      form.addEventListener("submit", (event) => {
        event.preventDefault();
        if (select.value === "Kertas") {
          window.location.href = "sampah kertas.php";
        } else if (select.value === "plastik") {
          window.location.href = "sampah plastik.php";
        } else if (select.value === "kardus") {
          window.location.href = "sampah kardus.php";
        } else if (select.value === "elektronik") {
          window.location.href = "sampah elektronik.php";
        } else if (select.value === "besi") {
          window.location.href = "sampah besi.php";
        } else if (select.value === "aluminium") {
          window.location.href = "sampah aluminium.php";
        } else {
          form.submit();
        }
      });
    </script>
  </body>
</html>
