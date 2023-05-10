import { auth } from '../../config/firebase/firebase'
import './navbar.css'

const Navbar = () => {
    const onLogout = () => {
        auth.signOut()
    }
    return (
        <div className="nav">
            <div className="menuu-wrap">
                <a href="/">
                    <div class="logo">
                        <p className='logo-p'>SortMyTrash</p>
                    </div>
                </a>
                <div className="menuu">
                    <a href="/sortir">
                        <div className="menu-item">
                            SORTIR
                        </div>
                    </a>
                    <a href="/edukasi-sampah">
                        <div className="menu-item">
                            EDUKASI
                        </div>
                    </a>
                    <a href="/pengaduan">
                        <div className="menu-item">
                            PENGADUAN
                        </div>
                    </a>
                    <a href="/lokasi">
                        <div className="menu-item">
                            LOKASI
                        </div>
                    </a>
                </div>
                <button className='button-logout' onClick={onLogout}>Logout</button>
            </div>
        </div>
    )
}

export default Navbar