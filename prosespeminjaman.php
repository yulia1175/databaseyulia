<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari form
    $no_ktp = $_POST['no_ktp'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $no_polisi = $_POST['no_polisi'];

    $query = "INSERT INTO penyewa (no_ktp, nama, alamat, telp, no_polisi) 
              VALUES ('$no_ktp', '$nama','$alamat', '$telp', '$no_polisi')";

    if (mysqli_query($conn, $query)) {
        header("Location: welcome.html");
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
