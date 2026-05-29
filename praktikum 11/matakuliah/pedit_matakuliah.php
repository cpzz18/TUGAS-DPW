<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $kodeMK = $_POST['kodeMK'];
    $namaMK = $_POST['namaMK'];
    $sks = $_POST['sks'];
    $jam = $_POST['jam'];

    $query = "UPDATE t_matakuliah SET namaMK=?, sks=?, jam=? WHERE kodeMK=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ssss", $namaMK, $sks, $jam, $kodeMK);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmatakuliah.php");
?>
