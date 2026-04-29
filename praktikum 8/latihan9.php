<?php

function writeMsg($nama) {
    echo "Selamat datang " . $nama . "<br>";
}
writeMsg("Ahmad"); //pemanggilan fungsi

//fungsi dengan mengirim nilai balik
function tambah(int $angka1, int $angka2) {
    $a = $angka1 + $angka2;
    return $a; //mengirim nilai $a ke pemanggil
}
$hasil = tambah(1, 2);
echo ($hasil);