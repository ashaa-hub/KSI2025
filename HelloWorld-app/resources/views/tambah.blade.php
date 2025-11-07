<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
</head>
<body>
    <h2>Form Tambah Data</h2>
    <form action="/tambah" method="POST">
        @csrf
        <label>Nama:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
