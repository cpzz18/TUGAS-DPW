<?php
$siswa = [
    1 => ["poin" => 75, "siswa" => "adi"],
    2 => ["poin" => 80, "siswa" => "Joni"],
    3 => ["poin" => 65, "siswa" => "Jihan"],
    4 => ["poin" => 70, "siswa" => "Aya"],
    5 => ["poin" => 85, "siswa" => "Ita"],
    6 => ["poin" => 90, "siswa" => "Budi"],
    7 => ["poin" => 95, "siswa" => "Tini"],
    8 => ["poin" => 65, "siswa" => "Sari"],
];

echo "a) Tampilkan poin siswa dengan nomor urut 5  <br>";
echo "Poin: " . $siswa[1]["poin"];

echo "<br>b) Tampilkan semua nama siswa yang memiliki poin 90";
foreach ($siswa as $key => $value) {
    if ($value["poin"] == 90) {
        echo "<br>" . $value["siswa"];
    }
}

echo "<br>c) Tampilkan semua nama siswa yang memiliki poin 100 (hasil: tidak ada) *
* Gunakan perulangan dan if";
foreach ($siswa as $key => $value) {
    if ($value["poin"] == 100) {
        echo "<br>" . $value["siswa"];
    }
}
