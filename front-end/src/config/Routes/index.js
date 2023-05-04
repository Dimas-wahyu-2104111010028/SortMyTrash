import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'
import { Edukasi, Home, Login, Pengaduan, Riwayat, Saran, Sort } from '../../pages'
import Daftar from '../../pages/Daftar/register'

const Routingan = () => {
  return (
    <Router>
        <Routes>
            <Route path='/' element={ <Home />} />
            <Route path='/login' element={<Login />} />
            <Route path='/sortir' element= {<Sort />} />
            <Route path='/riwayat' element= {<Riwayat />}/>
            <Route path='/pengaduan' element={<Pengaduan />}/>
            <Route path='/saran' element={<Saran />} />
            <Route path='/daftar' element={<Daftar />}/>
            <Route path='/edukasiSampah' element={<Edukasi />}/>
        </Routes>
    </Router>
  )
}

export default Routingan