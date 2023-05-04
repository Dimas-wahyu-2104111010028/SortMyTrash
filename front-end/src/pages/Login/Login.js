import React from 'react'
import {useNavigate} from 'react-router-dom'

const Login = () => {
  const navigate = useNavigate();

  return (
      <section class="ftco-section">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-7 col-lg-5">
              <div class="wrap">
                <div class="img"></div>
                <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                  </div>
                  <form action="#" class="signin-form">
                    <div class="form-group">
                      <input id="email-field" type="email" class="form-control" required />
                      <label class="form-control-placeholder" for="email">Email</label>

                    </div>
                    <div class="form-group">
                      <input id="password-field" type="password" class="form-control" required />
                      <label class="form-control-placeholder" for="password">Kata Sandi</label>
                      <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="form-control btn btn-primary rounded submit px-3" onClick={() => navigate('/')}>Masuk</button>
                    </div>
                    <p class="text-center">Belum punya akun? <a href="/daftar">Daftar disini</a></p>
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

export default Login