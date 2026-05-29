<?php
include '../koneksi.php';

if (isset($_POST['edit'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "UPDATE t_mahasiswa SET namaMhs=?, prodi=?, alamat=?, noHP=? WHERE npm=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("sssss", $namaMhs, $prodi, $alamat, $noHP, $npm);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmahasiswa.php");
?>
