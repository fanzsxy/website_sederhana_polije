<?php
include 'koneksi.php';

if (isset($_GET['id']) && isset($_GET['redirect'])) {
    $id = $_GET['id'];
    $redirect = $_GET['redirect']; // Menangkap halaman asal

    // Query untuk menghapus data berdasarkan ID
    $sql = "DELETE FROM mahasiswa WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil dihapus!'); window.location.href='$redirect';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    echo "<script>alert('ID tidak ditemukan!'); window.location.href='index.html';</script>";
}
?>
