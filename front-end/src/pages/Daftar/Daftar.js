import React from 'react'
import { useNavigate } from 'react-router-dom'

const Daftar = () => {
	const navigate = useNavigate()
	return (
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" ></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
							</div>
							<form action="#" class="signin-form">
								<div class="form-group">
									<input class="form-control" required />
									<label class="form-control-placeholder" for="password">Nama lengkap</label>
								</div>
								<div class="form-group mt-3">
									<input class="form-control" required />
									<label class="form-control-placeholder" for="password">Nomor Telpon</label>
								</div>
								<div class="form-group mt-3">
									<input class="form-control" required />
									<label class="form-control-placeholder" for="password">Email</label>
								</div>

								<div class="form-group mt-3">
									<input id="password-field" type="password" class="form-control" required />
									<label class="form-control-placeholder" for="password">Kata Sandi</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>
								<div class="form-group mt-3">
									<input id="password-field" type="password" class="form-control" required />
									<label class="form-control-placeholder" for="passwordp">Konfirmasi Kata Sandi</label>
									<span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
								</div>


								<div class="form-group mt-3">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3" onClick={() => navigate('/login')} >Daftar</button>
								</div>
								<p class="text-center mt-3">Sudah punya akun?<a href="/login"> Masuk disini</a></p>
							</form>
							<p class="text-center mt-3"><a data-toggle="tab" href="#signup">Masuk Sebagai Petugas</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	)
}

export default Daftar