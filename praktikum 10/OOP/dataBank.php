<?php
require_once 'kelas/akunBank.php';

$data1 = new akunBank('1210930', 100000, 'Bagus Prakasa');
echo "No rekening: " . $data1->getAccountNumber() . "\n" . "<br>";
echo "Nama: " . $data1->getNama() . "\n" . "<br>";
$data1->tampilkanSaldo();
$data1->tambahUang(20000);
$data1->tampilkanSaldo();
$data1->kurangiUang(30000);
$data1->tampilkanSaldo();
$data1->hitungPajak();

echo "\n--------------------\n" . "<br>";

$data2 = new akunBank('1210931', 200000, 'Budi Santoso');
echo "No rekening: " . $data2->getAccountNumber() . "\n" . "<br>";
echo "Nama: " . $data2->getNama() . "\n" . "<br>";
$data2->tampilkanSaldo();
$data2->tambahUang(20000);
$data2->tampilkanSaldo();
$data2->kurangiUang(30000);
$data2->tampilkanSaldo();
$data2->hitungPajak();



