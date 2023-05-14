<?php
session_start();
// Sertakan file koneksi.php untuk melakukan koneksi ke database
include 'koneksi.php';

// Mengambil data yang dikirim melalui metode POST
$saran = $_POST['saran'];
$kritik = $_POST['kritik'];


    // Query untuk menyimpan data saran dan kritik
    $query = "INSERT INTO tb_saran (saran, kritik) VALUES ('$saran', '$kritik')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        // Jika data berhasil disimpan
        $_SESSION['berhasil_saran'] = 'Terima kasih atas saran dan kritik yang Anda berikan';
        header('location: ../halaman beranda/beranda.php');
        echo "Terima kasih atas saran dan kritik yang Anda berikan.";
    } else {
        // Jika terjadi kesalahan dalam menyimpan data
        echo "Terjadi kesalahan dalam menyimpan saran dan kritik.";
    }

    // Menutup koneksi database
    mysqli_close($conn);

?>
