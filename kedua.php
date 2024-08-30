<?php

function luasLingkaran($jari) : float {
    return 3.14 * $jari * $jari;
}

function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}

function volumeBola($jari) : float {
    return (4/3) * 3.14 * pow($jari, 3);
}

function volumeTabung($jari, $tinggi) : float {
    return 3.14 * pow($jari, 2) * $tinggi;
}

function volumeKerucut($jari, $tinggi) : float {
    return (1/3) * 3.14 * pow($jari, 2) * $tinggi;
}

// Contoh Penggunaan Fungsi
$jari = 45;
$tinggi = 100;

echo "Luas lingkaran dengan jari-jari $jari adalah " . luasLingkaran($jari) . "\n";
echo "Keliling lingkaran dengan jari-jari $jari adalah " . kelilingLingkaran($jari) . "\n";
echo "Volume bola dengan jari-jari $jari adalah " . volumeBola($jari) . "\n";
echo "Volume tabung dengan jari-jari $jari dan tinggi $tinggi adalah " . volumeTabung($jari, $tinggi) . "\n";
echo "Volume kerucut dengan jari-jari $jari dan tinggi $tinggi adalah " . volumeKerucut($jari, $tinggi) . "\n";

?>