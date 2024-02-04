<?php
require_once 'koneksi.php';

if(isset($_POST['submit'])){
    $id_peminjaman = $_POST['id_peminjaman'];
    $nama_buku = $_POST['nama_buku'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $jumlah_buku = $_POST['jumlah_buku'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $tanggal_pinjam = $_POST['tanggal_pinjam'];
    
    $q = $conn->query("INSERT INTO peminjaman (id_peminjaman, nama_buku, nama_peminjam, jumlah_buku, lama_pinjam, tanggal_pinjam) VALUES ('$id_peminjaman', ' $nama_buku', '$nama_peminjam', '$jumlah_buku', '$lama_pinjam', '$tanggal_pinjam')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Data peminjam berhasil ditambahkan'); window.location.href='peminjaman.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data peminjam gagal ditambahkan'); window.location.href='peminjaman.php'</script>";
      }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2> MASUKAN DATA PEMINJAMAN </h2>
    <form method="post" action="peminjaman.php">
        <table>
            <tr>
                <td>Id Peminjam</td>
                <td>: <input type="text" name="id_peminjam" id="id_peminjam" required>
                </td>
            </tr>

            <tr>
                <td>Nama Buku</td>
                <td>: <input type="text" name="nama_buku" id="nama_buku" required>
                </td>
            </tr>

            <tr>
                <td>Nama Peminjam</td>
                <td>: <input type="text" name="nama_peminjam" id="nama_peminjam" required>
                </td>
            </tr>

            <tr>
                <td>Banyak Buku</td>
                <td>: <input type="number" name="jumlah_buku" id="jumlah_buku" required>
                </td>
            </tr>

            <tr>
                <td>Lama Pinjam</td>
                <td>: <input type="number" name="lama_pinjam"  id="lama_pinjam" required>
                </td>
            </tr>

            <tr>
                <td>Tanggal Pinjam</td>
                <td>: <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" required>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Selesai">
                </td>
            </tr>
</table>
</form>
<!DOCTYPE html>
<html>
<body>
    
<h5> DATA PEMINJAM <h5>

    <table border="1">
    <tr>
        <th>No.</th>
        <th>Id peminjam</th>
        <th>Nama buku</th>
        <th>Nama peminjam</th>
        <th>jumlah_buku</th>
        <th>lama pinjam</th>
        <th>tanggal_pinjam</th>
        <th>aksi</th>
        <th>aksi</th>
        </tr>
</form>
        <?php
    // Tampilkan semua data
    $q = $conn->query("SELECT * FROM peminjaman");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
        <tr>
        <td><?= $no++ ?></td>
        <td><?= $dt['id_peminjaman'] ?></td>
      <td><?= $dt['nama_buku'] ?></td>
      <td><?= $dt['nama_peminjam'] ?></td>
      <td><?= $dt['jumlah_buku'] ?></td>
      <td><?= $dt['lama_pinjam'] ?></td>
      <td><?= $dt['tanggal_pinjam'] ?></td>
      <td><a href="edit.php?id=<?= $dt['id_peminjaman'] ?>">Ubah</a></td>
      <td><a href="delete.php?id=<?= $dt['id_peminjaman'] ?>">hapus</a></td>
      <tr>
    </form>
    <?php
    endwhile;
    ?>
    </table>
    <button><a href="index.php">kembali </a></button>