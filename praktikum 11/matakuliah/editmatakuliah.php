<?php
include "../koneksi.php";
if (isset($_GET["kodeMK"])) {
    $id = $_GET["kodeMK"];
    $query = "SELECT * FROM t_matakuliah WHERE kodeMK='$id'";
    $result = mysqli_query($link, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($link) . " - " . mysqli_error($link));
    }
    $data = mysqli_fetch_assoc($result);
    $kodeMK = $data["kodeMK"];
    $namaMK = $data["namaMK"];
    $sks = $data["sks"];
    $jam = $data["jam"];
} else {
    header("location:viewmatakuliah.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Edit Data Matakuliah</h1>
        
        <form id="form_matakuliah" action="pedit_matakuliah.php" method="post">
            <fieldset>
                <legend>Form Edit Matakuliah</legend>
                
                <label for="kodeMKDisabled">Kode MK:</label>
                <input type="hidden" name="kodeMK" value="<?php echo $kodeMK; ?>" />
                <input type="text" name="kodeMKDisabled" id="kodeMKDisabled" value="<?php echo $kodeMK; ?>" disabled>
                
                <label for="namaMK">Nama Matakuliah:</label>
                <input type="text" name="namaMK" id="namaMK" value="<?php echo $namaMK; ?>" required>
                
                <label for="sks">SKS:</label>
                <input type="text" name="sks" id="sks" value="<?php echo $sks; ?>" required>
                
                <label for="jam">Jam:</label>
                <input type="text" name="jam" id="jam" value="<?php echo $jam; ?>">
            </fieldset>
            
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="edit" value="simpan" class="btn btn-add">Update</button>
                <a href="viewmatakuliah.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
