<!DOCTYPE html>
<html>
<head>
    <title>Proses Pendaftaran</title>
</head>
<body>
    Selamat datang <b><?php echo htmlspecialchars($_POST['nama']); ?></b><br>
        NIM: <?php echo htmlspecialchars($_POST['nim']); ?><br>
        Email: <?php echo htmlspecialchars($_POST['email']); ?><br>
        Tempat, tanggal lahir: <?php echo htmlspecialchars($_POST['tempat_lahir'] . ', ' . $_POST['tanggal_lahir']); ?><br>
        Alamat: <?php echo nl2br(htmlspecialchars($_POST['alamat'])); ?><br>
        Jenis kelamin: <?php echo htmlspecialchars($_POST['gender']); ?><br>

        <p><b>Kesimpulan:</b> 
            data berhasil ditampilkan dari input form.
        </p>
        
</body>
</html>
