<?php

// 1. Cetak bilangan ganjil dari 5 sampai 100 menggunakan perulangan
for ($i = 5; $i <= 100; $i++) {
  if ($i % 2 == 1) {
    echo "$i <br>" . PHP_EOL;
    
  }
} 
echo '<br> <br>';

// 2. Cetak bilangan kelipatan 8 dari 0 sampai 100 menggunakan perulangan
for ($i = 0; $i <= 100; $i += 8) {
  echo "$i <br>" . PHP_EOL;
  
}
echo '<br> <br>';


// 3. Cetak kalimat berikut menggunakan perulangan
// LOOPING SATU
for ($i = 2; $i <= 20; $i += 2) {
  echo $i . " - aku jago koding <br> " . PHP_EOL;
}


// LOOPING DUA
for ($i = 19; $i >= 1; $i -=2) {
    if ($i % 1 == 0) {
      echo $i . " - aku seorang web developer <br>" . PHP_EOL;
     
    }
  }
  echo '<br> <br>';
 

// 4. Cetak kalimat berikut menggunakan perulangan dengan kondisi
// a. Jika angka ganjil maka tampilkan "Hoby aku adalah koding"
// b. jika angka genap maka tampilkan "Aku sangat sengang koding"
// c. Jika itu ganjil dan kelipatan 3 maka tampilkan "Aku seorang Programmer"
for ($i = 1; $i <= 100; $i++) {
  if ($i % 2 == 1) {
    if ($i % 3 == 0) {
      echo $i . ". Aku seorang Programmer <br>" . PHP_EOL;
    } else {
      echo $i . ". Hoby aku adalah koding <br>" . PHP_EOL;
    }
  } else {
    echo $i . ". Aku sangat senang koding <br>" . PHP_EOL;
  }
}

?>