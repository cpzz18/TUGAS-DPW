<?php
include "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">&laquo; Kembali</a>
            
            <form action="viewmahasiswa.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="Cari nama mahasiswa..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            
            <a href="input.php" class="btn btn-add">Tambah Mahasiswa</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>NPM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Prodi</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
                
                if ($keyword != '') {
                    $query = "SELECT * FROM t_mahasiswa WHERE namaMhs LIKE ? ORDER BY npm ASC";
                    $stmt = $link->prepare($query);
                    $like_keyword = "%$keyword%";
                    $stmt->bind_param("s", $like_keyword);
                } else {
                    $query = "SELECT * FROM t_mahasiswa ORDER BY npm ASC";
                    $stmt = $link->prepare($query);
                }
                
                if (!$stmt->execute()) {
                    die("Query Error: " . $stmt->error);
                }
                
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $data['npm'] . "</td>";
                        echo "<td>" . $data['namaMhs'] . "</td>";
                        echo "<td>" . $data['prodi'] . "</td>";
                        echo "<td>" . $data['alamat'] . "</td>";
                        echo "<td>" . $data['noHP'] . "</td>";
                        echo '<td class="table-actions">
                                <a href="editmahasiswa.php?npm=' . $data['npm'] . '" class="btn btn-edit">Edit</a>
                                <a href="#" class="btn btn-delete" onclick="confirmDelete(event, \'hapusmahasiswa.php?npm=' . $data['npm'] . '\')">Hapus</a>
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' style='text-align:center;'>Data tidak ditemukan</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    function confirmDelete(event, url) {
        event.preventDefault();
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "Data yang dihapus tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            cancelButtonColor: '#6c757d',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = url;
            }
        })
    }
    </script>
</body>
</html>
