<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Teacher</title>
</head>
<body>
    <h2>Add Teacher Form</h2>
    <form action="submit_guru.php" method="POST">
        <label for="kode_guru">Kode Guru:</label><br>
        <input type="text" name="kode_guru" required><br><br>

        <label for="nama_guru">Nama Lengkap:</label><br>
        <input type="text" name="nama_guru" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <!-- Back to Home Page Button -->
    <a href="index.php">
        <button style="padding: 10px; background-color:rgb(45, 0, 75); color: white; border: none; border-radius: 5px; cursor: pointer;">
            Back To Home Page
        </button>
    </a>

</body>
</html>
