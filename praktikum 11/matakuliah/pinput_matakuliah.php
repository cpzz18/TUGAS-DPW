<?php 
include '../koneksi.php';

if (isset($_POST['input'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "INSERT INTO t_matakuliah (kodeMK, namaMK, sks, jam) VALUES (?, ?, ?, ?)";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ssss", $kodeMK, $namaMK, $sks, $jam);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmatakuliah.php");
?>
