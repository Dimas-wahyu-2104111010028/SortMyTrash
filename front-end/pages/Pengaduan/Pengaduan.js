import React from 'react'
import Navbar from '../../components/layouts/Navbar'

const Pengaduan = () => {
    return (
        <>
            <Navbar />

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1 class="text-center">
                                FORM PENGADUAN
                            </h1>
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <nav class="nav">
                            <a href="/pengaduan" class="nav-link">Pengaduan</a>
                            <a href="/saran.html" class="nav-link">Saran & kritik</a>
                        </nav>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                KIRIM PENGADUAN
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="PERMASALAHAN" required autofocus/>
                                    </div>
                                    <div class="form-group">
                                        <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="Tulis isi laporan disini..." required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="file" accept="image/*" class="form-control" required/>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Pengaduan