<?php
/* Operator Logika yang bisa digunakan
 * == Sama Dengan           $x == $y
 * === Identical            $x === $y
 * != Tidak sama dengan     $x != $y
 * <> Tidak sama dengan     $x <> $y
 * !== Not identical        $x !== $y
 * > Lebih Besar dari       $x > $y
 * < Kurang Dari            $x < $y
 * >= Lebih besar atau Sama dengan $x >= $y
 * <= Kurang dari atau sama dengan $x <= $y
 * <=> Spaceship            $x <=> $y
*/

// Bagian If
$t = date("H");
echo "If <br>";
if ($t < 16) {
    echo "Selamat siang!";
}

echo "<br><br>";

// Bagian If dan Else
$t = date("H");
echo "If dan Else <br>";
if ($t < 20) {
    echo "Selamat siang!";
} else {
    echo "Selamat malam!";
}

echo "<br><br>";

// Bagian Nested If
echo "Nested If <br>";
if ($t < 10) {
    echo "Selamat Pagi!";
} elseif ($t < 16) {
    echo "Selamat sore!";
} else {
    echo "Selamat Malam!";
}
