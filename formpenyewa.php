<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulir Penyewaan</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <main>
        <div class="form-container">
            <h1>Formulir Penyewaan Mobil</h1>
            <form action="prosespeminjaman.php" method="POST">
                <label for="no_ktp">No KTP:</label>
                <input type="text" id="no_ktp" name="no_ktp" required>

                <label for="nama">Nama Penyewa:</label>
                <input type="text" id="nama" name="nama" required>

                <label for="alamat">Alamat:</label>
                <input type="text" id="alamat" name="alamat" required>

                <label for="no_telp">No Telp:</label>
                <input type="text" id="no_telp" name="no_telp" required>

                <button type="submit">Sewa Mobil</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 PT. Bendi Car</p>
    </footer>
</body>
</html>