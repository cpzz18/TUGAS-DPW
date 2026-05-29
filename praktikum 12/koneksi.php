<?php
$conn = new mysqli("localhost", "root", "root", "modul12");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$q = "create table t_login (
    id int(6) primary key unsigned auto_increment,
    username varchar(30) not null,
    password varchar(50) not null,
    email varchar(50) not null,
    tgl_registrasi timestamp default current_timestamp on update current_timestamp
);";

$hasil = $conn->query($q);
if ($hasil === true) {
    echo "Tabel t_login berhasil dibuat";
} else {
    echo "Tabel gagal dibuat: " . $conn->error;
}

$conn->close();

$sql =
    "insert into t_dosen(idDosen, namaDosen, noHP) values (10, 'Pak Ang', 'ang@example.com')";

$hasil = $conn->query($sql);
if ($hasil === true) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal menambahkan data: " . $conn->error;
}

$input = $conn->escape_string($_GET["id"]);

$statement = $conn->prepare("SELECT * FROM t_dosen WHERE idDosen = ?");

$statement->bind_param("i", $input);

$statement->execute();

$hasil = $statement->get_result();

while ($baris = $hasil->fetch_assoc()) {
    echo htmlspecialchars($baris["namaDosen"]) . "<br>";
}
$conn->close();
?>
