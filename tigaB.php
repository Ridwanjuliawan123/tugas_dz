<?php

$Nama = "Dzikri";
$gaji_pokok = "1000000";
$tunjangan = "500000";
$potongan = "300000";
$upah_bersih;

$upah_bersih = ($gaji_pokok + $tunjangan - $potongan);

echo ("=========== MENGHITUNG UPAH KERJA =========<br><br>");
echo ("Nama = $Nama<br>");
echo ("Gaji Pokok : $gaji_pokok<br>");
echo ("Tunjangan : $tunjangan<br>");
echo ("Potongan : $potongan<br>");
echo ("Upah bersih yang diterima $Nama adalah $upah_bersih<br>");

?>