<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Sortmytrash</title>
<link rel="icon" href="../assets/logo Transparan.png" type="image/x-icon" />
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body class="body">
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 col-lg-5">
            <div class="wrap">
              <div
                class="img"
                style="background-image: url(images/bg-1.jpeg)"
              ></div>
              <div class="login-wrap p-4 p-md-5">
                <div class="d-flex"></div>
                <form
                  action="../auth/auth.php"
                  method="POST"
                  class="signin-form"
                >
                  <div class="form-group">
                    <input
                      type="text"
                      id="nama_lengkap"
                      name="nama_lengkap"
                      class="form-control"
                      required
                    />
                    <label class="form-control-placeholder" for="name_lengkap"
                      >Nama lengkap</label
                    >
                  </div>
                  <div class="form-group">
                    <input
                      type="text"
                      id="no_telpon"
                      name="no_telpon"
                      class="form-control"
                      required
                    />
                    <label class="form-control-placeholder" for="no_telpon"
                      >Nomor Telepon</label
                    >
                  </div>
                  <div class="form-group">
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="form-control"
                      required
                    />
                    <label class="form-control-placeholder" for="email"
                      >Email</label
                    >
                  </div>

                  <div class="form-group">
                    <input
                      type="password"
                      id="password"
                      name="password"
                      class="form-control"
                      required
                    />
                    <label class="form-control-placeholder" for="password"
                      >Kata Sandi</label
                    >
                    <span
                      toggle="#password-field"
                      class="fa fa-fw fa-eye field-icon toggle-password"
                    ></span>
                  </div>
                  <div class="form-group">
                    <input
                      type="password"
                      id="confirm_password"
                      name="confirm_password"
                      class="form-control"
                      required
                    />
                    <label
                      class="form-control-placeholder"
                      for="confirm_password"
                      >Konfirmasi Kata Sandi</label
                    >
                    <span
                      toggle="#confirm-password-field"
                      class="fa fa-fw fa-eye field-icon toggle-password"
                    ></span>
                  </div>

                  <div class="form-group">
                    <button
                      type="submit"
                      name="submit"
                      class="form-control btn btn-primary rounded submit px-3"
                    >
                      Daftar
                    </button>
                  </div>
                  <p class="text-center">
                    Sudah punya akun?<a href="index.php"> Masuk disini</a>
                  </p>
                </form>
                <p class="text-center">
                  <a data-toggle="tab" href="#">Masuk Sebagai Petugas</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
