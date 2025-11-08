<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    $sql = "INSERT INTO users (nama, email) VALUES ('$nama', '$email')";
    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil ditambahkan!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<form method="POST">
    Nama: <input type="text" name="nama"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Tambah Data">
</form>
