<?php
include 'koneksi.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kendaraan</title>
    <link rel="stylesheet" href="style3.css?v=1.0">
</head>
<body>
    <header>
        <h1>DAFTAR MOBIL</h1>
    </header>

    <main>
        <table border="1" cellpadding="10" cellspacing="0" style="width: 100%; text-align: center;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>No Polisi</th>
                    <th>Jenis</th>
                    <th>Merk</th>
                    <th>Harga Sewa</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk mengambil data kendaraan dari database
                $query = "SELECT * FROM kendaraan";
                $result = mysqli_query($conn, $query);

                if (!$result) {
                    echo "Error: " . mysqli_error($conn);
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        $no = 1;
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $no++ . "</td>";
                            echo "<td>" . $row['no_polisi'] . "</td>";
                            echo "<td>" . $row['jenis'] . "</td>";
                            echo "<td>" . $row['merk'] . "</td>";
                            echo "<td>" . $row['harga_sewa'] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data kendaraan</td></tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </main>
</body>
</html>
