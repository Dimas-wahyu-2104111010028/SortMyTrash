import React from 'react'
import { Button, Gap } from '../../../components'
import pengaduan from '../../../assets/img/pengaduan.svg'

const FiturPengaduan = () => {
    return (
        <div className="fitur-pengaduan-container flex aic vh">
            <div className='card flex column aic jcc'>
                <div className='card-title'>
                    <h1 className='card-title-h1'>PENGADUAN SAMPAH</h1>
                </div>
                <Gap height="10" />
                <div className='card-image'>
                    <img className='img' src={pengaduan} alt='sortir' />
                </div>
                <Gap height="20" />
                <div className='card-description'>
                    <Button title="Pengaduan" />
                </div>
            </div>
        </div>
    )
}

export default FiturPengaduan