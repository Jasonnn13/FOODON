<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Donatur</title>
    <link rel="stylesheet" href="../css/isidata.css">
    <script src="data-donatur.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Lengkapi Data Perusahaan Anda</h1>
        <form id="donatur-form">
            <label for="nama">Nama perusahaan:</label>
            <input type="text" id="nama" placeholder="Masukkan nama perusahaan" required>
            <label for="siup" class="custom-file-label">
                <i class="fas fa-cloud-upload-alt"></i>SIUP (Surat Izin Usaha Perdagangan)
            </label>
            <input type="file" id="siup" class="custom-file-input" accept="image/*" required>
            <label for="alamat">Alamat Perusahaan:</label>
            <input type="text" id="alamat" placeholder="Masukkan alamat" required>
            <label for="foto" class="custom-file-label photo">
                <i class="fas fa-cloud-upload-alt"></i>Foto profil
            </label>
            <input type="file" id="foto" class="custom-file-input" accept="image/*" required>
            <label for="deskripsi">Deskripsi perusahaan:</label>
            <textarea id="deskripsi" placeholder="Masukkan deskripsi" required></textarea>
            <div class="button-group">
                <button type="button" id="kembali">Kembali</button>
                <button type="submit">Lanjut</button>
            </div>
        </form>
    </div>
</body>
</html>
