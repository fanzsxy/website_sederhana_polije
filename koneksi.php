<?php
$host = "localhost";
$user = "root"; // Sesuaikan dengan user database Anda
$pass = ""; // Isi password jika ada
$db = "mahasiswa_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
