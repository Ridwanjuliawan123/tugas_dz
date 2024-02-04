<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM peminjaman WHERE id_peminjaman = '$id'");
foreach ($q as $dt) :
  ?>
<h1>PlajariKode - CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_update.php" method="post">
    <input type="number" name="id_peminjaman" value="<?= $dt['id_peminjaman'] ?>">
    <input type="text" name="nama_buku" value="<?= $dt['nama_buku'] ?>">
    <input type="text" name="nama_peminjam" value="<?= $dt['nama_peminjam'] ?>">
    <input type="text" name="jumlah_buku" value="<?= $dt['jumlah_buku'] ?>">
    <input type="text" name="lama_pinjam" value="<?= $dt['lama_pinjam'] ?>">
    <input type="date" name="tanggal_pinjam" value="<?= $dt['tanggal_pinjam'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}