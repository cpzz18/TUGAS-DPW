<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "akademik";

$link = mysqli_connect($servername, $username, $password, $dbname);

if (!$link) {
    die("Koneksi dengan database gagal: " . mysqli_connect_errno() . " - " . mysqli_connect_error());
}