<?php
session_start();
// Sertakan file koneksi.php untuk melakukan koneksi ke database
include 'koneksi.php';

// Mengambil data yang dikirim melalui metode POST
$permasalahan = $_POST['permasalahan'];
$deskripsi = $_POST['deskripsi'];

// Mengunggah file gambar
$gambar = $_FILES['gambar'];
$namaGambar = $gambar['name'];
$tmpGambar = $gambar['tmp_name'];
$tujuanGambar = '../gambar pengaduan/' . $namaGambar;
move_uploaded_file($tmpGambar, $tujuanGambar);

// Query untuk menyimpan data pengaduan ke tabel pengaduan
$query = "INSERT INTO tb_pengaduan (permasalahan, deskripsi, gambar) VALUES ('$permasalahan', '$deskripsi', '$namaGambar')";

// Eksekusi query
if (mysqli_query($conn, $query)) {
    $_SESSION['pengaduan_berhasil'] = 'berhasil';
    header('location: ../halaman beranda/beranda.php');

  echo "Pengaduan berhasil dikirim.";
} else {
  echo "Terjadi kesalahan: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>