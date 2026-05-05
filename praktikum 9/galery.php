<?php 
$fileList = glob('/gambar/*');
foreach ($fileList as $filename) {
    if (is_file($filename)) {
        echo $filename, "<br>";
    }
}