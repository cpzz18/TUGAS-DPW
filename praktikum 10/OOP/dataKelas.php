<?php 
require_once 'kelas/Mahasiswa.php';

$mhs1 = new Mahasiswa('Robbin Chandra Falla A.A');
$mhs1->setNim('253307059');
$mhs1->setKelas('2B');
$mhs1->setJurusan('Teknologi Informasi');

echo "Nama: " . $mhs1->getNama() . "<br>";
echo "NIM: " . $mhs1->getNim() . "<br>";
echo "Kelas: " . $mhs1->getKelas() . "<br>";
echo "Jurusan: " . $mhs1->getJurusan() . "<br>";


?>