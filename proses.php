<?php

    include "koneksi.php";

    $nama = $_POST['nama'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];

    $insert = mysqli_query($mysqli, "insert into identitas set nama='$nama', jeniskelamin='$jeniskelamin', alamat='$alamat'");

?>