<?php 
include '../koneksi.php';

if (isset($_POST['input'])) {
    $npm = $_POST['npm'];
    $namaMhs = $_POST['namaMhs'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
    $noHP = $_POST['noHP'];

    $query = "INSERT INTO t_mahasiswa (npm, namaMhs, prodi, alamat, noHP) VALUES (?, ?, ?, ?, ?)";
    $stmt = $link->prepare($query);
    $stmt->bind_param("sssss", $npm, $namaMhs, $prodi, $alamat, $noHP);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmahasiswa.php");
?>
