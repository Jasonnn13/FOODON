document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('penerima-form');
    const kembaliButton = document.getElementById('kembali');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        // Validasi input
        const username = document.getElementById('username').value;
        const nama = document.getElementById('nama').value;
        const umur = document.getElementById('umur').value;
        const stkm = document.getElementById('stkm').files[0];
        const alamat = document.getElementById('alamat').value;
        const foto = document.getElementById('foto').files[0];

        if (!username || !nama || !umur || !stkm || !alamat || !foto) {
            alert('Semua kolom harus diisi');
            return;
        }

        if (isNaN(umur) || umur <= 0) {
            alert('Umur harus diisi dengan angka yang valid');
            return;
        }

        // Simulasi pengiriman data ke server
        alert('Data berhasil dikirim!');

        // Menghubungkan ke backend
        const formData = new FormData();
        formData.append('username', username);
        formData.append('nama', nama);
        formData.append('umur', umur);
        formData.append('stkm', stkm);
        formData.append('alamat', alamat);
        formData.append('foto', foto);

        fetch('https://example.com/api/penerima', {
            method: 'POST',
            body: formData
        }).then(response => response.json())
          .then(data => {
              console.log(data);
              // Lakukan sesuatu setelah data berhasil dikirim
          })
          .catch(error => {
              console.error('Error:', error);
          });
    });

    kembaliButton.addEventListener('click', function() {
        window.location.href = '../pilihan-masuk/pilihan-masuk.php';
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
