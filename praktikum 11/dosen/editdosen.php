<?php
include "../koneksi.php";
if (isset($_GET["idDosen"])) {
    $id = $_GET["idDosen"];
    $query = "SELECT * FROM t_dosen WHERE idDosen=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Query Error: " . $stmt->error);
    }
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $idDosen = $data["idDosen"];
    $namaDosen = $data["namaDosen"];
    $noHP = $data["noHP"];
} else {
    header("location:viewdosen.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Edit Data Dosen</h1>
        
        <form id="form_dosen" action="pedit_dosen.php" method="post">
            <fieldset>
                <legend>Form Edit Dosen</legend>
                
                <label for="idDosenDisabled">ID:</label>
                <input type="hidden" name="idDosen" value="<?php echo $idDosen; ?>" />
                <input type="text" name="idDosenDisabled" id="idDosenDisabled" value="<?php echo $idDosen; ?>" disabled>
                
                <label for="namaDosen">Nama Dosen:</label>
                <input type="text" name="namaDosen" id="namaDosen" value="<?php echo $namaDosen; ?>" required>
                
                <label for="noHP">No HP:</label>
                <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>" required>
            </fieldset>
            
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="edit" value="simpan" class="btn btn-add">Update</button>
                <a href="viewdosen.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
