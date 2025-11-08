<?php
include 'koneksi.php';

// Proses simpan data jika form disubmit
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $prodi = $_POST['prodi'];

    $query = "INSERT INTO mahasiswa (nama, nim, prodi) VALUES ('$nama', '$nim', '$prodi')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <h2>Tambah Data Mahasiswa</h2>
    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim" required><br><br>

        <label>Prodi:</label><br>
        <input type="text" name="prodi" required><br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>
