<?php
include "../koneksi.php";
if (isset($_GET["npm"])) {
    $id = $_GET["npm"];
    $query = "SELECT * FROM t_mahasiswa WHERE npm=?";
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $id);
    if (!$stmt->execute()) {
        die("Query Error: " . $stmt->error);
    }
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $npm = $data["npm"];
    $namaMhs = $data["namaMhs"];
    $prodi = $data["prodi"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
} else {
    header("location:viewmahasiswa.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Edit Data Mahasiswa</h1>
        
        <form id="form_mahasiswa" action="pedit_mahasiswa.php" method="post">
            <fieldset>
                <legend>Form Edit Mahasiswa</legend>
                
                <label for="npmDisabled">NPM:</label>
                <input type="hidden" name="npm" value="<?php echo $npm; ?>" />
                <input type="text" name="npmDisabled" id="npmDisabled" value="<?php echo $npm; ?>" disabled>
                
                <label for="namaMhs">Nama Mahasiswa:</label>
                <input type="text" name="namaMhs" id="namaMhs" value="<?php echo $namaMhs; ?>" required>
                
                <label for="prodi">Program Studi:</label>
                <input type="text" name="prodi" id="prodi" value="<?php echo $prodi; ?>" required>
                
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>" required>
                
                <label for="noHP">No HP:</label>
                <input type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
            </fieldset>
            
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="edit" value="simpan" class="btn btn-add">Update</button>
                <a href="viewmahasiswa.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
