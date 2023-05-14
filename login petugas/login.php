<!doctype html>
<html lang="en">
<head>
	<title>SmartMyTrash</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpeg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
							</div>
							<form method="post" action="../auth/petugas.php" class="signin-form">
								<div class="form-group">
									<input type="email" name="email" class="form-control" required>
									<label class="form-control-placeholder" for="email">Email</label>
								</div>
								<div class="form-group">
									<input type="password" name="password" class="form-control" required>
									<label class="form-control-placeholder" for="password">Kata Sandi</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<button type="submit" name="submit" class="form-control btn btn-primary rounded submit px-3">Masuk</button>
								</div>
							</form>
							<p class="text-center"><a  href="../halaman login/index.php">Masuk Sebagai Masyarakat</a></p>
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

