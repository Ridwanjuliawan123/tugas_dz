<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
// perintah hapus data berdasarkan id yang dikirimkan
  $q = $conn->query("DELETE FROM admin WHERE id_admin = '$id'");
  $q = $conn->query("DELETE FROM anggota WHERE id_anggota = '$id'");
  $q = $conn->query("DELETE FROM buku WHERE kode_buku = '$id'");
  $q = $conn->query("DELETE FROM peminjaman WHERE id_peminjaman = '$id'");
// cek perintah
  if ($q) {
    // pesan apabila hapus berhasil
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  } else {
    // pesan apabila hapus gagal
    echo "<script>alert('Data berhasil dihapus'); window.location.href='index.php'</script>";
  }
} else {
  // jika mencoba akses langsung ke file ini akan diredirect ke halaman index
  header('Location:index.php');
}