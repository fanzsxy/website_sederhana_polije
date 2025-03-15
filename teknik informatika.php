
<?php
include 'koneksi.php';

// Ambil mahasiswa dengan prodi Teknik Informatika dan urutkan berdasarkan ID
$sql = "SELECT * FROM mahasiswa WHERE prodi='Teknik Informatika' ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Website Kreatif</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <img src="logo.png" alt="Logo Website" class="logo">
        <div>
        POLITEKNIK NEGERI JEMBER
        </div>
        <p class="alamat">Jl. Mastrip PO BOX 164, Jember - Jawa Timur - Indonesia</p>
    </header>
    <nav>
        <a href="sejarah.html">Sejarah</a>
        <a href="manajemen informatika.php">Manajemen Informatika</a>
        <a href="teknik komputer.php">Teknik Komputer</a>
        <a href="teknik informatika.php">Teknik Informatika</a>
        <a href="bisnis digital.php">Bisnis Digital (Kampus Bondowoso)</a>
        <a href="tambah.html">Tambah Siswa</a>
    </nav>
    <main>
        <div class="container">
            <div class="card">
                <h2>profile</h2>
                <img class="jurusan" src="tif.png" alt="">
                <h2>Visi</h2>
                <p>Menjadi program studi pada jenjang pendidikan diploma IV di bidang Teknik Informatika yang mampu mengembangkan ilmu pengetahuan 
                   dan teknologi terapan yang mendukung bidang agribisnis dan bidang lainnya.</p>
                <h2>Misi</h2>
                <p> 1. Menyelenggarakan pendidikan vokasi yang menghasilkan sarjana terapan di bidang Teknik Informatika yang kompeten, profesional, 
                    bermoral dan berjiwa kewirausahaan.
                    <br>
                    2. Menyelenggarakan pengembangan ilmu pengetahuan dan teknologi terapan di bidang Teknik Informatika yang mendukung bidang 
                    agribisnis dan bidang lainnya yang mampu bersaing di tingkat nasional dan internasional.
                   <br> 
                    3. Menyelenggarakan pendidikan vokasi yang berkarakter dan berkontribusi terhadap penguatan budaya akademis dengan menghasilkan
                    lulusan di bidang Teknik Informatika yang berakhlak mulia, kompeten dan berjiwa wirausaha.
                    <br>
                    4. Mensinergikan keahlian bidang teknik informatika dengan bidang ilmu lainnya melalui pelaksanaan penelitian terapan.
                    <br>
                    5. Menyebarluaskan keterkinian teknologi dibidang teknik informatika melalui kegiatan pengabdian kepada masyarakat.
                    </p>
                    <div>
                    <h2 class="text-center">Daftar Mahasiswa</h2>
        
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Program Studi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row["id"]; ?></td>
                            <td><?= $row["nama"]; ?></td>
                            <td><?= $row["nim"]; ?></td>
                            <td><?= $row["prodi"]; ?></td>
                            <td>
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                <a href="hapus.php?id=<?php echo $row['id']; ?>&redirect=teknik informatika.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>

                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data mahasiswa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
            </div>
        </div>
    </main>
    <footer>
        &copy; 2025 polije | All rights reserved.
    </footer>
</body>
</html>
