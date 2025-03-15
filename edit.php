<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'index.html'; // Tangkap halaman asal

    // Ambil data mahasiswa berdasarkan ID
    $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<script>alert('Data tidak ditemukan!'); window.location.href='$redirect';</script>";
        exit();
    }
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href='index.html';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Edit Data Mahasiswa</h2>
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <input type="hidden" name="redirect" value="<?php echo htmlspecialchars($redirect); ?>"> <!-- Simpan halaman sebelumnya -->
            
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Mahasiswa</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $row['nim']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi</label>
                <select class="form-select" id="prodi" name="prodi" required>
                    <option value="Manajemen Informatika" <?php if ($row['prodi'] == 'Manajemen Informatika') echo 'selected'; ?>>Manajemen Informatika</option>
                    <option value="Teknik Komputer" <?php if ($row['prodi'] == 'Teknik Komputer') echo 'selected'; ?>>Teknik Komputer</option>
                    <option value="Teknik Informatika" <?php if ($row['prodi'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
                    <option value="Bisnis Digital" <?php if ($row['prodi'] == 'Bisnis Digital') echo 'selected'; ?>>Bisnis Digital</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                <a href="<?php echo htmlspecialchars($redirect); ?>" class="btn btn-secondary">Batal</a> <!-- Kembali ke halaman sebelumnya -->
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
