<?php

$umur3 = 9;
$nama3 = "ridwan";
$tiket = 1;

echo("=====STADION GELORA BUNG KARNO=====<br>");
echo("=====INDONESIA VS ARGENTINA=====<br>");
echo("Nama : $nama3<br>");
echo("Umur : $umur3<br>");
echo("Silahkan pilih tiket<br>");
echo("1. VVIP<br>");
echo("2. VIP<br>");
echo("3. REGULER<br>");
echo("pilih tiket : $tiket<br>");
if($umur3 < 10){
    echo ("Mohon maaf $nama3 kamu tidak memenuhi syarat memasuki stadion");
}else{
    if($tiket === 1){
        echo("selamat $nama3 menonton pada tribun VVIP");
    }else if($tiket === 2){
        echo("selamat $nama3 menonton pada tribun VIP");
    }else if ($tiket === 3){
        echo("selamat $nama3 menonton pada tribun Reguler");
    }else{
        echo("maaf tiket tidak tersedia");
    }
}



?>