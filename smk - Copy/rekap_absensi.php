<?php
// rekap_absensi.php
$host = 'cloud.hypercloudhost.com';
$db = 'ppexbjum_smk09';
$user = 'ppexbjum_DanadyaksaFadhilaVirgiawan09';
$pass = 'BeyondGenomb00';

// Koneksi ke database
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data absensi
$sql = "SELECT absensi.nisn, siswa.nama_siswa, absensi.id_absen, absensi.tanggal_absensi 
        FROM absensi 
        JOIN siswa ON absensi.nisn = siswa.nisn 
        ORDER BY absensi.tanggal_absensi DESC";
$result = $conn->query($sql);
if (!$result) {
    die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Recap Absensi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Student Attendance Recapitulation</h2>

    <table border="1">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Status</th>
                <th>Tanggal Absensi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    // Konversi ID Absen ke Status
                    $status = "";
                    if ($row['id_absen'] == 1) {
                        $status = "Sakit";
                    } elseif ($row['id_absen'] == 2) {
                        $status = "Izin";
                    } elseif ($row['id_absen'] == 3) {
                        $status = "Alpa";
                    }

                    echo "<tr>
                        <td>{$row['nisn']}</td>
                        <td>{$row['nama_siswa']}</td>
                        <td>{$status}</td>
                        <td>{$row['tanggal_absensi']}</td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4' style='text-align: center;'>Belum ada data absensi</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>

    <!-- Back to Home Page Button -->
    <a href="index.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            Back To Home Page
        </button>
    </a>

</body>
</html>

<?php $conn->close(); ?>