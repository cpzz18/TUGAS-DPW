<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
</head>
<body>
    Selamat datang <b><?php echo $_POST['nama']; ?></b><br>     
        NIM: <?php echo $_POST['nim']; ?><br>
        Email: <?php echo $_POST['email']; ?><br>
        Tempat, tanggal lahir: <?php echo $_POST['tempat'] . ', ' . $_POST['ttl']; ?><br>
        Alamat: <?php echo $_POST['alamat']; ?><br>
        Jenis kelamin: <?php echo $_POST['gender']; ?><br>

        <p><b>Kesimpulan:</b> 
            hanya menampilkan selamat datang dan item2 lain belum menampilkan data yang dimasukkan oleh pengguna di form pendaftaran, mungkin karena metode pengiriman data adalah GET.
        </p>
        
</body>
</html>