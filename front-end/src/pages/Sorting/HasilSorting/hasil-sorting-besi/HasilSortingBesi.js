import React, { useEffect } from 'react'
import img from '../../../../assets/img/sampah-besi.jpg'
import '../HasilSorting.css'
import { Button, Gap } from '../../../../components'
import { useNavigate } from 'react-router-dom'

const HasilSortingBesi = () => {
    const Navigate = useNavigate()

    return (
        <main className='hasil-sorting-container'>
            <section className='hasil-sorting-content'>
                <img className='hasil-sorting-img' src={img} alt='besi' />
                <article>
                    <h2>Jenis sampah: Botol Plastik</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sed sequi beatae reiciendis explicabo rem consequatur nulla iusto voluptas dolorum amet nostrum, aliquam non mollitia tenetur quia, possimus dolor aperiam hic quae voluptates et. Quasi, maiores assumenda. Enim cupiditate nam atque, hic illo delectus, impedit earum cumque quasi, aperiam rem?</p>
                </article>
            </section>
            <Gap height='10' />
            <div class="hasil-sorting-pagination">
                <button className='button' style={{width: 180 + "px"}}
                onClick={() => Navigate('/edukasi-sampah')}
                >Baca Edukasi</button>
                <button className='button' style={{width: 180 + "px"}}
                onClick={() => Navigate('/pengaduan')}
                >Lapor Pengaduan</button>
            </div>
        </main>
    )
}

export default HasilSortingBesi