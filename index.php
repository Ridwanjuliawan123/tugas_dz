<?php
require_once 'koneksi.php';

?>

<!DOCTYPE html>
<html>
    <style>
        .menu {
            display:flex;
        } 

        .menu>ul {
            display:flex;
            align-items:center;
            list-style-type:none;
            gap:20px;
        }

        .menu>ul>li>a{
            text-decoration:none;
            color:black;
            font-weight:bold;
            background-color:grey;
            padding:10px;
            border-radius:10px;
        }
    </style>
    <body>
        <h2> SELAMAT DATANG DI PERPUSTAKAAN SMKN 1 SUBANG </h2>
        <h4> Silahkan klik menu di bawah </h4>
        <div class="menu">
            <ul class="list_menu">
                <li><a href="peminjaman.php">Peminjaman</a></li>
                <li><a href="buku.php">Buku</a></li>
                <li><a href="anggota.php">Anggota</a></li>
                <li><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </body>
</html>