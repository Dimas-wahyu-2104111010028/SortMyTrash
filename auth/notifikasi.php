<?php
session_start();
include 'koneksi.php';

// Ambil id pengaduan dari parameter GET
$id_pengaduan = $_GET['id'];
$id_user = $_SESSION['id'];

// Update status pengaduan menjadi "Disetujui"
$query_update = "UPDATE tb_pengaduan SET status = 'Disetujui' WHERE id = '$id_pengaduan'";
$result_update = mysqli_query($conn, $query_update);

// Jika update berhasil, tambahkan notifikasi ke dalam tabel notifikasi
if ($result_update) {
  $query_insert = "INSERT INTO tb_notifikasi (tanggal, pesan, id_user) VALUES (NOW(), 'Pengaduan telah disetujui', '$id_user')";
  $result_insert = mysqli_query($conn, $query_insert);

  // Cek apakah notifikasi berhasil ditambahkan
  if ($result_insert) {
    // Redirect ke halaman notifikasi
    header("Location: ../laporan pengaduan/laporan petugas.php");
    exit;
  } else {
    // Jika gagal menambahkan notifikasi, tampilkan pesan error
    echo "Gagal menambahkan notifikasi. Error: " . mysqli_error($conn);
  }
} else {
  // Jika gagal mengupdate status pengaduan, tampilkan pesan error
  echo "Gagal mengupdate status pengaduan. Error: " . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
