<?php
$host = 'cloud.hypercloudhost.com';
$db = 'ppexbjum_smk09';
$user = 'ppexbjum_DanadyaksaFadhilaVirgiawan09';
$pass = 'BeyondGenomb00';
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$guruQuery = "SELECT * FROM guru";
$kelasQuery = "SELECT * FROM kelas";
$guruResult = $conn->query($guruQuery);
$kelasResult = $conn->query($kelasQuery);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jurnal</title>
</head>
<body>
    <h2>Teacher Journal Input</h2>
    <form method="POST" action="submit_jurnal.php">
        <label for="kode_guru">Guru:</label>
        <select name="kode_guru" required>
            <?php while ($guru = $guruResult->fetch_assoc()) {
                echo "<option value='{$guru['kode_guru']}'>{$guru['nama_guru']}</option>";
            } ?>
        </select><br><br>

        <label for="kode_kelas">Kelas:</label>
            <select name="kode_kelas" id="kode_kelas" required>
                <?php if ($kelasResult->num_rows > 0): ?>
                    <optgroup label="Kelas dari Database">
                <?php while ($kelas = $kelasResult->fetch_assoc()): ?>
                    <option value="<?= htmlspecialchars($kelas['kode_kelas']) ?>"><?= htmlspecialchars($kelas['nama_kelas']) ?></option>
                 <?php endwhile; ?>
            </optgroup>
        <?php endif; ?>

            <optgroup label="Kelas Manual">
                <option value="X">Class X</option>
                <option value="XI">Class XI</option>
                <option value="XII">Class XII</option>
            </optgroup>
            
        </select><br><br>


        <label for="tanggal">Tanggal:</label>
        <input type="date" name="tanggal" required><br><br>

        <label for="kegiatan">Kegiatan:</label><br>
        <textarea name="kegiatan" rows="4" cols="50" required></textarea><br><br>

        <button type="submit">Simpan Jurnal</button>
    </form>

    <!-- Back to Home Page Button -->
    <a href="index.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            Back To Home Page
        </button>
    </a>

</body>
</html>

<?php $conn->close(); ?>
