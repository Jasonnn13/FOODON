<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Donatur</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
        @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

        html {
            font-size: 20px;
        }

        body {
            font-family: 'Poppins', sans-serif;
            font-size: 1.5rem;
            background-color: #87CEEB;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: black;
            overflow-y: auto;
        }

        .container {
            width: 100%;
            max-width: 45rem;
            padding: 2rem;
            box-sizing: border-box;
            border-radius: 1rem;
            background-color: rgba(255, 255, 255, 0.1);
            text-align: left;
        }

        h1 {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 4rem;
            color: white;
        }

        form {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2.5rem;
            text-align: left;
        }

        label {
            font-size: 1.5rem;
            color: black;
        }

        input[type="text"], input[type="email"], input[type="password"], input[type="number"], textarea {
            width: 100%;
            padding: 1.125rem;
            margin: 0.5rem 0;
            border: none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            font-size: 1.5rem;
            opacity: 80%;
        }

        textarea {
            height: 9rem;
            padding: 1.5rem;
        }

        .custom-file-input {
            display: none;
        }

        .custom-file-label {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
            padding: 1.125rem;
            margin: 0.5rem 0;
            border: none;
            border-radius: 0.5rem;
            box-sizing: border-box;
            font-size: 1.5rem;
            background-color: rgba(0, 0, 0, 0.3);
            color: white;
            cursor: pointer;
            opacity: 80%;
            text-align: left;
        }

        .custom-file-label.photo {
            height: 20rem;
            width: 50%;
            border-radius: 50%;
            padding: 2rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .custom-file-label.photo i {
            font-size: 4rem;
            margin-bottom: 1rem;
        }

        button {
            width: 100%;
            padding: 1.125rem;
            border: none;
            border-radius: 0.5rem;
            background-color: #000;
            color: #fff;
            font-size: 1.5rem;
            cursor: pointer;
            margin: 0.5rem 0;
            transition: transform 0.2s;
        }

        button:hover {
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            gap: 2.5rem;
        }

        .clicked {
            transform: scale(0.95);
        }
    </style>
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('donatur-form');
            const kembaliButton = document.getElementById('kembali');

            kembaliButton.addEventListener('click', function() {
                window.location.href = '/Home';
            });

            form.addEventListener('submit', function(event) {
                event.preventDefault();

                const nama = document.getElementById('nama').value;
                const siup = document.getElementById('siup').files[0];
                const alamat = document.getElementById('alamat').value;
                const foto = document.getElementById('foto').files[0];
                const deskripsi = document.getElementById('deskripsi').value;

                if (!nama || !siup || !alamat || !foto || !deskripsi) {
                    alert('Semua bidang harus diisi.');
                    return;
                }

                alert('Data berhasil dikirim!');
            });

            const customFileInputs = document.querySelectorAll('.custom-file-input');
            customFileInputs.forEach(input => {
                input.addEventListener('change', function() {
                    const label = input.previousElementSibling;
                    const fileName = input.files[0] ? input.files[0].name : 'Pilih gambar';
                    label.textContent = fileName;
                    label.insertAdjacentHTML('afterbegin', '<i class="fas fa-cloud-upload-alt"></i> ');
                });
            });

            const buttons = document.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('click', function() {
                    button.classList.add('clicked');
                    setTimeout(() => {
                        button.classList.remove('clicked');
                    }, 200);
                });
            });
        });
    </script>
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
