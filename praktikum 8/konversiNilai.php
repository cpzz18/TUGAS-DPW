<?php

$nilai = 89;

if ($nilai >= 90 || $nilai >= 100) {
    $grade = "A";
} elseif ($nilai <= 80 || $nilai >= 89) {
    $grade = "AB";
} elseif ($nilai <= 70 || $nilai >= 79) {
    $grade = "C";
} elseif ($nilai <= 60 || $nilai >= 69) {
    $grade = "BC";
} else {
    $grade = "C";
}

echo "Nilai Anda adalah: " . $nilai . "<br>" . "Grade: " . $grade;