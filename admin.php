<?php
require_once 'koneksi.php';

if(isset($_POST['submit'])){
    $id_admin = $_POST['id_admin'];
    $nama_admin = $_POST['nama_admin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $q = $conn->query("INSERT INTO admin (id_admin, nama_admin, username, password) VALUES ('$id_admin', ' $nama_admin', '$username', '$password')");

    if ($q) {
        // pesan jika data tersimpan
        echo "<script>alert('Data admin berhasil ditambahkan'); window.location.href='admin.php'</script>";
      } else {
        // pesan jika data gagal disimpan
        echo "<script>alert('Data admin gagal ditambahkan'); window.location.href='admin.php'</script>";
      }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2> MASUKAN DATA ADMIN </h2>
    <form method="post" action="admin.php">
        <table>
            <tr>
                <td>Id Admin</td>
                <td>: <input type="text" name="id_admin" id="id_admin" required>
                </td>
            </tr>

            <tr>
                <td>Nama Admin</td>
                <td>: <input type="text" name="nama_admin" id="nama_admin" required>
                </td>
            </tr>

            <tr>
                <td>Username</td>
                <td>: <input type="text" name="username" id="username" required>
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>: <input type="text" name="password" id="password" required>
                </td>
            </tr>

            <tr>
                <td><input type="submit" name="submit" value="Kirim">
                </td>
            </tr>
        </table>
    </form>

    <!DOCTYPE html>
<html>
<body>

<h3> DATA ADMIN </h3>
<table border="1">
    <tr>
        <th>No.</th>
        <th>Id Admin</th>
        <th>Nama Admin</th>
        <th>Username</th>
        <th>Password</th>
        <th>Aksi</th>
    </tr>
    </form>

    <?php
// Tampilkan semua data
$q = $conn->query("SELECT * FROM admin");
$no = 1; // nomor urut
    while ($dt = $q->fetch_assoc()) :
    ?>
<tr>  
      <td><?= $no++ ?></td>
      <td><?= $dt['id_admin'] ?></td>
      <td><?= $dt['nama_admin'] ?></td>
      <td><?= $dt['username'] ?></td>
      <td><?= $dt['password'] ?></td>
      <td><a href="delete.php?id=<?= $dt['id_admin'] ?>">Hapus</a></td>
    </tr>
<?php
    endwhile;
?>
</table>
<button><a href="index.php"> Kembali </a></button>