document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('sign-in-form');

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const email = document.getElementById('email').value;
        const password = document.getElementById('password').value;

        if (!validateEmail(email)) {
            alert('Email harus berakhir dengan @gmail.com atau @yahoo.com');
            return;
        }

        if (password.length < 8) {
            alert('Password harus terdiri dari minimal 8 karakter');
            return;
        }

        // Proses login
        alert('Login berhasil!');
    });

    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@(gmail\.com|yahoo\.com)$/;
        return emailPattern.test(email);
    }

    window.loginWithFacebook = function() {
        alert('Login dengan Facebook belum diimplementasikan.');
    };

    window.loginWithGoogle = function() {
        alert('Login dengan Google belum diimplementasikan.');
    };
});
