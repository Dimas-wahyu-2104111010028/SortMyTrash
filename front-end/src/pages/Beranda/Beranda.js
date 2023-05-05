import logo from '../../assets/img/logo.png'
import edukasi from '../../assets/img/edukasi.svg'
import pengaduan from '../../assets/img/pengaduan.svg'
import riwayat from '../../assets/img/riwayat.svg'
import sortir from '../../assets/img/sortir.svg'
import Navbar from '../../components/layouts/Navbar'
import css from './beranda.css'

function Beranda() {
    return (
        <>
        <Navbar />
        <div>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            <img src={logo} alt='logo' width="200px" />
                        </p>
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="col-md-6 col-sm-12 text-center">
                        <a href="/sortir" class="btn btn-lg btn-home mb-3 d-block"
                        ><img src={sortir} width="60" alt="Sortir Sampah" /> Sortir Sampah</a>
                        <a href="/pengaduan" class="btn btn-lg btn-home mb-3 d-block"
                        ><img src={pengaduan} width="60" alt="Pengaduan" /> Pengaduan</a>
                        <a href="/edukasiSampah" class="btn btn-lg btn-home mb-3 d-block"
                        ><img src={edukasi} width="60" alt="Edukasi Sampah" /> Edukasi Sampah</a>
                        <a href="/riwayat" class="btn btn-lg btn-home mb-3 d-block">
                            <img src={riwayat} width="60" alt="Riwayat" /> Riwayat</a>
                    </div>
                </div>
            </div>
        </div>
        
        </>
    )
}

export default Beranda;