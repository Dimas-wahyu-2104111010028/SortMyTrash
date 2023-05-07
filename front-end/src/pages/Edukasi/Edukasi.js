import React from 'react'
import plastik from '../../assets/icons/plastikIcon.png'
import aluminium from '../../assets/icons/aluminiumIcon.png'
import besi from '../../assets/icons/besiIcon.png'
import elektronik from '../../assets/icons/elektronikIcon.png'
import kardus from '../../assets/icons/kardusIcon.png'
import kertas from '../../assets/icons/kertasIcon.png'

const Edukasi = () => {
    return (
        <div class="container mt-3">
            <div class="col-md-12">
                <div class="row">
                    <nav class="col-md-12">
                        <h2>kertas</h2>
                        <img src={kertas} alt='1' />
                        <a href="kertas.html" >Pilih</a>
                        <h2>Plastik</h2>
                        <img src={plastik} alt='2' />
                        <a href="plastik.html" >Pilih</a>
                        <h2>kardus</h2>
                        <img src={kardus} alt='3' />
                        <a href="kardus.html" >Pilih</a>
                        <h2>Elektronik</h2>
                        <img src={elektronik} alt='4' />
                        <a href="elektronik.html" >Pilih</a>
                        <h2>Besi</h2>
                        <img src={besi} alt='5' />
                        <a href="besi.html" >Pilih</a>
                        <h2>aluminium</h2>
                        <img src={aluminium} alt='6' />
                        <a href="aluminium.html" >Pilih</a>
                    </nav>
                </div>
            </div>
        </div>
    )
}

export default Edukasi