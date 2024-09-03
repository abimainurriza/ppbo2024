<?php

date_default_timezone_set("Asia/Jakarta");
$nama = readline("Masukan Nama Anda : ");
$waktu = date("H:i");
// mengubah jam ke dalam bentuk integer
$jam = (int)date("H");

// selection
if ($jam >= 5 && $jam < 11) {
     echo "Selamat Pagi, {$nama} sekarang pukul {$waktu}\n";
 } elseif ($jam >= 11 && $jam < 15) {
     echo "Selamat Siang, {$nama} sekarang pukul {$waktu}\n";
 } elseif ($jam >= 15 && $jam < 19) {
     echo "Selamat Sore, {$nama} sekarang pukul {$waktu}\n";
 } else {
     echo "Selamat Malam, {$nama} sekarang pukul {$waktu}\n";
 }