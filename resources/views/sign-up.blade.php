<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar</title>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap'>
</head>
<body style="font-family: 'Poppins', sans-serif; font-size: 2.25rem; background-color: #87CEEB; margin: 0; padding: 0; display: flex; justify-content: center; align-items: center; height: 100vh; color: white;">
    <div class="container" style="width: 100%; max-width: 45rem; padding: 3rem; box-sizing: border-box; border-radius: 1rem; background-color: rgba(255, 255, 255, 0.1); text-align: center;">
        <h1 style="text-align: center; margin-bottom: 2rem; font-size: 4.5rem;">Daftar</h1>
        
        <!-- Registration Form -->
        <form method="POST" action="{{ route('register') }}" id="sign-up-form">
            @csrf

            <!-- Email Address -->
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="Masukkan Email Anda" style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
                @if ($errors->has('email'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <!-- Phone Number -->
            <div>
                <input id="nomor" type="number" name="nomor" required placeholder="Masukkan Nomor Telepon Anda" style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
                @if ($errors->has('nomor'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('nomor') }}</span>
                @endif
            </div>

            <!-- Password -->
            <div>
                <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Masukkan Password Anda" style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
                @if ($errors->has('password'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <!-- Confirm Password -->
            <div>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password Anda" style="width: 100%; padding: 1.125rem; margin: 1.5rem 0; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;">
                @if ($errors->has('password_confirmation'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>

            <button type="submit" style="width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; background-color: #ffffff; color: #000; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">Daftar</button>
        </form>

        <hr>

        <button class="social" onclick="signUpWithFacebook()" style="display: flex; align-items: center; justify-content: center; background-color: #3b5998; color: #fff; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-facebook" style="margin-right: 1rem; font-size: 2rem;"></i> Daftar dengan Facebook
        </button>
        <button class="social google" onclick="signUpWithGoogle()" style="display: flex; align-items: center; justify-content: center; background-color: #ffffff; color: #000; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-google" style="margin-right: 1rem; font-size: 2rem;"></i> Daftar dengan Google
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.signUpWithFacebook = function() {
                alert('Daftar dengan Facebook belum diimplementasikan.');
            };

            window.signUpWithGoogle = function() {
                alert('Daftar dengan Google belum diimplementasikan.');
            };
        });
    </script>
</body>
</html>
