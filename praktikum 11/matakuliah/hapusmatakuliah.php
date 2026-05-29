<?php
include '../koneksi.php';

if (isset($_GET['kodeMK'])) {
    $kodeMK = $_GET['kodeMK'];

    $query = "DELETE FROM t_matakuliah WHERE kodeMK=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $kodeMK);

    if (!$stmt->execute()) {
        die("Query gagal dijalankan: " . $stmt->error);
    }
}

header("location:viewmatakuliah.php");
?>
