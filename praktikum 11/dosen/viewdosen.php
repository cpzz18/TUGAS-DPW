<?php
include "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Dosen</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Data Dosen</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">&laquo; Kembali</a>
            
            <form action="viewdosen.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="Cari nama dosen..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            
            <a href="input.php" class="btn btn-add">Tambah Dosen</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Dosen</th>
                    <th>No HP</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
                
                if ($keyword != '') {
                    $query = "SELECT * FROM t_dosen WHERE namaDosen LIKE ? ORDER BY idDosen ASC";
                    $stmt = $link->prepare($query);
                    $like_keyword = "%$keyword%";
                    $stmt->bind_param("s", $like_keyword);
                } else {
                    $query = "SELECT * FROM t_dosen ORDER BY idDosen ASC";
                    $stmt = $link->prepare($query);
                }
                
                if (!$stmt->execute()) {
                    die("Query Error: " . $stmt->error);
                }
                
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($data = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $data['idDosen'] . "</td>";
                        echo "<td>" . $data['namaDosen'] . "</td>";
                        echo "<td>" . $data['noHP'] . "</td>";
                        echo '<td class="table-actions">
                                <a href="editdosen.php?idDosen=' . $data['idDosen'] . '" class="btn btn-edit">Edit</a>
                                <a href="#" class="btn btn-delete" onclick="confirmDelete(event, \'hapusdosen.php?idDosen=' . $data['idDosen'] . '\')">Hapus</a>
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4' style='text-align:center;'>Data tidak ditemukan</td></tr>";
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
