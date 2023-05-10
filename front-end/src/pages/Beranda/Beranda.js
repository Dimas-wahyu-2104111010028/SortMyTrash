import React, { useEffect } from 'react'
import Navbar from '../../components/layouts/Navbar'
import './beranda.css'
import { auth } from '../../config/firebase/firebase'
import { useNavigate } from 'react-router-dom'
import FiturSorting from './components/FiturSorting'
import FiturEdukasi from './components/FiturEdukasi'
import FiturPengaduan from './components/FiturPengaduan'
import FiturLokasi from './components/FiturLokasi'

function Beranda() {
    const navigate = useNavigate()

    useEffect(() => {
        auth.onAuthStateChanged((user) => {
            console.log(user)
            if (!user) {
                navigate('/login')
            }
        })
    })

    return (
        <>
            <Navbar />
            <div className="containerBeranda">
                <FiturSorting />
                <FiturEdukasi />
                <FiturPengaduan />
                <FiturLokasi />
            </div>
        </>
    )
}

export default Beranda;