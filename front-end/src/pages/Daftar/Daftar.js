import React, { useState } from 'react'
import { Link, useNavigate } from 'react-router-dom'
import logo from '../../assets/img/logo.png'
import { createUserWithEmailAndPassword } from 'firebase/auth'
import { auth } from '../../config/firebase/firebase'

const Daftar = () => {
	const navigate = useNavigate()

	const [namaLengkap, setNamaLenglap] = useState('')
	const [email, setEmail] = useState('')
	const [noTelp, setNoTelp] = useState('')
	const [password, setPassword] = useState('');

	const onSubmit = async (e) => {
		e.preventDefault()

		await createUserWithEmailAndPassword(auth, email, password)
			.then((userCredential) => {
				// Signed in
				alert('Registrasi berhasil!')
				navigate("/login")
				// ...
			})
			.catch((error) => {
				const errorMessage = error.message;
				alert(errorMessage);
			});
	}
	return (
		<div className='login-container'>
			<form class="signin-form">
				<div>
					<img className='logo-sortmytrash' src={logo} alt={'SortMyTrash logo'} />
				</div>
				<div class="form-daftar">
					<input class="form-control"
						type='text'
						placeholder='Nama Lengkap'
						value={namaLengkap}
						onChange={(e) => setNamaLenglap(e.target.value)}
						required />
				</div>
				<div class="form-daftar">
					<input class="form-control"
						type='email'
						placeholder='Email'
						value={email}
						onChange={(e) => setEmail(e.target.value)}
						required />
				</div>
				<div class="form-daftar">
					<input class="form-control"
						type='text'
						placeholder='Nomor Telepon'
						value={noTelp}
						onChange={(e) => setNoTelp(e.target.value)}
						required />
				</div>

				<div class="form-daftar">
					<input
						class="form-control"
						type="password"
						value={password}
						onChange={(e) => setPassword(e.target.value)}
						placeholder='Kata Sandi'
						required />
				</div>

				<div class="form-daftar">
					<button
						class="button-daftar"
						type="submit"
						onClick={onSubmit}
					>Daftar</button>
				</div>
				<p class="desc-daftar">Sudah punya akun? <Link to='/login'>Masuk Disini</Link> </p>
			</form>
		</div>
	)
}

export default Daftar