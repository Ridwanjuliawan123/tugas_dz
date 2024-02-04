<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jenis_buku = $_POST['jenis_buku'];
$q = $conn->query("UPDATE buku SET kode_buku = '$kode_buku', nama_buku = '$nama_buku', nama_penerbit = '$nama_penerbit', jumlah_buku = '$jumlah_buku', tahun_terbit = '$tahun_terbit', jenis_buku = '$jenis_buku' WHERE kode_buku = '$kode_buku'");
if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='buku.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='buku.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}