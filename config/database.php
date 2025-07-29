<?php
$host = "localhost";     // Server database
$user = "root";          // Username MySQL (default: root)
$pass = "";              // Password MySQL (kosongkan jika tidak ada)
$db   = "perpustakaan";  // Nama database kamu

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>