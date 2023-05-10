import React from 'react'
import { Button, Gap } from '../../../components'
import sortir from '../../../assets/img/sortir.svg'

const FiturSorting = () => {
    return (
        <div className="fitur-sortir-container flex aic vh">
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
                    <Button title="Sortir" />
                </div>
            </div>
        </div>
    )
}

export default FiturSorting