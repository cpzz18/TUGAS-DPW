<?php 
include '../koneksi.php';

if (isset($_POST['input'])) {
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO t_dosen (namaDosen, noHP) VALUES (?, ?)";
    $stmt = $link->prepare($query);
    $stmt->bind_param("ss", $namaDosen, $noHP);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewdosen.php");
?>