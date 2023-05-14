<?php
session_start();
// panggil koneksi ke database
include 'koneksi.php';

// cek apakah form telah di-submit
if (isset($_POST['submit'])) {

    // ambil nilai dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_telpon = $_POST['no_telpon'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // cek apakah password dan konfirmasi password sama
    if ($password !== $confirm_password) {
        // jika tidak sama, tampilkan pesan error
        header("Location: ../Halaman register/index.php?pesan=passwordtidaksama");
        exit();
    }

    // hash password menggunakan fungsi password_hash()
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // buat query untuk memasukkan data ke dalam database
    $query = "INSERT INTO tb_users (nama_lengkap, no_telpon, email, password) VALUES (?, ?, ?, ?)";

    // siapkan statement
// buat query untuk memasukkan data ke dalam database
$query = "INSERT INTO tb_users (nama_lengkap, no_telpon, email, password) VALUES (?, ?, ?, ?)";

// siapkan statement
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, "ssss", $nama_lengkap, $no_telpon, $email, $hashed_password);
$result = mysqli_stmt_execute($stmt);

// jalankan statement untuk menambahkan data
if ($result) {
    // jika sukses menambahkan data, redirect ke halaman login
    header("Location: ../Halaman login/index.php");
    exit();
} else {
    // jika gagal menambahkan data, tampilkan pesan error
    header("Location: ../Halaman register/index.php?pesan=databaseerror");
    exit();
}

// tutup statement
mysqli_stmt_close($stmt);

// tutup koneksi ke database
mysqli_close($conn);

}
?>
