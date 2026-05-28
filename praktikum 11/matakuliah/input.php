<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Input Data Matakuliah</h1>
        
        <form id="form_matakuliah" action="pinput_matakuliah.php" method="post">
            <fieldset>
                <legend>Form Tambah Matakuliah</legend>
                
                <label for="kodeMK">Kode MK:</label>
                <input type="text" id="kodeMK" name="kodeMK" placeholder="Contoh: 101" required>
                
                <label for="namaMK">Nama Matakuliah:</label>
                <input type="text" id="namaMK" name="namaMK" required>
                
                <label for="sks">SKS:</label>
                <input type="text" id="sks" name="sks" placeholder="Contoh: 3" required>
                
                <label for="jam">Jam:</label>
                <input type="text" id="jam" name="jam" placeholder="Contoh: 2">
            </fieldset>
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="input" value="simpan" class="btn btn-add">Simpan</button>
                <a href="viewmatakuliah.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
