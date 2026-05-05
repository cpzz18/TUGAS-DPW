<!DOCTYPE html>
<html>
<head>
    <title>Form Komentar</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        Nama: <input type="text" name="name"><br>
        Email: <input type="email" name="email"><br>
        Komentar: <textarea name="comment" rows="5" cols="40"></textarea><br>
        <input type="submit" value="Kirim"><br>
        <input type="reset" value="Bersihkan"><br>
    </form>

<?php

$name = $email = $comment = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    echo("Nama: " . $name . "<br>");
    echo("Email: " . $email . "<br>");
    echo("Komentar: " . $comment . "<br>");
    echo("<hr>");

    //kesimpulan output
    echo "Menampilkan data yang dimasukkan oleh pengguna";
}
function bersihkan_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
</body>
</html>
