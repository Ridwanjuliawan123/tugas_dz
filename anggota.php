<?php
require_once 'koneksi.php';

if(isset($_POST['submit'])){
    $id_anggota = $_POST['id_anggota'];
    $nama_anggota = $_POST['nama_anggota'];
    $kelas_anggota = $_POST['kelas_anggota'];
    $jurusan_anggota = $_POST['jurusan_anggota'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    
    $q = $conn->query("INSERT INTO anggota (id_anggota, nama_anggota, kelas_anggota, jurusan_anggota, jenis_kelamin, alamat) VALUES ('$id_anggota', ' $nama_anggota', '$kelas_anggota', '$jurusan_anggota', '$jenis_kelamin', '$alamat')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Data buku berhasil ditambahkan'); window.location.href='anggota.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data buku gagal ditambahkan'); window.location.href='anggota.php'</script>";
      }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2> MASUKAN DATA ANGGOTA </h2>
    <form method="post" action="anggota.php">
        <table>
            <tr>
                <td>Id Anggota</td>
                <td>: <input type="text" name="id_anggota" id="id_anggota" required>
                </td>
            </tr>

            <tr>
                <td>Nama Anggota</td>
                <td>: <input type="text" name="nama_anggota" id="nama_anggota" required>
                </td>
            </tr>

            <tr>
                <td>Kelas Anggota</td>
                <td>: <input type="text" name="kelas_anggota" id="kelas_anggota" required>
                </td>
            </tr>

            <tr>
                <td>Jurusan Anggota</td>
                <td>: <input type="text" name="jurusan_anggota" id="jurusan_anggota" required>
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>: <input type="text" name="jenis_kelamin"  id="jenis_kelamin" required>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="alamat" id="alamat" required>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Kirim">
                </td>
            </tr>
        </table>
    </form>


    <h3> DATA ANGGOTA </h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Id Anggota</th>
        <th>Nama Anggota</th>
        <th>Kelas Anggota</th>
        <th>Jurusan Anggota</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>Aksi</th>
        <th>Aksi</th>
    </tr>
    </form>

    <?php
// Tampilkan semua data
$q = $conn->query("SELECT * FROM anggota");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['id_anggota'] ?></td>
      <td><?= $dt['nama_anggota'] ?></td>
      <td><?= $dt['kelas_anggota'] ?></td>
      <td><?= $dt['jurusan_anggota'] ?></td>
      <td><?= $dt['jenis_kelamin'] ?></td>
      <td><?= $dt['alamat'] ?></td>
      <td><a href="delete.php?id=<?= $dt['id_anggota'] ?>">hapus</a></td>
      <td><a href="edit2.php?id=<?= $dt['id_anggota'] ?>">edit</a></td>
      <tr>
    </form>
    <?php
    endwhile;
    ?>
    </table>
    <button><a href="index.php">kembali </a></button>