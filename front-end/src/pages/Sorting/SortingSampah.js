import { useNavigate } from "react-router-dom"
import Button from "../../components/atoms/button/button"
import './sortingsampah.css'
import { Gap } from "../../components"
import { useState } from "react"

const SortingSampah = () => {
    const Navigate = useNavigate()

    const [input, setInput] = useState('')

    const handleSubmit = (e) => {
        e.preventDefault()
        Navigate('/sortir' + input)
    }
    

    return (
        <div className="container-sorting-sampah">
            <form
            onSubmit={handleSubmit} 
            className="form-sorting-sampah">
                <div>
                    <label for="dropdown"> Masukkan Jenis Sampah
                        <select 
                        value={input}
                        onChange={(e) => setInput(e.target.value)}
                        >
                            <option value="" disabled>Pilih Jenis Sampah</option>
                            <option value="/aluminium">Aluminium</option>
                            <option value="/besi">Besi</option>
                            <option value="/elektronik">Elektronik</option>
                            <option value="/kardus">Kardus</option>
                            <option value="/kertas">Kertas</option>
                            <option value="/plastik">Plastik</option>
                        </select>
                    </label>
                </div>
                <Gap height='5'/>
                <div className="btn-sorting-sampah">
                    <Button title='Cari Jenis Sampah' />
                </div>
            </form>
        </div>
    )
}

export default SortingSampah 