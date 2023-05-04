import Book from '../../assets/img/book.png'
import Lapor from '../../assets/img/lapor.png'
import Pengaduan from '../../assets/img/pengaduan.png'
import Sampah from '../../assets/img/sampah.png'


function MainLayouts() {
    return (
        <div class="d-flex p-2 justify-content-center align-items-center">
            <div class="card m-5 d-flex flex-column justify-content-center align-items-center" style={{ width: 18 + "rem" }}>
                <img src={ Sampah } class="card-img-top mt-4 logo" alt="Sortir" />
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title mt-5">Sortir Sampah</h5>
                    <a href="#" class="btn btn-primary mt-2">Sortir</a>
                </div>
            </div>
            <div class="card m-5 d-flex flex-column justify-content-center align-items-center" style={{ width: 18 + "rem" }}>
                <img src={ Book } class="card-img-top mt-4 logo" alt="Edukasi" />
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title mt-5">Edukasi Sampah</h5>
                    <a href="#" class="btn btn-primary mt-2">Baca</a>
                </div>
            </div>
            <div class="card m-5 d-flex flex-column justify-content-center align-items-center" style={{ width: 18 + "rem" }}>
                <img src={ Lapor } class="card-img-top mt-4 logo" alt="Lapor" />
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title mt-5">Laporkan Sampah</h5>
                    <a href="#" class="btn btn-primary mt-2">Lapor</a>
                </div>
            </div>
            <div class="card m-5 d-flex flex-column justify-content-center align-items-center" style={{ width: 18 + "rem" }}>
                <img src={ Pengaduan } class="card-img-top mt-4 logo" alt="Pengaduan" />
                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <h5 class="card-title mt-5">Pengaduan Sampah</h5>
                    <a href="#" class="btn btn-primary mt-2">Pengaduan</a>
                </div>
            </div>
        </div>
    )
}

export default MainLayouts;