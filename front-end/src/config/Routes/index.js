import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import { Beranda, Edukasi, Login, Pengaduan, Profil, Riwayat, Saran, SortingSampah, HasilSorting } from '../../pages'
import Daftar from '../../pages/Daftar/Daftar'
import UbahSandi from '../../pages/UbahSandi/ubahSandi'

const Routingan = () => {
  return (
    <Router>
        <Routes>
            <Route path='/login' element={<Login />} />
            <Route path='/daftar' element={<Daftar />}/>
            <Route path='/' element={ <Beranda />} />
            <Route path='/sortir' element= {<SortingSampah />} />
            <Route path='/hasil-sorting' element= {<HasilSorting />} />
            <Route path='/riwayat' element= {<Riwayat />}/>
            <Route path='/pengaduan' element={<Pengaduan />}/>
            <Route path='/saran' element={<Saran />} />
            <Route path='/edukasiSampah' element={<Edukasi />}/>
            <Route path='/profil' element={<Profil />}/>
            <Route path='/ubahSandi' element={<UbahSandi />}/>
        </Routes>
    </Router>
  )
}

export default Routingan