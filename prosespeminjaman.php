<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    $query = "INSERT INTO penyewa (no_ktp, nama, alamat, no_telp) 
              VALUES ('$no_ktp', '$nama','$alamat', '$no_telp')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: selamat.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>