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
        
        <!-- Session Status -->
        <!-- Remove x-auth-session-status and replace with custom status display if needed -->

        <form method="POST" action="{{ route('login') }}">  
            @csrf

            <!-- Email Address -->
            <div>
                <input placeholder="Masukkan Email Anda" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" style="width: 100%; padding: 1.125rem; margin-bottom: 1rem; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;" />
                @if ($errors->has('email'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <!-- Password -->
            <div class="mt-4">
                <input placeholder="Masukkan Password Anda" id="password" type="password" name="password" required autocomplete="current-password" style="width: 100%; padding: 1.125rem; margin-bottom: 1rem; border: none; border-radius: 0.5rem; box-sizing: border-box; font-size: 1.75rem; opacity: 80%;" />
                @if ($errors->has('password'))
                    <span style="color: red; font-size: 1.5rem;">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" name="remember" style="rounded: border-gray-300; text-indigo-600; shadow-sm; focus:ring-indigo-500;">
                    <span class="ms-2 text-sm text-gray-600" style="margin-left: 0.5rem; font-size: 1.75rem;">{{ __('Remember me') }}</span>
                </label>
            </div>
            <button type="submit" style="width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; background-color: #ffffff; color: #000; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;  ">
                    {{ __('Log in') }}
                </button>
        </form>

        <hr style="margin: 2rem 0; border: none; border-top: 1px solid #fff;">

        <button class="social" onclick="loginWithFacebook()" style="display: flex; align-items: center; justify-content: center; background-color: #3b5998; color: #fff; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-facebook" style="margin-right: 1rem; font-size: 2rem;"></i> Masuk dengan Facebook
        </button>
        <button class="social google" onclick="loginWithGoogle()" style="display: flex; align-items: center; justify-content: center; background-color: #ffffff; color: #000; width: 100%; padding: 1.125rem; border: none; border-radius: 1rem; font-size: 1.75rem; cursor: pointer; margin: 1.5rem 0; transition: transform 0.2s;">
            <i class="fi fi-brands-google" style="margin-right: 1rem; font-size: 2rem;"></i> Masuk dengan Google
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
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
