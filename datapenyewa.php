<?php
include 'koneksi.php'; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penyewa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Data Penyewa</h1>
    </header>

    <main>
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Kontak</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data penyewa dari database
                $query = "SELECT * FROM penyewa";
                $result = mysqli_query($koneksi, $query);

                if (!$result) {
                    echo "Error: " . mysqli_error($koneksi);
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['no_telp'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='4'>Belum ada data penyewa.</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2024 PT. Bendi Car</p>
    </footer>
</body>
</html>