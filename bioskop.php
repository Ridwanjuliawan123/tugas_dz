<?php


$nama = ('ridwan');
$umur = ('18');
$film = ("Air Mata di Ujung Sajadah");
$tiket = ('VVIP');
$bayar = ('100000');


if ($umur < 17) {
    echo "Maaf umur anda masih dibawah 17 tahun.";
} else {
    
    if ($film != "Air Mata di Ujung Sajadah") {
        echo "Maaf film yang anda pilih tidak tersedia.";
    } else {
        
        $hargaTiket = 0;
        switch ($tiket) {
            case "VVIP":
                $hargaTiket = 100000;
                break;
            case "VIP":
                $hargaTiket = 80000;
                break;
            case "Regular":
                $hargaTiket = 50000;
                break;
            default:
                echo "Maaf tiket yang anda pilih tidak tersedia.";
        }

        
        if ($bayar < $hargaTiket) {
            echo "Maaf uang anda kurang.";
        } else {
            
            echo "Selamat anda menonton film dengan rincian :\n <br>";
            echo "Nama: $nama\n<br>";
            echo "Umur: $umur\n<br>";
            echo "Film: Air Mata di Ujung Sajadah\n<br>";
            echo "Tiket: $tiket\n<br>";
            echo "Bayar: Rp. $bayar\n<br>";
            echo "Kembalian: Rp. " . ($bayar - $hargaTiket) . "\n<br>";
        }
    }
}

?>