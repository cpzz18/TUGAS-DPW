<?php

$gajiPokok = 3250000;
$tunjangan = 1200000;
$pajak = 0.10;

//perhitungan
$gajiKotor = $gajiPokok + $tunjangan;
$potonganPajak = $gajiKotor * $pajak;
$gajiBersih = $gajiKotor - $potonganPajak;

echo "Gaji Bersih: Rp." . number_format($gajiBersih);