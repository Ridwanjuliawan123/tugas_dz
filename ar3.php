<?php

$siswa= array(
    "Ridwan" => array("Nama"=> "ridwan juliawan", "kelas" => "XI RPL 2", "Umur" => 18),
    "kamal" => array("Nama"=> "kamal", "kelas"=> "XI RPL 3", "Umur"=> 19),
    "nazel" => array("Nama"=> "nazel", "kelas"=> "XI RPL 4", "Umur"=> 20) 
);

echo "informasi 1<br>";
echo "Nama:" . $siswa["Ridwan"]["Nama"]."<br>";
echo "kelas" . $siswa["Ridwan"]["kelas"]."<br>";
echo "Umur:" . $siswa["Ridwan"]["Umur"]."<br>"."<br>";


echo "informasi 2<br>";
echo "Nama:" . $siswa["kamal"]["Nama"]."<br>";
echo "kelas" . $siswa["kamal"]["kelas"]."<br>";
echo "Umur:" . $siswa["kamal"]["Umur"]."<br>"."<br>";

echo "informasi 3<br>";
echo "Nama:" . $siswa["nazel"]["Nama"]."<br>";
echo "kelas" . $siswa["nazel"]["kelas"]."<br>";
echo "Umur:" . $siswa["nazel"]["Umur"]."<br>"."<br>";
?>