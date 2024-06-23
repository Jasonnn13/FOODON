document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('sign-up-form');

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

        // Proses sign up
        alert('Daftar berhasil!');
    });

    function validateEmail(email) {
        const emailPattern = /^[a-zA-Z0-9._-]+@(gmail\.com|yahoo\.com)$/;
        return emailPattern.test(email);
    }

    window.signUpWithFacebook = function() {
        alert('Daftar dengan Facebook belum diimplementasikan.');
    };

    window.signUpWithGoogle = function() {
        alert('Daftar dengan Google belum diimplementasikan.');
    };
});
