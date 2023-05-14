<?php
session_start();
include 'koneksi.php';
// 
// Periksa apakah pengguna sudah login atau belum
// if (!isset($_SESSION['username'])) {
  // header("Location: login.php"); // Ganti login.php dengan halaman login yang sesuai
  // exit();
// }
// 
// Memeriksa apakah ada data yang dikirimkan dari form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Mengambil nilai yang dikirimkan dari form
  $id_user = $_SESSION['id'];
  $nama_lengkap = $_POST['nama_lengkap'];
  $email = $_POST['email'];
  $nomor_telepon = $_POST['nomor_telpon'];
  $bio = $_POST['bio'];

  // TODO: Lakukan validasi data jika diperlukan

  // Mengupdate data pengguna di database
  // Gantikan 'nama_host', 'nama_database', 'nama_pengguna', 'kata_sandi' sesuai dengan konfigurasi database Anda
  try {
    // Query UPDATE
    $sql = "UPDATE tb_users SET nama_lengkap = '$nama_lengkap', email = '$email', no_telpon = '$nomor_telepon', bio = '$bio' WHERE id = '$id_user'";
    $query = mysqli_query($conn, $sql);


    $_SESSION['nama_lengkap'] = $nama_lengkap;
    $_SESSION['email'] = $email;
    // Mengalihkan pengguna ke halaman profil setelah update berhasil
    header("Location: ../halaman profile/profil.php"); // Ganti profil.php dengan halaman profil yang sesuai
    exit();
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }

  // Menutup koneksi
  $conn = null;
}
?>
