<?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
$q = $conn->query("SELECT * FROM anggota WHERE id_anggota = '$id'");
foreach ($q as $dt) :
  ?>
<h1>PlajariKode - CRUD dengan PHP MySQL</h1>
  <h2>Halaman Ubah Data</h2>
<form action="proses_update2.php" method="post">
    <input type="number" name="id_anggota" value="<?= $dt['id_anggota'] ?>">
    <input type="text" name="nama_anggota" value="<?= $dt['nama_anggota'] ?>">
    <input type="text" name="kelas_anggota" value="<?= $dt['kelas_anggota'] ?>">
    <input type="text" name="jurusan_anggota" value="<?= $dt['jurusan_anggota'] ?>">
    <input type="text" name="jenis_kelamin" value="<?= $dt['jenis_kelamin'] ?>">
    <input type="date" name="alamat" value="<?= $dt['alamat'] ?>">
    <input type="submit" name="submit" value="Ubah Data">
  </form>
<?php
  endforeach;
}