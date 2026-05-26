<?php 
require_once 'kelas/Manusia.php';

//andi
$andi = new Manusia();
$andi->setName('Andi Prakasa');
$andi->setNik('12345743231');
$andi->setAge(25);

echo $andi->getNama() . "\n";
echo $andi->getNik() . "\n";
echo $andi->getAge() . "\n";

//budi
$Budi = new Manusia();
$Budi->setName('Budi Santoso');
$Budi->setNik('209342281');
$Budi->setAge(30);

echo $Budi->getNama() . "\n";
echo $Budi->getNik() . "\n";
echo $Budi->getAge() . "\n";

//Robbin
$Robbin = new Manusia();
$Robbin->setName("Robbin Chandra Falla Arya Ardhana");
$Robbin->setNik("123456789");
$Robbin->setAge(20);

echo $Robbin->getNama() . "\n";
echo $Robbin->getNik() . "\n";
echo $Robbin->getAge() . "\n";

//KESIMPULAN 
// setter untuk mengubah nilai properti
// getter untuk mengambil nilai properti
// protected untuk mengakses properti dari kelas turunan, tidak bisa diakses dari luar kelas