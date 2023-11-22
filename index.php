<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Pendaftaran Karyawan</h2>
        <form action="process_input.php" method="post">

            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir</label>
            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>

            <label for="alamat">Alamat</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="no_hp">No HP</label>
            <input type="no_hp" id="no_hp" name="no_hp" required>

            <input type="submit" value="Daftar" name="submit">
        </form>
    </div>
</body>

</html>
