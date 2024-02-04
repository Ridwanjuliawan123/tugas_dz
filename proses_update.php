<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $id_peminjaman = $_POST['id_peminjaman'];
    $nama_buku = $_POST['nama_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
$q = $conn->query("UPDATE peminjaman SET  id_peminjaman = '$id_peminjaman', nama_buku = '$nama_buku', nama_peminjam = '$nama_peminjam', jumlah_buku = '$jumlah_buku', lama_pinjam = '$lama_pinjam', tanggal_pinjam = '$tanggal_pinjam' WHERE id_peminjaman = '$id_peminjaman'");
if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='peminjaman.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='peminjaman.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}