<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM buku WHERE kode_buku = '$id'");
foreach ($q as $dt) :
  ?>
<h1>PlajariKode - CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_update3.php" method="post">
    <input type="number" name="kode_buku" value="<?= $dt['kode_buku'] ?>">
    <input type="text" name="nama_buku" value="<?= $dt['nama_buku'] ?>">
    <input type="text" name="nama_penerbit" value="<?= $dt['nama_penerbit'] ?>">
    <input type="text" name="jumlah_buku" value="<?= $dt['jumlah_buku'] ?>">
    <input type="text" name="tahun_terbit" value="<?= $dt['tahun_terbit'] ?>">
    <input type="date" name="jenis_buku" value="<?= $dt['jenis_buku'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}