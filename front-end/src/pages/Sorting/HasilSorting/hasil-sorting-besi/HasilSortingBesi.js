import React from 'react'
import img from '../../../../assets/img/sampah-besi.jpg'
import '../HasilSorting.css'
import { Button, Gap } from '../../../../components'

const HasilSortingBesi = () => {
    return (
        <main className='hasil-sorting-container'>
            <section className='hasil-sorting-content'>
                <img className='hasil-sorting-img' src={img} alt='besi' />
                <article>
                    <h2>Jenis sampah: Botol Plastik</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum sed sequi beatae reiciendis explicabo rem consequatur nulla iusto voluptas dolorum amet nostrum, aliquam non mollitia tenetur quia, possimus dolor aperiam hic quae voluptates et. Quasi, maiores assumenda. Enim cupiditate nam atque, hic illo delectus, impedit earum cumque quasi, aperiam rem?</p>
                </article>
            </section>
            <Gap height='10'/>
            <div class="hasil-sorting-pagination">
                <Button title='Baca Edukasi' />
                <Button title='Lapor Penjemputan' />
            </div>
        </main>
    )
}

export default HasilSortingBesi