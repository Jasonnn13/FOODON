document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('donatur-form');
    const kembaliButton = document.getElementById('kembali');

    kembaliButton.addEventListener('click', function() {
        window.location.href = '../pilihan-masuk/pilihan-masuk.php';
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

        // Proses pengiriman data ke server
        alert('Data berhasil dikirim!');
    });

    // Menambahkan event listener untuk custom file input
    const customFileInputs = document.querySelectorAll('.custom-file-input');
    customFileInputs.forEach(input => {
        input.addEventListener('change', function() {
            const label = input.previousElementSibling;
            const fileName = input.files[0] ? input.files[0].name : 'Pilih gambar';
            label.textContent = fileName;
            label.insertAdjacentHTML('afterbegin', '<i class="fas fa-cloud-upload-alt"></i> ');
        });
    });

    // Animasi pada tombol saat diklik
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
