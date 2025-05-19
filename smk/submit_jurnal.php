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
$kode_kelas = $_POST['kode_kelas'];
$tanggal = $_POST['tanggal'];
$kegiatan = $_POST['kegiatan'];

$sql = "INSERT INTO jurnal (kode_guru, kode_kelas, tanggal, kegiatan) 
        VALUES ('$kode_guru', '$kode_kelas', '$tanggal', '$kegiatan')";

if ($conn->query($sql) === TRUE) {
    echo "Jurnal berhasil disimpan. <a href='jurnal.php'>Kembali</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
