<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penerima</title>
    <link rel="stylesheet" href="../css/isidata.css">
    <script src="data-penerima.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Lengkapi Data Diri Anda</h1>
        <form id="penerima-form">
            <label for="username">Username:</label>
            <input type="text" id="username" placeholder="Masukkan username anda" required>
            <label for="nama">Nama lengkap:</label>
            <input type="text" id="nama" placeholder="Masukkan nama lengkap anda" required>
            <label for="umur">Umur:</label>
            <input type="number" id="umur" placeholder="Masukkan umur anda" required>
            <label for="stkm" class="custom-file-label">
                <i class="fas fa-cloud-upload-alt"></i>STKM (Surat Keterangan Tidak Mampu)
            </label>
            <input type="file" id="stkm" class="custom-file-input" accept="image/*" required>
            <label for="alamat">Alamat tempat tinggal:</label>
            <input type="text" id="alamat" placeholder="Masukkan alamat" required>
            <label for="foto" class="custom-file-label photo">
                <i class="fas fa-cloud-upload-alt"></i>
                <span>Foto profil</span>
            </label>
            <input type="file" id="foto" class="custom-file-input" accept="image/*" required>
            <div class="button-group">
                <button type="button" id="kembali">Kembali</button>
                <button type="submit">Lanjut</button>
            </div>
        </form>
    </div>
</body>
</html>
