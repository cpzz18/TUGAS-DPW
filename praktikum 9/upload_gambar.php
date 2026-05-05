<!DOCTYPE html>
<html>
<head>
    <title>Upload Gambar</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        <p><label>Pilih gambar yang akan di upload:</label></p> <br>
            <input type="file" name="gambar" value="Pilih gambar" id="gambar1">
        <p><input type="submit" value="Upload Image" name="submit"></p>
    </form>

<?php 
$target_dir = "gambar/";
$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
$uploadOk = 1;
$file_gambar = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

if (isset($_POST['submit'])) {
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        echo "File berupa citra/gambar - " . $check["mime"] . "." ;
        $uploadOk = 1;
    } else {
        echo "File bukan gambar.";
        $uploadOk = 0;
    }
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["gambar"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}   

if($file_gambar != "jpg" && $file_gambar != "png" && $file_gambar != "jpeg" && $file_gambar != "gif") {
    echo "Sorry, only JPG, JPEG, and PNG & GIF.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["gambar"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
</body>
</html>