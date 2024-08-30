<?php
date_default_timezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H:i');

if (date('H') >= 5 && date('H') < 11) {
    echo "Selamat Pagi, {$nama}, sekarang pukul {$waktu}\n";
} elseif (date('H') >= 11 && date('H') < 15) {
    echo "Selamat Siang, {$nama}, sekarang pukul {$waktu}\n";
} elseif (date('H') >= 15 && date('H') < 19) {
    echo "Selamat Sore, {$nama}, sekarang pukul {$waktu}\n";
} else {
    echo "Selamat Malam, {$nama}, sekarang pukul {$waktu}\n";
}
