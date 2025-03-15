<?php
include 'koneksi.php';

// Ambil mahasiswa dengan prodi Teknik Informatika dan urutkan berdasarkan ID
$sql = "SELECT * FROM mahasiswa WHERE prodi='Bisnis Digital' ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - Website Kreatif</title>
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
                <h2>Profil</h2>
                <img class="jurusan" src="bdg.png" alt="">
                <p>Program Studi Sarjana Terapan Bisnis Digital dilatarbelakangi oleh tingginya angka usia produktif (bonus demografi) namun tidak seimbang dengan fakta bahwa lapangan pekerjaan yang terbatas sehingga berpotensi menjadi beban masyarakat dan masalah sosial (social problem). Memasuki era revolusi industri 4.0 pemanfaatan teknologi informasi meningkat pesat ternasuk terbukanya potensi usaha baru berbasis teknologi informasi srhingga menyebabkan tingginya permintaan tenaga profesional di bidang teknologi informasi serta inovator baru yang bergerak dalam bisnis digital. Program Studi Sarjana Terapan Bisnis Digital berpotensi memberikan kontribusi dalam menyediakan tenaga kerja profesional dan calon wirausaha bidang bisnis digital.</p>
                <h2>Visi</h2>
                <p>Politeknik Negeri Jember untuk menjadi Politeknik Unggul di Asia Tahun 2035 yang merupakan wujud dari landasan penentuan profil lulusan yang sesuai dengan kebutuhan era digital saat ini.</p>
                <h2>Misi</h2>
                <p> 1. Menyelenggarakan pendidikan vokasi program sarjana yang bertujuan menghasilakn sarjana trepan bidang Bisnis Digital yang memeliki kompetensi sebagai Digital entrepreneur (Wirausaha Digital),
                    <br>
                    2.Memperkuat landasan keilmuan teknologi informasi di bidang bisnis digital untuk pengembangan IPTEKS dan dapat diterapkan di masyarakat.
                    <br>
                    3. Menjalin sinergi pendidikan sarjana terapan dengan kegiatan penelitian dan pengabdian yang bersifat berkelanjutan, mendalam, lintas disiplin yang menghasilkan solusi untuk permasalahan bangsa.
                    <br>
                    4. Menjalin kerjasama dengan institusi dan industri yang mendukung Program Studi Sarjana Terapan Bisnis Digital baik dalam maupun luar negeri.
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
                                <a href="hapus.php?id=<?php echo $row['id']; ?>&redirect=bisnis digital.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>

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
        </div>
    </main>
    <footer>
        &copy; 2025 polije | All rights reserved.
    </footer>
</body>
</html>
