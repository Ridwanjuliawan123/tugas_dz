<?php

$tarif_tol = 100000;
$jumlah_bayar = 50000;

echo "<h2>========TIKET JALAN TOL========</h2><br>";
echo "selamat datang  di Jalan tol Subang-Bandung <br>";
echo "untuk tarifnya RP 100.000 <br>";
if ($jumlah_bayar >= $tarif_tol) {    
    echo "Selamat anda memasuki jalan tol subang-bandung<br>";
    $kembalian = $jumlah_bayar - $tarif_tol;
    echo "Kembalian: Rp. $kembalian <br>";
} else {
    echo "Mohon maaf saldo anda kurang. Mohon untuk topup terlebih dahulu <br> <br> ";
}
?>