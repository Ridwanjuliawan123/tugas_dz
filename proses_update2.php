<?php
require_once 'koneksi.php';
if (isset($_POST['submit'])) {
    $id_anggota = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $kelas_anggota = $_POST['kelas_anggota'];
    $jurusan_anggota = $_POST['jurusan_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
$q = $conn->query("UPDATE anggota SET  id_anggota = '$id_anggota', nama_anggota = '$nama_anggota', kelas_anggota = '$kelas_anggota', jurusan_anggota = '$jurusan_anggota', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat' WHERE id_anggota = '$id_anggota'");
if ($q) {
    // pesan jika data berubah
    echo "<script>alert('Data produk berhasil diubah'); window.location.href='anggota.php'</script>";
  } else {
    // pesan jika data gagal diubah
    echo "<script>alert('Data produk gagal diubah'); window.location.href='anggota.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: index.php');
}