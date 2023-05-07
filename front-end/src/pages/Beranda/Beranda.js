import React, { useEffect } from 'react'
import Navbar from '../../components/layouts/Navbar'
import './beranda.css'
import { Button, Gap } from '../../components'
import { auth } from '../../config/firebase/firebase'
import { useNavigate } from 'react-router-dom'
import sortir from '../../assets/img/sortir.svg'


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
            <div>
                <div className="container">
                    <div className="sortir-container flex aic vh">
                        <div className='card flex column aic jcc'>
                            <div className='card-title'>
                                <h1>SORTIR SAMPAH</h1>
                            </div>
                            <Gap height="10" />
                            <div className='card-image'>
                                <img className='img' src={sortir} alt='sortir' />
                            </div>
                            <Gap height="20" />
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