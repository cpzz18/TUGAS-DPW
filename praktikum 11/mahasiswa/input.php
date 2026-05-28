<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container-form">
        <h1>Input Data Mahasiswa</h1>
        
        <form id="form_mahasiswa" action="pinput_mahasiswa.php" method="post">
            <fieldset>
                <legend>Form Tambah Mahasiswa</legend>
                
                <label for="npm">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Contoh: 12345678" required>
                
                <label for="namaMhs">Nama Mahasiswa:</label>
                <input type="text" id="namaMhs" name="namaMhs" required>
                
                <label for="prodi">Program Studi:</label>
                <input type="text" id="prodi" name="prodi" placeholder="Contoh: Teknik Informatika" required>
                
                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>
                
                <label for="noHP">No HP:</label>
                <input type="text" id="noHP" name="noHP" placeholder="Contoh: 08123456789">
            </fieldset>
            <div style="display: flex; gap: 10px;">
                <button type="submit" name="input" value="simpan" class="btn btn-add">Simpan</button>
                <a href="viewmahasiswa.php" class="btn btn-edit">Batal</a>
            </div>
        </form>
    </div>
</body>
</html>
