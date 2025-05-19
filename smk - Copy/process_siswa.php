<?php
// process_siswa.php
$host = 'cloud.hypercloudhost.com';
$db = 'ppexbjum_smk09';
$user = 'ppexbjum_DanadyaksaFadhilaVirgiawan09';
$pass = 'BeyondGenomb00';
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nisn = $_GET['nisn'];
$sql = "SELECT * FROM siswa WHERE nisn = '$nisn'";
$result = $conn->query($sql);
$student = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Proses Absensi Siswa</title>
</head>
<body>
<h2>Absensi untuk <?php echo $student['nama_siswa']; ?></h2>
    <form method="POST" action="submit_absensi.php">
        <input type="hidden" name="nisn" value="<?php echo $student['nisn']; ?>">

        <label><input type="radio" name="status" value="1"> Sakit</label><br>
        <label><input type="radio" name="status" value="2"> Izin</label><br>
        <label><input type="radio" name="status" value="3"> Alpa</label><br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php $conn->close(); ?>
