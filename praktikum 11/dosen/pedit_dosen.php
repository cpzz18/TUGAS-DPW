<?php
if (isset($_POST['edit'])) {
    include("../koneksi.php");
    $id = $_POST['idDosen'];
    $namaDosen = $_POST['namaDosen'];
    $noHP = $_POST['noHP'];
    $query = "UPDATE t_dosen SET namaDosen = ?, noHP = ? WHERE idDosen = ?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("sss", $namaDosen, $noHP, $id);
    if(!$stmt->execute()) {
        die("Query gagal dijalankan: ".$stmt->error);
    }
}
header("location: viewdosen.php");
?>