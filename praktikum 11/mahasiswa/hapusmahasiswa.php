<?php
include '../koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $query = "DELETE FROM t_mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($link, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($link) . " - " . mysqli_error($link));
    }
}

header("location:viewmahasiswa.php");
?>
