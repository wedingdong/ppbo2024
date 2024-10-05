<?php

require_once 'vendor/autoload.php';
use App\Admin\Pegawai;

$dosen = new Pegawai();
$dosen->nama = 'Dian Prawira';
$dosen->nip = '198411132015041001';
$dosen->setNoHp(62111111);
$dosen->alamat = 'Jln Purnama';

echo "No HP Dosen: " . $dosen->getNoHp();

