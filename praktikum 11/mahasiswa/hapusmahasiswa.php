<?php
include '../koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $query = "DELETE FROM t_mahasiswa WHERE npm=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $npm);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmahasiswa.php");
?>
