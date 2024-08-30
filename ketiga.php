<?php

class Lingkaran
{
    const PHI = 3.14;
    public $jari_jari;

    public function luas() : float {
        return self::PHI*$this->jari_jari*$this->jari_jari;
    }

    public function keliling() : float {
        return 2*self::PHI*$this->jari_jari;
    }
}

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    public function volume() : float {
        return (4/3)*self::PHI*pow($this->jari_jari,3);
    }
}

class Tabung
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

class Kerucut
{
    const PHI = 3.14;
    public $jari_jari;
    public $tinggi;

    public function volume() : float {
        return (1/3)*self::PHI*pow($this->jari_jari,2)*$this->tinggi;
    }
}

// Implementasi class Lingkaran
$lingkaran = new Lingkaran();
$lingkaran->jari_jari = 5;
echo "Luas Lingkaran: " . $lingkaran->luas() . "<br>";
echo "Keliling Lingkaran: " . $lingkaran->keliling() . "<br>";

// Implementasi class Bola
$bola = new Bola();
$bola->jari_jari = 5;
echo "Volume Bola: " . $bola->volume() . "<br>";

// Implementasi class Tabung
$tabung = new Tabung();
$tabung->jari_jari = 5;
$tabung->tinggi = 10;
echo "Volume Tabung: " . $tabung->volume() . "<br>";

// Implementasi class Kerucut
$kerucut = new Kerucut();
$kerucut->jari_jari = 5;
$kerucut->tinggi = 10;
echo "Volume Kerucut: " . $kerucut->volume() . "<br>";

?>
