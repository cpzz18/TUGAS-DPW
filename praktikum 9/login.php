<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        .error {color: red; font-size: 12px;}
    </style>
</head>
<body>
<?php
$nameErr = $passErr = "";
$name = $pass = "";

function bersihkan_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["u"])) {
        $nameErr = "Masukan username";
    } else {
        $name = bersihkan_input($_POST["u"]);
    }
    if (empty($_POST["p"])) {
        $passErr = "Masukan password";
    } else {
        $name = bersihkan_input($_POST["p"]);
    }

    if (empty($nameErr) && empty($passErr)) {
        echo "<p style='color:green;'>Login berhasil! Selamat datang, $name</p>";
    }
}
?>
<form method="post" action="<?php echo htmlspecialchars(
    $_SERVER["PHP_SELF"],
); ?>">
   Username: <input type="text" name="u"><br>
   <span class="error">*<?php echo $nameErr; ?></span>
   <br><br>
   Password: <input type="password" name="p"><br>
   <span class="error">*<?php echo $nameErr; ?></span>
   <br><br>
   <input type="submit" value="Login">
</form>
</body>
</html>
