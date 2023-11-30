<?php
// Membuat array dengan nilai 10 sebanyak lima kali
$nilaiArray = array(10, 10, 10, 10, 10);

// Menghitung total nilai dalam array
$totalJumlah = array_sum($nilaiArray);

// Menampilkan hasil sesuai format yang diinginkan
foreach ($nilaiArray as $nilai) {
    echo "Nilai : " . $nilai . "<br>";
}

echo "Total jumlah: " . $totalJumlah;
?>