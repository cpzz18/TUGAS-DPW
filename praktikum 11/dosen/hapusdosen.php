<?php
include("../koneksi.php");
if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    $query = "DELETE FROM t_dosen WHERE idDosen=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $id);
    if(!$stmt->execute()) {
        die("Gagal menghapus data: ".$stmt->error);
    }
}
header("location: viewdosen.php");
?>