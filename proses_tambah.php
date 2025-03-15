<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $sql = "INSERT INTO mahasiswa (nama, nim, prodi) VALUES ('$nama', '$nim', '$prodi')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='tambah.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
}
?>
