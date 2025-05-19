<?php
$host = 'cloud.hypercloudhost.com';
$db = 'ppexbjum_smk09';
$user = 'ppexbjum_DanadyaksaFadhilaVirgiawan09';
$pass = 'BeyondGenomb00';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$kode_guru = $_POST['kode_guru'];
$nama_guru = $_POST['nama_guru'];

$sql = "INSERT INTO guru (kode_guru, nama_guru) VALUES ('$kode_guru', '$nama_guru')";

if ($conn->query($sql) === TRUE) {
    echo "Guru berhasil ditambahkan. <a href='tambah_guru.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
