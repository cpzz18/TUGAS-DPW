<?php

$data = array(
    array("nama" => "Nadin", "umur" => 19),
    array("nama" => "Gavin", "umur" => 19),
    array("nama" => "Bagus", "umur" => 20),
    array("nama" => "Beni", "umur" => 20),
    array("nama" => "Fiko", "umur" => 20),
    array("nama" => "Husen", "umur" => 20),
    array("nama" => "Cindy", "umur" => 20),
    array("nama" => "Ranita", "umur" => 20),
    array("nama" => "Sam", "umur" => 20),
    array("nama" => "Afid", "umur" => 20),
    array("nama" => "Juna", "umur" => 20),
    array("nama" => "Ghiyast", "umur" => 20),
    array("nama" => "Habibi", "umur" => 23),
    array("nama" => "Sani", "umur" => 18),
    array("nama" => "Deta", "umur" => 25)
);

$json = json_encode($data, JSON_PRETTY_PRINT);

echo "<h2>Data Array (Nama dan Umur)</h2>";
echo "<h3>Data dalam format Array:</h3>";
echo "<pre>";
print_r($data);
echo "</pre>";

echo "<h3>Data dalam format JSON:</h3>";
echo "<pre>";
echo $json;
echo "</pre>";
?>