<?php

//while loop 
echo "While loop <br>";
$x = 10;
while ($x >= 5) {
    echo "Nomor : $x <br>";
    $x--;
}

echo "<br>do while <br>";
//do while
$x = 1;
do {
    echo "Nomor : $x <br>";
    $x++;
} while ($x <= 5);

echo "<br> Foreach <br>";
//foreach
$colors = array("red", "green", "biru", "yello");
foreach ($colors as $value) {
    echo "- $value <br>";
}

echo "<br> For <br>";
//for
for ($x = 0; $x <= 10; $x++) {
    echo "Nomor: $x <br>";
}

echo "<br> For dengan break <br>";
//for dengan break
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
        break;
    }
    echo "Nomor : : $x <br>";
}