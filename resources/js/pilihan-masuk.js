document.addEventListener('DOMContentLoaded', function() {
    const donaturButton = document.getElementById('donatur');
    const penerimaButton = document.getElementById('penerima');

    donaturButton.addEventListener('click', function() {
        window.location.href = '../data-donatur/data-donatur.php';
    });

    penerimaButton.addEventListener('click', function() {
        window.location.href = '../data-penerima/data-penerima.php';
    });

    // Animasi pada tombol saat diklik
    const buttons = document.querySelectorAll('.pilihan');
    buttons.forEach(button => {
        button.addEventListener('click', function() {
            button.classList.add('clicked');
            setTimeout(() => {
                button.classList.remove('clicked');
            }, 200);
        });
    });
});
