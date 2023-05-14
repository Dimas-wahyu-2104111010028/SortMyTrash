<?php
session_start();
include 'koneksi.php';

if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $query = "SELECT * FROM tb_users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if(password_verify($password, $row['password'])) {
            // Jika kredensial sesuai, arahkan ke halaman utama
            $_SESSION['email'] = $row['email'];
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
            $_SESSION['nomor_telpon'] = $row['no_telpon'];
            $_SESSION['bio'] = $row['bio'];
            $_SESSION['id'] = $row['id'];
            header("location: ../halaman beranda/beranda.php");
            exit();
        } else {
            // Password salah
            header("location:../Halaman login/index.php?pesan=error&login_error=password_salah");
            exit();
        }
    } else {
        // Email tidak ditemukan
        header("location:../Halaman login/index.php?pesan=error&login_error=email_tidak_ditemukan");
        exit();
    }
} 
?>
