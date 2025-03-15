<?php
include 'koneksi.php';

// Ambil mahasiswa dengan prodi Teknik Informatika dan urutkan berdasarkan ID
$sql = "SELECT * FROM mahasiswa WHERE prodi='Manajemen Informatika' ORDER BY id ASC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Website Kreatif</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header> <img src="logo.png" alt="Logo Website" class="logo">
        <div>
        POLITEKNIK NEGERI JEMBER
        </div>
        <p class="alamat">Jl. Mastrip PO BOX 164, Jember - Jawa Timur - Indonesia</p></header>
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
                <img class="jurusan" src="mif1.png" alt="">
                <p>Program ini menawarkan perkuliahan selama 3 tahun (6 semester) di bidang teknologi informasi dengan kompetensi pengelolaan data dan informasi berbasis komputer dan jaringan. Calon mahasiswa yang bisa mendaftar program ini adalah lulusan SLTA atau sederajat dari berbagai jurusan khususnya yang memiliki kemampuan dasar komputer yang memadahi. Dalam proses belajar mengajar, mahasiswa mengikuti perkuliahan baik di kelas, laboratorium maupun di dunia industri selama 5 semester termasuk penyelesaian tugas akhir. Kemudian pada semester 6, mereka mengikuti program magang di perusahaan-perusahaan yang banyak memerlukan keahlian pengelolaan informasi. Setelah menyelesaikan program ini, lulusan akan menguasai keterampilan teknik dan manajerial tingkat menengah dalam pengelolaan data dan informasi. Dengan memiliki kompetensi tersebut, lulusan dapat bekerja di perusahaan-perusahaan, perkantoran, dan perbankan di berbagai posisi seperti analis sistem, programer, pengelola database, pengembang web, IT technical support, pengawas data processing, dan designer sistem informasi.</p>
                <h2>Visi</h2>
                <p>Menjadi Program Studi yang mampu menunjang visi POLIJE untuk menghasilkan ahli madya bidang informatika yang unggul di Asia pada tahun 2025.</p>
                <h2>Misi</h2>
                <p>1. Menyelenggarakan pendidikan vokasi yang berkarakter dalam bidang informatika, yang menghasilkan lulusan yang berkualitas, kompeten, bermoral, dan berjiwa wirausaha.
                    <br>
                    2. Memperkuat kerjasama dengan stakeholder dalam menjaga keterkinian konten kurikulum serta riset yang sesuai dengan kebutuhan masyarakat.
                    <br>
                    3. Mensinergikan keahlian sistem informasi pada bidang pertanian serta bidang ilmu lainnya melalui kegiatan pengabdian kepada masyarakat.
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
                            <a href="edit.php?id=<?php echo $row['id']; ?>&redirect=<?php echo basename($_SERVER['PHP_SELF']); ?>" class="btn btn-warning btn-sm">Edit</a>


                                <a href="hapus.php?id=<?php echo $row['id']; ?>&redirect=manajemen informatika.php" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>

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
