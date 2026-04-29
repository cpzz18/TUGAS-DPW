<?php
$namaBuah = array("Nanas", "Mangga", "jeruk", "Apel", "Melon", "Manggis");
echo "saya suka" . $namaBuah[0] . ", " . $namaBuah[1] . " dan " . $namaBuah[2] . ".";

echo "<br>";
//tampilkan Mangga 
echo "Saya suka" . " " . $namaBuah[1] . "<br>";

//tampilkan jeruk
echo "Saya suka " . " " . $namaBuah[2] . "<br>";

//tampilkan Apel
echo "Saya suka" . " " . $namaBuah[3] . "<br>";

//tampilkan Melon
echo "Saya suka" . " " . $namaBuah[4] . "<br>";

//array dengan spesifik index
$umur = array("Andi" => "35 Tahun", "Ben" => "37 Tahun", "Joe" => "Tahun");
$umur['ahmad'] = "50 Tahun";

echo "Umur andi adalah " . $umur['Andi'] . "<br>";
echo "Umur Ben adalah " . $umur['Ben'] . "<br>";
echo "Umur Joe adalah " . $umur['Joe'] . "<br>";
echo "Umur ahmad adalah " . $umur['ahmad'] . "<br>";