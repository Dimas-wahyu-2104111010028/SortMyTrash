import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import { Beranda, SortingSampah, HasilSorting, LoginUser, LokasiPembuanganUser, PengaduanUser, RiwayatUser, SaranUser, Edukasi, ProfilUser } from '../../pages'
import DaftarAkunUSer from '../../pages/daftar-akun-user/DaftarAkunUser'

const Routingan = () => {
  return (
    <Router>
        <Routes>
            <Route path='/login' element={<LoginUser />} />
            <Route path='/daftar' element={<DaftarAkunUSer />}/>
            <Route path='/' element={ <Beranda />} />
            <Route path='/sortir' element= {<SortingSampah />} />
            <Route path='/hasil-sorting' element= {<HasilSorting />} />
            <Route path='/pengaduan' element= {<PengaduanUser />} />
            <Route path='/riwayat' element= {<RiwayatUser />}/>
            <Route path='/saran' element={<SaranUser />} />
            <Route path='/edukasi-sampah' element={<Edukasi />}/>
            <Route path='/profil' element={<ProfilUser />}/>
            <Route path='/lokasi' element={<LokasiPembuanganUser />}/>
        </Routes>
    </Router>
  )
}

export default Routingan