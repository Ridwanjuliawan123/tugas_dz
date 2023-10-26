 <?php

 $Nama = "Dzikri";
 $Uang = 100000;

 echo ("===========MASUK TIKET DUFAN=========<br><br>");
 echo ("Nama : $Nama<br>");
 echo ("Selamat Datang di Dufan, untuk masuk ke dalam harganya 500000<br>");
 echo ("Uang Kamu : $Uang<br>");
 if ($Uang > 50000){
     echo ("Selamat $Nama kamu bisa memasuki kawasan Dufan, selamat bersenang-senang");
 }else{
     echo ("Maaf $Nama kamu tidak bisa masuk Dufan, untuk harga tiketnya Rp.500000");
 }
?>