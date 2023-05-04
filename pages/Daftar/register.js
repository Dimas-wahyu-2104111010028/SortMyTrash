import React from 'react'

const Daftar = () => {
  return (
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpeg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
							</div>
							<form action="#" class="signin-form">
								<div class="form-group">
									<input  class="form-control" required/>
									<label class="form-control-placeholder" for="password">Nama lengkap</label>
								</div>
								<div class="form-group">
									<input  class="form-control" required/>
									<label class="form-control-placeholder" for="password">Nomor Telpon</label>
								</div>
								<div class="form-group">
									<input  class="form-control" required/>
									<label class="form-control-placeholder" for="password">Email</label>
								</div>

								<div class="form-group">
									<input id="password-field" type="password" class="form-control" required/>
									<label class="form-control-placeholder" for="password">Kata Sandi</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group">
									<input id="password-field" type="password" class="form-control" required/>
									<label class="form-control-placeholder" for="passwordp">Konfirmasi Kata Sandi</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>


								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
								</div>
								<p class="text-center">Sudah punya akun?<a href="index.html"> Masuk disini</a></p>
							</form>
							<p class="text-center"><a data-toggle="tab" href="#signup">Masuk Sebagai Petugas</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  )
}

export default Daftar