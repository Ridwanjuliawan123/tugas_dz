<?php
require_once 'koneksi.php';

if(isset($_POST['submit'])){
    $kode_buku = $_POST['kode_buku'];
    $nama_buku = $_POST['nama_buku'];
    $nama_penerbit = $_POST['nama_penerbit'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $tahun_terbit = $_POST['tahun_terbit'];
    $jenis_buku = $_POST['jenis_buku'];
    
    $q = $conn->query("INSERT INTO buku (kode_buku, nama_buku, nama_penerbit, jumlah_buku, tahun_terbit, jenis_buku) VALUES ('$kode_buku', ' $nama_buku', '$nama_penerbit', '$jumlah_buku', '$tahun_terbit', '$jenis_buku')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Data buku berhasil ditambahkan'); window.location.href='index.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data buku gagal ditambahkan'); window.location.href='index.php'</script>";
      }
}


?>

<!DOCTYPE html>
<html>
<body>
    <h2> MASUKAN DATA BUKU </h2>
    <form method="post" action="buku.php">
        <table>

            <tr>
                <td>Kode Buku</td>
                <td>: <input type="text" name="kode_buku"required>
                </td>
            </tr>

            <tr>
                <td>Nama Buku</td>
                <td>: <input type="text" name="nama_buku"required>
                </td>
            </tr>

            <tr>
                <td>Nama Penerbit</td>
                <td>: <input type="text" name="nama_penerbit"required>
                </td>
            </tr>

            <tr>
                <td>Jumlah Buku</td>
                <td>: <input type="number" name="jumlah_buku"required>
                </td>
            </tr>

            <tr>
                <td>Tahun terbit</td>
                <td>: <input type="date" name="tahun_terbit"required>
                </td>
            </tr>

            <tr>
                <td>Jenis Buku</td>
                <td>: <input type="text" name="jenis_buku"required>
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" name="submit" value="Selesai">
                </td>
            </tr>

        </table>
    </form>
    <h5> DATA PEMINJAM <h5>

<table border="1">
<tr>
    <th>No.</th>
    <th>kode_buku</th>
    <th>Nama_buku</th>
    <th>Nama_Penerbit</th>
    <th>jumlah_buku</th>
    <th>tahun_terbit</th>
    <th>jenis_buku</th>
    <th>aksi</th>
    <th>aksi</th>
    </tr>
</form>
    <?php
// Tampilkan semua data
$q = $conn->query("SELECT * FROM buku");
$no = 1; // nomor urut
while ($dt = $q->fetch_assoc()) :
?>
    <tr>
    <td><?= $no++ ?></td>
    <td><?= $dt['kode_buku'] ?></td>
  <td><?= $dt['nama_buku'] ?></td>
  <td><?= $dt['nama_penerbit'] ?></td>
  <td><?= $dt['jumlah_buku'] ?></td>
  <td><?= $dt['tahun_terbit'] ?></td>
  <td><?= $dt['jenis_buku'] ?></td>
  <td><a href="delete.php?id=<?= $dt['kode_buku'] ?>">hapus</a></td>
  <td><a href="edit3.php?id=<?= $dt['kode_buku'] ?>">edit</a></td>
  <tr>
</form>
<?php
endwhile;
?>
</table>
<button><a href="index.php">kembali </a></button>