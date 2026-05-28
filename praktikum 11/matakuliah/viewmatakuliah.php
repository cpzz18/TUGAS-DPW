<?php
include "../koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="container">
        <h1>Data Matakuliah</h1>
        
        <div class="search-container">
            <a href="../index.php" class="btn btn-primary">&laquo; Kembali</a>
            
            <form action="viewmatakuliah.php" method="get" class="search-form">
                <input type="text" name="keyword" placeholder="Cari nama matakuliah..." value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                <button type="submit" class="btn btn-primary">Cari</button>
            </form>
            
            <a href="input.php" class="btn btn-add">Tambah Matakuliah</a>
        </div>
        
        <table>
            <thead>
                <tr>
                    <th>Kode MK</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                    <th>Jam</th>
                    <th>Pilihan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
                
                if ($keyword != '') {
                    $query = "SELECT * FROM t_matakuliah WHERE namaMK LIKE '%$keyword%' ORDER BY kodeMK ASC";
                } else {
                    $query = "SELECT * FROM t_matakuliah ORDER BY kodeMK ASC";
                }
                
                $result = mysqli_query($link, $query);
                if (!$result) {
                    die("Query Error: " . mysqli_errno($link) . " - " . mysqli_error($link));
                }
                
                if (mysqli_num_rows($result) > 0) {
                    while ($data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $data['kodeMK'] . "</td>";
                        echo "<td>" . $data['namaMK'] . "</td>";
                        echo "<td>" . $data['sks'] . "</td>";
                        echo "<td>" . $data['jam'] . "</td>";
                        echo '<td class="table-actions">
                                <a href="editmatakuliah.php?kodeMK=' . $data['kodeMK'] . '" class="btn btn-edit">Edit</a>
                                <a href="#" class="btn btn-delete" onclick="confirmDelete(event, \'hapusmatakuliah.php?kodeMK=' . $data['kodeMK'] . '\')">Hapus</a>
                              </td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' style='text-align:center;'>Data tidak ditemukan</td></tr>";
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
