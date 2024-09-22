<?php
$datedefaulttimezone_set("Asia/Jakarta");
$nama = readline('Masukkan nama Anda: ');
$waktu = date('H');

echo "Halo {$nama}, sekarang pukul {$waktu}\n";