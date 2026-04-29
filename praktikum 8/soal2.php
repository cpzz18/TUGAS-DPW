<?php
$total = 1387500;
echo "<h2>Jumlah uang yang diambil: Rp " . number_format($total, 0, ',', '.') . "<br><br>";

$pecahan = [100000, 50000, 20000, 10000, 5000, 2000, 500];

$sisa = $total;

echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>Pecahan</th><th>Jumlah Lembar</th><th>Total (Rp)</th></tr>";

foreach ($pecahan as $nilai) {
    $jumlah = floor($sisa / $nilai);
    $totalPecahan = $jumlah * $nilai;
    echo "<tr>";
    echo "<td>Rp " . number_format($nilai, 0, ',', '.') . "</td>";
    echo "<td>" . $jumlah . "</td>";
    echo "<td>" . number_format($totalPecahan, 0, ',', '.') . "</td>";
    echo "</tr>";
    $sisa = $sisa % $nilai;
}
echo "</table>";
?>