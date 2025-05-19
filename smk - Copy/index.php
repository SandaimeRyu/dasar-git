<?php
// Connection to database
$host = 'cloud.hypercloudhost.com';
$db = 'ppexbjum_smk09';
$user = 'ppexbjum_DanadyaksaFadhilaVirgiawan09';
$pass = 'BeyondGenomb00';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture search input
$search = isset($_GET['search']) ? $_GET['search'] : '';

// Student search query
$sql = "SELECT * FROM siswa WHERE nama_siswa LIKE '%$search%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Danadyaksa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>DAFTAR SISWA</h2>

    <!-- Search Form -->
    <form method="GET" action="index.php">
        <input type="text" name="search" placeholder="Search Name Student's">
        <button type="submit">Search</button>
    </form>

    <!--- Link To Recap Absensi Full Student's ---->
    <a href="rekap_absensi.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            Attendance Recap Results Page
        </button>
    </a>

    <!-- Link To Jurnal Everyday -->
    <a href="jurnal.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            jurnal
        </button>
    </a>

    <!-- Link To Add Code Teacher -->
    <a href="tambah_guru.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            Add Teacher Code
        </button>
    </a>

    <!-- Table Siswa -->
    <table border="1">
        <thead>
            <tr>
                <th>NISN</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['nisn']}</td>
                        <td>{$row['nama_siswa']}</td>
                        <td>{$row['jurusan']}</td>
                        <td><button onclick=\"processSiswa('{$row['nisn']}')\">Proses</button></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No results found</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
    function processSiswa(nisn) {
        window.location.href = 'process_siswa.php?nisn=' + nisn;
    }
    </script>
</body>
</html>

<?php $conn->close(); ?>