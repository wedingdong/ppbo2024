<?php

class Lingkaran
{
    const PHI = 3.14;

    public function luas($jari_jari) : float {
        return self::PHI * $jari_jari * $jari_jari;
    }

    public function keliling($jari_jari) : float {
        return 2 * self::PHI * $jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;

    public function volume($jari_jari) : float {
        return (4 / 3) * self::PHI * pow($jari_jari, 3);
    }
}

class Tabung
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi) : float {
        return self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;

    public function volume($jari_jari, $tinggi) : float {
        return (1 / 3) * self::PHI * pow($jari_jari, 2) * $tinggi;
    }
}

// Membuat objek dari class Kerucut
$nasi_tumpeng = new Kerucut();

// Menghitung volume dan menampilkan hasilnya
$jari_jari = 4;  // dalam cm
$tinggi = 10;    // dalam cm
$volume = $nasi_tumpeng->volume($jari_jari, $tinggi);

echo "Volume kerucut dengan jari-jari $jari_jari cm dan tinggi $tinggi cm adalah $volume cm³.";

?>
