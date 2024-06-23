<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap'>
</head>
<body style="font-family: 'Poppins', sans-serif; font-size: 2.25rem; background-color: #87CEEB; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; color: white;">
    <div class="container" style="width: 100%; max-width: 45rem; padding: 3rem; box-sizing: border-box; border-radius: 1rem; background-color: rgba(255, 255, 255, 0.1); text-align: center;">
        <h1 style="text-align: center; margin-bottom: 2rem; font-size: 4.5rem;">Masuk</h1>
        <form id="sign-in-form">
            <input type="email" id="email" placeholder="Masukkan Email Anda" required style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
            <input type="password" id="password" placeholder="Masukkan Password Anda" required style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
            <p><a href="#" style="color: #000000; text-decoration: none; font-size: 1.75rem;">Lupa Password?</a></p>
            <button type="submit" style="width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; background-color: #ffffff; color: #000; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">Masuk</button>
            <p>Belum mempunyai akun? <a href="/Signup" style="color: #000000; text-decoration: none; font-size: 1.75rem;">Daftar</a></p>
        </form>
        <hr>
        <button class="social" onclick="loginWithFacebook()" style="display: flex; align-items: center; justify-content: center; background-color: #3b5998; color: #fff; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-facebook" style="margin-right: 1rem; font-size: 2rem;"></i> Masuk dengan Facebook
        </button>
        <button class="social google" onclick="loginWithGoogle()" style="display: flex; align-items: center; justify-content: center; background-color: #ffffff; color: #000; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-google" style="margin-right: 1rem; font-size: 2rem;"></i> Masuk dengan Google
        </button>
    </div>

    <script>
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
    </script>
</body>
</html>
