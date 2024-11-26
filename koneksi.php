<?php
$host = "localhost"; // Nama host
$username = "root"; // Nama pengguna MySQL (ubah jika berbeda)
$password = ""; // Kata sandi MySQL (ubah jika diperlukan)
$database = "bendicar"; // Nama database

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}
?>
