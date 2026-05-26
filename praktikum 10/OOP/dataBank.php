<?php
require_once 'kelas/akunBank.php';

$data1 = new akunBank('1210930', 100000, 'Bagus Prakasa');
$data2 = new akunBank('1210931', 200000, 'Budi Santoso');

// Tampilkan data akunBank
$data1->getAccountNumber() . "\n";
$data1->getNama() . "\n";
$data1->tampilkanSaldo() . "\n";
$data1->tambahUang(20000) . "\n";
$data1->tampilkanSaldo() . "\n";
$data1->kurangiUang(30000) . "\n";
$data1->tampilkanSaldo() . "\n";
$data1->hitungPajak() . "\n";
