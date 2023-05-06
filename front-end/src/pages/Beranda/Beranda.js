import React from 'react'
import { Link } from 'react-router-dom'

import logo from '../../assets/img/logo.png'
import edukasi from '../../assets/img/edukasi.svg'
import pengaduan from '../../assets/img/pengaduan.svg'
import riwayat from '../../assets/img/riwayat.svg'
import sortir from '../../assets/img/sortir.svg'
import Navbar from '../../components/layouts/Navbar'
import './beranda.css'
import { Button, Gap } from '../../components'

function Beranda() {
    return (
        <>
            <Navbar />
            <div>
                <div className="container">
                    <div className="sortir-container flex aic">
                        <div className='card flex column aic jcc'>
                            <div className='card-image'>
                                <img className='img' src={sortir} alt='sortir' />
                            </div>
                            <Gap height="10"/>
                            <div className='card-description'>
                                <Button title="SORTIR" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </>
    )
}

export default Beranda;