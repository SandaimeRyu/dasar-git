<?php
$host = '127.0.0.1';
$db = 'smk';
$user = 'root';
$pass = '';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nisn = $_POST['nisn'];
$status = $_POST['status'];
$tanggal = date('Y-m-d');

// Cek apakah siswa sudah absen hari ini
$check_sql = "SELECT * FROM absensi WHERE nisn = '$nisn' AND tanggal_absensi = '$tanggal'";
$check_result = $conn->query($check_sql);

if ($check_result->num_rows > 0) {
    echo "Siswa sudah melakukan absensi hari ini. <a href='index.php'>Kembali</a>";
} else {
    // Insert data absensi
    $sql = "INSERT INTO absensi (nisn, id_absen, tanggal_absensi) 
            VALUES ('$nisn', '$status', '$tanggal')";

    if ($conn->query($sql) === TRUE) {
        echo "Absensi berhasil disimpan. <a href='index.php'>Kembali</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>