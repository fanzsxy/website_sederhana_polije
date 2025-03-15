<?php
include 'koneksi.php';

// Ambil mahasiswa dengan prodi Teknik Informatika dan urutkan berdasarkan ID
$sql = "SELECT * FROM mahasiswa WHERE prodi='Teknik Komputer' ORDER BY id ASC";
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
                <img class="jurusan" src="tkk.png" alt="">
                <p>
                    Program ini menawarkan perkuliahan selama 3 tahun (6 semester) di bidang teknologi informasi dengan kompetensi operasi komputer
                    dan jaringan, perawatan perangkat keras dan lunak, perbaikan komputer dan jaringan, dan komputer kontrol. Calon mahasiswa
                    yang bisa mendaftar program ini adalah lulusan SLTA atau sederajat dari berbagai jurusan khususnya yang memiliki kemampuan 
                    dasar komputer yang memadai. Dalam proses belajar mengajar, mahasiswa mengikuti perkuliahan baik di kelas, laboratorium 
                    maupun di dunia industri selama 5 semester termasuk penyelesaian tugas akhir. Kemudian pada semester 6, mereka mengikuti 
                    program magang di perusahaan-perusahaan yang banyak memerlukan keahlian komputer dan jaringan. Setelah menyelesaikan program 
                    ini, lulusan akan menguasai keterampilan teknik dan manajerial tingkat menengah dalam pengoperasian, perawatan dan perbaikan 
                    komputer dan jaringan. Dengan memiliki kompetensi tersebut, lulusan dapat bekerja sebagai wirausahawan dibidang operasi dan 
                    perbaikan komputer dan jaringan, atau bekerja sebagai karyawan di perusahaan-perusahaan, perkantoran, dan perbankan.
                </p>
                <h2>Visi</h2>
                <p>Menjadi pusat pendidikandan pengembangan vokasi bidang komputer yang menghasilkan ahli madya berdaya saingdi Asia Tenggara pada 
                    tahun 2020.
                </p>
                <h2>Misi</h2>
                <p> 1. Meningkatkan kualitas sumber daya insani yang berpengetahuan, berkeahlian, dan berbudaya di bidang komputer
                    <br>
                    2. Meningkatkan sinergi keahlian bidang komputer dengan bidang
                    <br>
                    3. Meningkatkan kegiatan layanan bidang komputer yang bermanfaat bagi masyarakat.
                    <br>
                    4. Meningkatkan kualitas dan produktivitas riset bidang komputer yang inovatif
                    <br>
                    5. Meningkatkan kualitas dan produktivitas teknologi terapan bidang komputer yang bernilai ekonomis
                    <br>
                    6. Membentuk jiwa kemandirian beretika akademik bidang komputer
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
                                <a href="hapus.php?id=<?php echo $row['id']; ?>&redirect=teknik komputer.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>

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
