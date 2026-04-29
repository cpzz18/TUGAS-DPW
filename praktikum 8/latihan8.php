<?php 
$array = array(
    "1C" => array("udin", "ismail", "adi"),
    "1D" => array("lukman", "fajri", "mahmud")   
);

//menampilkan data array
print_r($array);
print_r($array['1D']);

//menampilkan kelas 1d dengan index 0
echo $array['1D'] [0] . "<br>";

//tampilkan fajri
echo $array['1D'] [1] . "<br>";

//tampilkan andi
echo $array['1C'] [2] . "<br>";

// data kelas kelas bisa ditulis juga dengan
$array_simple = [
    "1C" => ["udin", "ismail", "adi"],
    "1D" => ["lukman", "fajri", "mahmud"] 
];