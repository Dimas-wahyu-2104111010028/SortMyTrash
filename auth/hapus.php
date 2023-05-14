<?php
session_start();
include 'koneksi.php';

// Ambil id pengaduan dari parameter GET
$id_pengaduan = $_GET['id'];
$id_user = $_SESSION['id'];

// Ambil nama file gambar pengaduan sebelum menghapus data
$sql = "SELECT gambar FROM tb_pengaduan WHERE id = '$id_pengaduan'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$nama_gambar = $row['gambar'];

// Hapus data pengaduan dari tabel
$sql_delete = "DELETE FROM tb_pengaduan WHERE id = '$id_pengaduan'";

if (mysqli_query($conn, $sql_delete)) {
    // Hapus file gambar jika ada
    if ($nama_gambar != null) {
        $file_path = "../gambar pengaduan/" . $nama_gambar; // Ganti dengan path yang sesuai
        if (file_exists($file_path)) {
            unlink($file_path);
        }
    }
    $_SESSION['hapus_berhasil']='hapus berhasil';
    
    header("Location: ../halaman riwayat/riwayat.php");
} else {
    echo "Error: " . $sql_delete . "<br>" . mysqli_error($conn);
}

// Tutup koneksi
mysqli_close($conn);
?>
