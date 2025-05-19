<?php
// Koneksi ke database
$host = "cloud.hypercloudhost.com";
$user = "ppexbjum_DanadyaksaFadhilaVirgiawan09";
$pass = "BeyondGenomb00";
$db   = "ppexbjum_smk09";

$conn = new mysqli($host, $user, $pass, $db);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Proses tambah data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn    = $_POST['nisn'];
    $tanggal = $_POST['tanggal'];
    $jam     = $_POST['jam'];

    $sql = "INSERT INTO keterlambatan (NISN, tanggal, jam) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nisn, $tanggal, $jam);
    
    if ($stmt->execute()) {
        echo "<p style='color:green;'>Data berhasil ditambahkan.</p>";
    } else {
        echo "<p style='color:red;'>Gagal menambahkan data: " . $stmt->error . "</p>";
    }

    $stmt->close();
}

// Ambil data keterlambatan
$sql = "SELECT id_keterlambatan, NISN, nama, tanggal, jam 
        FROM keterlambatan 
        JOIN siswa ON NISN = NISN 
        ORDER BY tanggal DESC, jam DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Keterlambatan</title>
</head>
<body>
    <h2>Form Keterlambatan</h2>
    <form method="post" action="">
        <label for="nisn">NISN:</label>
        <input type="text" name="nisn" required><br><br>
        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br><br>
        <label for="jam">Jam:</label>
        <input type="time" name="jam" required><br><br>
        <input type="submit" value="Simpan">
    </form>

    <h2>Riwayat Keterlambatan</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>NISN</th>
            <th>Nama</th>
            <th>Tanggal</th>
            <th>Jam</th>
        </tr>
        <?php if ($result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= $row["id_keterlambatan"] ?></td>
                    <td><?= $row["NISN"] ?></td>
                    <td><?= $row["nama"] ?></td>
                    <td><?= $row["tanggal"] ?></td>
                    <td><?= $row["jam"] ?></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">Belum ada data keterlambatan.</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
