<?php

$daftarbuah = array(
    "Apel" => array("stok" => 50, "harga" => 5000),
    "Jeruk" => array("stok" => 30, "harga" => 3000),
    "Mangga" => array("stok" => 20, "harga" => 8000),
    "Anggur" => array("stok" => 15, "harga" => 12000),
    "Pisang" => array("stok" => 40, "harga" => 2000)
);

// Menggunakan foreach untuk menampilkan nama buah, stok, dan harganya
foreach ($daftarbuah as $nama => $detail) {
    echo "Buah: " . $nama . "<br>";
    echo "Stok: " . $detail['stok'] . "<br>";
    echo "Harga: " . $detail['harga'] . " rupiah<br>";
    echo "<br>";
}
?>