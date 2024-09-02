<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline("Masukan Nama Anda : ");
$waktu = date("H:i");
// mengubah jam ke dalam bentuk integer
$jam = (int)date("H");

// selection
if ($jam > 5) {
     echo "Selamat Pagi, {$nama} sekarang pukul {$waktu}\n";
} else if ($jam > 11) {
     echo "Selamat Siang, {$nama} sekarang pukul {$waktu}\n";
} else if ($jam > 15) {
     echo "Selamat Sore, {$nama} sekarang pukul {$waktu}\n";
} else if ($jam > 19) {
     echo "Selamat Malam, {$nama} sekarang pukul {$waktu}\n";
}

?>