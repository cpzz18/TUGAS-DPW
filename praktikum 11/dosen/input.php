<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Input Data Dosen</h1>
        
        <form id="form_dosen" action="pinput_dosen.php" method="post">
            <fieldset>
                <legend>Form Tambah Dosen</legend>
                <label for="namaDosen">Nama Dosen:</label>
                <input type="text" id="namaDosen" name="namaDosen" required>
                
                <label for="noHP">No HP:</label>
                <input type="text" id="noHP" name="noHP" placeholder="08123456789" required>
            </fieldset>
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="input" value="simpan" class="btn btn-add">Simpan</button>
                <a href="viewdosen.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>