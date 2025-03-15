<?php 
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];
    $redirect = isset($_POST['redirect']) ? $_POST['redirect'] : 'index.html'; // Tangkap halaman tujuan

    // Query untuk memperbarui data mahasiswa berdasarkan ID
    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location.href='$redirect';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<script>alert('Akses ditolak!'); window.location.href='index.html';</script>";
}
?>
