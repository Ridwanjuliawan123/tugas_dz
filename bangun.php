<?php
// ridwan dan agung
// xi rpl 2


//Persegi
echo("<h1>Rumus Persegi</h1>");

$sisi1=5;
$sisi2=5;
$keliling2=4;
$luas;
$keliling;
$luas=$sisi1 * $sisi2;
echo("Rumus  Luas Persegi= $sisi1 * $sisi2<br><br>");
echo("Luas Persegi $sisi1 * $sisi2 = $luas <br>
<br>");

$keliling=$sisi1 + $sisi2 + $sisi2 + $sisi1;

echo("Rumus Keliling persegi= 5 * 4 <br><br>");
echo("keliling Persegi $sisi1 * $keliling2 = $keliling <br><br>");

//Persegi Panjang

echo("<h1>Rumus Persegi Panjang</h1>");

$panjang = 10;
$lebar = 5;
$kel1;
$lu;

$lu =$panjang * $lebar;
$kel1=($panjang +$panjang)+($lebar+$lebar);

echo("rumus keliling persegi panjang ($panjang +$panjang)+($lebar+$lebar)=$kel1<br><br>");

echo("Keliling persegi Panjang =  $kel1<br><br>");

echo("rumus Luas Persegi Panjang $panjang * $lebar = $lu;<br><br>");

echo(" luas persegi panjang = $lu <br><br>");

   //Rumus Segitiga

   $atas = 5;
   $tinggi = 15;
   $a = 10;
   $b = 5;
   $c = 10;
   $luasegitiga = 1/2 * $atas * $tinggi;
   $kelilingsegitiga = $a + $b + $c;

   echo("<h1>Rumus Segitiga</h1>");
   
   echo("Rumus Luas = 1/2 x $atas x $tinggi<br>");
   echo("Rumus Keliling = $a + $b + $c<br>");
   echo("Luas = 1/2 x $atas x $tinggi = $luasegitiga<br>");
   echo("Keliling = $a + $b + $c = $kelilingsegitiga<br>");

     //Rumus Lingkaran
     $jari_jari = 7;
     $phi= 22/7;
     $luaslingkaran = $phi * $jari_jari * $jari_jari;
     $kelilinglingkaran = 2 * $phi * $jari_jari;
 
     echo "<h1>Rumus Lingkaran</h1>";
 
     echo "Rumus Luas = &#960 * r <sup>2</sup><br><br>";
     echo "Rumus Keliling = 2* &#960 * $jari_jari<br><br>";
     echo "Rumus Luas Lingkaran = &#960 x $jari_jari<sup>2</sup> = $luaslingkaran<br><br>";
     echo "Rumus Keliling Lingkaran = 2 x 22/7 x $jari_jari<sup>2</sup> = $kelilinglingkaran";
 

    //Rumus Trapesium
    $atra = 5;
    $btra = 9;
    $ctra = 10;
    $dtra = 9;

    $aSisi = 10;
    $bSisi = 5;
    $tSisi = 8;
    $kelilingtrapesium = $atra + $btra + $ctra + $dtra;
    $luastrapesium = 1/2 * ($aSisi + $bSisi)*$tSisi;

    echo"<h1>Rumus Trapesium</h1><br>";
    echo"Rumus Luas Trapesium = 1/2 * ($aSisi + $bSisi) * $tSisi<br>";
    echo"Rumus Keliling Trapesium = AB + BC + CD + DA<br>";
    echo"Luas = 1/2 * ($aSisi + $bSisi) * $tSisi = $luastrapesium<br>";
    echo"keliling = $atra + $btra + $ctra + $dtra = $kelilingtrapesium";


?>