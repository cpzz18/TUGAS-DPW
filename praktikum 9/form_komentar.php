<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Nama: <input type="text" name="nama"><br>
        Email: <input type="email" name="email"><br>
        Komentar: <textarea name="komentar"></textarea><br>
        <input type="submit" value="Kirim"><br>
    </form>

<?php

$name = $email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['nama'];
    $email = $_POST['email'];
    $comment = $_POST['komentar'];

    echo "<h2>Data Komentar</h2>";
    echo "Nama: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Komentar: " . nl2br(htmlspecialchars($comment)) . "<br>";
}
?>
</body>
</html>
